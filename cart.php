<?php include('header.php'); ?>

<section class="cart-page">
    <div class="container-fluid px-4 px-md-5">
        <div class="row g-4">
            <div class="col-xl-8">
                <div class="cart-items-panel">
                    <div class="cart-panel-head d-flex justify-content-between align-items-center">
                        <h2>Your Cart</h2>
                        <span>3 Products</span>
                    </div>

                    <article class="cart-item-card">
                        <img src="<?php echo $base_url; ?>img/i2.jpg" alt="SOMN Cozify mattress" />
                        <div class="cart-item-content">
                            <div>
                                <p class="cart-item-kicker">MATTRESS</p>
                                <h3>Cozify Comfort Hybrid</h3>
                                <p class="cart-item-meta">Size: Queen | Firmness: Medium</p>
                            </div>
                            <div class="cart-item-actions">
                                <div class="qty-control">
                                    <button type="button">-</button>
                                    <span>1</span>
                                    <button type="button">+</button>
                                </div>
                                <p class="cart-item-price">$1,699</p>
                                <a href="#" class="cart-item-remove">Remove</a>
                            </div>
                        </div>
                    </article>

                    <article class="cart-item-card">
                        <img src="<?php echo $base_url; ?>img/i3.jpg" alt="SOMN Felicity mattress topper" />
                        <div class="cart-item-content">
                            <div>
                                <p class="cart-item-kicker">TOPPER</p>
                                <h3>Felicity Cooling Topper</h3>
                                <p class="cart-item-meta">Size: Queen | Color: Stone</p>
                            </div>
                            <div class="cart-item-actions">
                                <div class="qty-control">
                                    <button type="button">-</button>
                                    <span>1</span>
                                    <button type="button">+</button>
                                </div>
                                <p class="cart-item-price">$329</p>
                                <a href="#" class="cart-item-remove">Remove</a>
                            </div>
                        </div>
                    </article>

                    <article class="cart-item-card">
                        <img src="<?php echo $base_url; ?>img/i4.jpg" alt="SOMN Sci-Temp pillow set" />
                        <div class="cart-item-content">
                            <div>
                                <p class="cart-item-kicker">PILLOW</p>
                                <h3>Sci-Temp Pillow Set</h3>
                                <p class="cart-item-meta">Pack: 2 | Height: Mid Loft</p>
                            </div>
                            <div class="cart-item-actions">
                                <div class="qty-control">
                                    <button type="button">-</button>
                                    <span>1</span>
                                    <button type="button">+</button>
                                </div>
                                <p class="cart-item-price">$198</p>
                                <a href="#" class="cart-item-remove">Remove</a>
                            </div>
                        </div>
                    </article>

                    <div class="cart-support-band">
                        <div>
                            <h4>White-Glove Delivery Included</h4>
                            <p>
                                Free premium delivery, in-room setup, and old mattress removal on
                                eligible orders.
                            </p>
                        </div>
                        <a href="#" class="btn review-btn2" style="padding: 11px 15px 12px 15px;">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <aside class="cart-summary-card">
                    <h2>Order Summary</h2>
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <strong>$2,226</strong>
                    </div>
                    <div class="summary-row">
                        <span>Shipping</span>
                        <strong>Free</strong>
                    </div>
                    <div class="summary-row">
                        <span>Estimated Tax</span>
                        <strong>$178</strong>
                    </div>
                    <div class="summary-row total">
                        <span>Total</span>
                        <strong>$2,404</strong>
                    </div>

                    <label for="promoCode" class="summary-label">Promo Code</label>
                    <div class="summary-promo">
                        <input id="promoCode" type="text" placeholder="Enter code" />
                        <button type="button">Apply</button>
                    </div>

                    <button class="btn cart-checkout-btn w-100" type="button">
                        Proceed To Checkout
                    </button>

                    <p class="summary-note mb-0">
                        Secure checkout with major cards, PayPal, and installment options.
                    </p>
                </aside>
            </div>
        </div>

        <div class="cart-recommend mt-4">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                <div>
                    <p class="cart-eyebrow mb-1">COMPLETE YOUR SETUP</p>
                    <h2 class="mb-0">Suggested Add-ons</h2>
                </div>
                <a href="<?php echo $base_url; ?>product-list.php" class="btn review-btn2">Shop All Products</a>
            </div>

            <div class="row g-4 mt-1">
                <div class="col-md-4">
                    <div class="cart-addon-card">
                        <img src="<?php echo $base_url; ?>img/c1.jpg" alt="SOMN blanket" />
                        <div>
                            <h3>Weighted Blanket</h3>
                            <p>Thermoregulated fabric with balanced pressure support.</p>
                        </div>
                        <div class="cart-addon-foot">
                            <span>$189</span>
                            <button type="button">Add</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cart-addon-card">
                        <img src="<?php echo $base_url; ?>img/c2.jpg" alt="SOMN bedside lamp" />
                        <div>
                            <h3>Sunrise Bedside Light</h3>
                            <p>Wake naturally with guided light and sound routines.</p>
                        </div>
                        <div class="cart-addon-foot">
                            <span>$145</span>
                            <button type="button">Add</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cart-addon-card">
                        <img src="<?php echo $base_url; ?>img/c3.jpg" alt="SOMN linen sheet set" />
                        <div>
                            <h3>Linen Sheet Set</h3>
                            <p>Breathable, garment-washed linen in seasonal tones.</p>
                        </div>
                        <div class="cart-addon-foot">
                            <span>$229</span>
                            <button type="button">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>