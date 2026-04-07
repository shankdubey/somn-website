<?php

/**
 * SOMN theme setup.
 *
 * @package somn
 */

if (! defined('ABSPATH')) {
	exit;
}

function somn_setup()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo');
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 700,
			'single_image_width'    => 1200,
		)
	);
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');

	register_nav_menus(
		array(
			'primary'         => __('Primary Menu', 'somn'),
			'explore'         => __('Explore Menu', 'somn'),
			'footer_company'  => __('Footer Company', 'somn'),
			'footer_products' => __('Footer Products', 'somn'),
			'footer_support'  => __('Footer Support', 'somn'),
			'footer_follow'   => __('Footer Follow', 'somn'),
			'footer_legal'    => __('Footer Legal', 'somn'),
		)
	);
}
add_action('after_setup_theme', 'somn_setup');

function somn_widgets_init()
{
	register_sidebar(
		array(
			'name'          => __('Shop Sidebar', 'somn'),
			'id'            => 'shop-sidebar',
			'description'   => __('Widgets shown on WooCommerce archive pages.', 'somn'),
			'before_widget' => '<div class="filter-block">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6>',
		)
	);
}
add_action('widgets_init', 'somn_widgets_init');

function somn_enqueue_assets()
{
	wp_enqueue_style('somn-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2');
	wp_enqueue_style('somn-bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css', array(), '1.11.3');
	wp_enqueue_style('somn-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0');
	wp_enqueue_style('somn-style', get_stylesheet_uri(), array('somn-bootstrap', 'somn-bootstrap-icons', 'somn-swiper'), wp_get_theme()->get('Version'));

	wp_enqueue_script('somn-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
	wp_enqueue_script('somn-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true);
	wp_enqueue_script('somn-theme', get_template_directory_uri() . '/assets/js/theme.js', array('jquery', 'somn-bootstrap', 'somn-swiper'), wp_get_theme()->get('Version'), true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'somn_enqueue_assets');

function somn_asset_url($path)
{
	return trailingslashit(get_template_directory_uri()) . ltrim($path, '/');
}

function somn_get_shop_url()
{
	if (function_exists('wc_get_page_permalink')) {
		return wc_get_page_permalink('shop');
	}

	return home_url('/shop/');
}

function somn_get_page_url($slug)
{
	$page = get_page_by_path($slug);

	if ($page) {
		return get_permalink($page);
	}

	return home_url('/' . $slug . '/');
}

function somn_get_product_url($slug)
{
	$product = get_page_by_path($slug, OBJECT, 'product');

	if ($product) {
		return get_permalink($product);
	}

	return somn_get_shop_url();
}

function somn_get_account_page_url()
{
	if (function_exists('wc_get_page_permalink')) {
		$account_url = wc_get_page_permalink('myaccount');

		if ($account_url) {
			return $account_url;
		}
	}

	return home_url('/my-account/');
}

function somn_get_login_page_url()
{
	return somn_get_page_url('login');
}

function somn_get_register_page_url()
{
	return somn_get_page_url('register');
}

function somn_get_forgot_password_page_url()
{
	return somn_get_page_url('forgot-password');
}

function somn_get_auth_notice()
{
	$notice = array(
		'type'    => isset($_GET['auth_notice_type']) ? sanitize_key(wp_unslash($_GET['auth_notice_type'])) : '',
		'message' => isset($_GET['auth_notice']) ? sanitize_text_field(wp_unslash($_GET['auth_notice'])) : '',
	);

	if (! in_array($notice['type'], array('success', 'error'), true)) {
		$notice['type'] = '';
	}

	return $notice;
}

function somn_get_auth_redirect_url($base_url, $type, $message)
{
	return add_query_arg(
		array(
			'auth_notice_type' => sanitize_key($type),
			'auth_notice'      => sanitize_text_field($message),
		),
		$base_url
	);
}

function somn_handle_login_submission()
{
	if ('POST' !== $_SERVER['REQUEST_METHOD']) {
		return;
	}

	if (empty($_POST['somn_action']) || 'login' !== $_POST['somn_action']) {
		return;
	}

	if (! isset($_POST['somn_login_nonce']) || ! wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['somn_login_nonce'])), 'somn_login_action')) {
		wp_safe_redirect(somn_get_auth_redirect_url(somn_get_login_page_url(), 'error', __('Your session expired. Please try again.', 'somn')));
		exit;
	}

	$user_login = isset($_POST['log']) ? sanitize_text_field(wp_unslash($_POST['log'])) : '';

	if (is_email($user_login)) {
		$user = get_user_by('email', $user_login);

		if ($user instanceof WP_User) {
			$user_login = $user->user_login;
		}
	}

	$creds = array(
		'user_login'    => $user_login,
		'user_password' => isset($_POST['pwd']) ? (string) wp_unslash($_POST['pwd']) : '',
		'remember'      => ! empty($_POST['rememberme']),
	);

	$user = wp_signon($creds, is_ssl());

	if (is_wp_error($user)) {
		wp_safe_redirect(somn_get_auth_redirect_url(somn_get_login_page_url(), 'error', $user->get_error_message()));
		exit;
	}

	wp_safe_redirect(somn_get_auth_redirect_url(somn_get_account_page_url(), 'success', __('Welcome back. You are now signed in.', 'somn')));
	exit;
}
add_action('init', 'somn_handle_login_submission');

function somn_handle_register_submission()
{
	if ('POST' !== $_SERVER['REQUEST_METHOD']) {
		return;
	}

	if (empty($_POST['somn_action']) || 'register' !== $_POST['somn_action']) {
		return;
	}

	if (! isset($_POST['somn_register_nonce']) || ! wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['somn_register_nonce'])), 'somn_register_action')) {
		wp_safe_redirect(somn_get_auth_redirect_url(somn_get_register_page_url(), 'error', __('Your session expired. Please try again.', 'somn')));
		exit;
	}

	$first_name = isset($_POST['first_name']) ? sanitize_text_field(wp_unslash($_POST['first_name'])) : '';
	$last_name  = isset($_POST['last_name']) ? sanitize_text_field(wp_unslash($_POST['last_name'])) : '';
	$email      = isset($_POST['email']) ? sanitize_email(wp_unslash($_POST['email'])) : '';
	$password   = isset($_POST['password']) ? (string) wp_unslash($_POST['password']) : '';
	$username   = isset($_POST['username']) ? sanitize_user(wp_unslash($_POST['username'])) : '';

	if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
		wp_safe_redirect(somn_get_auth_redirect_url(somn_get_register_page_url(), 'error', __('Please complete all required fields.', 'somn')));
		exit;
	}

	if (empty($username)) {
		$username = sanitize_user(current(explode('@', $email)), true);
	}

	if (username_exists($username)) {
		$username .= wp_generate_password(4, false, false);
	}

	if (function_exists('wc_create_new_customer')) {
		$user_id = wc_create_new_customer(
			$email,
			$username,
			$password,
			array(
				'first_name' => $first_name,
				'last_name'  => $last_name,
			)
		);
	} else {
		$user_id = wp_insert_user(
			array(
				'user_login' => $username,
				'user_pass'  => $password,
				'user_email' => $email,
				'first_name' => $first_name,
				'last_name'  => $last_name,
				'role'       => 'subscriber',
			)
		);
	}

	if (is_wp_error($user_id)) {
		wp_safe_redirect(somn_get_auth_redirect_url(somn_get_register_page_url(), 'error', $user_id->get_error_message()));
		exit;
	}

	wp_update_user(
		array(
			'ID'         => $user_id,
			'first_name' => $first_name,
			'last_name'  => $last_name,
			'display_name' => trim($first_name . ' ' . $last_name),
		)
	);

	wp_set_current_user($user_id);
	wp_set_auth_cookie($user_id);

	wp_safe_redirect(somn_get_auth_redirect_url(somn_get_account_page_url(), 'success', __('Your account has been created successfully.', 'somn')));
	exit;
}
add_action('init', 'somn_handle_register_submission');

function somn_disable_password_strength_meter()
{
	if (
		is_account_page() ||
		is_page('login') ||
		is_page('register') ||
		is_page('forgot-password')
	) {
		wp_dequeue_script('wc-password-strength-meter');
		wp_deregister_script('wc-password-strength-meter');
	}
}
add_action('wp_enqueue_scripts', 'somn_disable_password_strength_meter', 100);

function somn_handle_forgot_password_submission()
{
	if ('POST' !== $_SERVER['REQUEST_METHOD']) {
		return;
	}

	if (empty($_POST['somn_action']) || 'forgot_password' !== $_POST['somn_action']) {
		return;
	}

	if (! isset($_POST['somn_forgot_password_nonce']) || ! wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['somn_forgot_password_nonce'])), 'somn_forgot_password_action')) {
		wp_safe_redirect(somn_get_auth_redirect_url(somn_get_forgot_password_page_url(), 'error', __('Your session expired. Please try again.', 'somn')));
		exit;
	}

	$user_login = isset($_POST['user_login']) ? sanitize_text_field(wp_unslash($_POST['user_login'])) : '';

	if (empty($user_login)) {
		wp_safe_redirect(somn_get_auth_redirect_url(somn_get_forgot_password_page_url(), 'error', __('Enter your email address or username.', 'somn')));
		exit;
	}

	$result = retrieve_password($user_login);

	if (true === $result) {
		wp_safe_redirect(somn_get_auth_redirect_url(somn_get_forgot_password_page_url(), 'success', __('Password reset instructions have been sent if the account exists.', 'somn')));
		exit;
	}

	if (is_wp_error($result)) {
		wp_safe_redirect(somn_get_auth_redirect_url(somn_get_forgot_password_page_url(), 'error', $result->get_error_message()));
		exit;
	}
}
add_action('init', 'somn_handle_forgot_password_submission');

function somn_menu_fallback($items)
{
	echo '<ul>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	foreach ($items as $item) {
		echo '<li><a href="' . esc_url($item['url']) . '">' . esc_html($item['label']) . '</a></li>';
	}
	echo '</ul>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

function somn_primary_menu_fallback()
{
	somn_menu_fallback(
		array(
			array('label' => __('Home', 'somn'), 'url' => home_url('/')),
			array('label' => __('Shop All Products', 'somn'), 'url' => somn_get_shop_url()),
			array('label' => __('About', 'somn'), 'url' => somn_get_page_url('about')),
			array('label' => __('Contact', 'somn'), 'url' => somn_get_page_url('contact')),
		)
	);
}

function somn_explore_menu_fallback()
{
	somn_menu_fallback(
		array(
			array('label' => __('Complete Systems', 'somn'), 'url' => somn_get_shop_url()),
			array('label' => __('Mattresses', 'somn'), 'url' => add_query_arg('product_cat', 'mattresses', somn_get_shop_url())),
			array('label' => __('Bedding', 'somn'), 'url' => add_query_arg('product_cat', 'bedding', somn_get_shop_url())),
			array('label' => __('Accessories', 'somn'), 'url' => add_query_arg('product_cat', 'accessories', somn_get_shop_url())),
		)
	);
}

function somn_company_menu_fallback()
{
	somn_menu_fallback(
		array(
			array('label' => __('Home', 'somn'), 'url' => home_url('/')),
			array('label' => __('About Us', 'somn'), 'url' => somn_get_page_url('about')),
			array('label' => __('Our Story', 'somn'), 'url' => somn_get_page_url('about')),
			array('label' => __('Contact', 'somn'), 'url' => somn_get_page_url('contact')),
		)
	);
}

function somn_products_menu_fallback()
{
	somn_menu_fallback(
		array(
			array('label' => __('Shop All', 'somn'), 'url' => somn_get_shop_url()),
			array('label' => __('Cozify', 'somn'), 'url' => somn_get_product_url('cozify')),
			array('label' => __('Felicity', 'somn'), 'url' => somn_get_product_url('felicity')),
			array('label' => __('Sci-Temp', 'somn'), 'url' => somn_get_product_url('sci-temp')),
		)
	);
}

function somn_support_menu_fallback()
{
	somn_menu_fallback(
		array(
			array('label' => __('FAQs', 'somn'), 'url' => somn_get_page_url('contact')),
			array('label' => __('Shipping & Delivery', 'somn'), 'url' => somn_get_page_url('contact')),
			array('label' => __('Returns & Exchanges', 'somn'), 'url' => somn_get_page_url('contact')),
			array('label' => __('Warranty', 'somn'), 'url' => somn_get_page_url('contact')),
		)
	);
}

function somn_follow_menu_fallback()
{
	somn_menu_fallback(
		array(
			array('label' => __('Instagram', 'somn'), 'url' => '#'),
			array('label' => __('Facebook', 'somn'), 'url' => '#'),
			array('label' => __('Pinterest', 'somn'), 'url' => '#'),
		)
	);
}

function somn_legal_menu_fallback()
{
	somn_menu_fallback(
		array(
			array('label' => __('Privacy Policy', 'somn'), 'url' => somn_get_page_url('privacy-policy')),
			array('label' => __('Terms & Conditions', 'somn'), 'url' => somn_get_page_url('terms-and-conditions')),
		)
	);
}

add_filter(
	'woocommerce_enqueue_styles',
	function () {
		return array();
	}
);

add_filter(
	'woocommerce_show_page_title',
	function () {
		return false;
	}
);

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

function somn_cart_count_fragment($fragments)
{
	ob_start();
?>
	<span class="side-menu-count"><?php echo esc_html(WC()->cart ? WC()->cart->get_cart_contents_count() : 0); ?></span>
<?php
	$fragments['.side-menu-count'] = ob_get_clean();
	return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'somn_cart_count_fragment');

function somn_loop_columns()
{
	return 3;
}
add_filter('loop_shop_columns', 'somn_loop_columns');
