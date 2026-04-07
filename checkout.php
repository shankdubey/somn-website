<?php include('header.php'); ?>

<section class="checkout-page" style="padding-top: 3rem;">
    <div class="container-fluid px-4 px-md-5">
        <div class="row g-4">
            <div class="col-xl-8">
                <div class="checkout-form-wrap">
                    <div class="cart-panel-head d-flex justify-content-between align-items-center">
                        <h2>Checkout</h2>
                    </div>
                    <div class="checkout-progress">
                        <span class="active">1. Information</span>
                        <span>2. Shipping</span>
                        <span>3. Payment</span>
                        <span>4. Review</span>
                    </div>

                    <div class="checkout-block">
                        <h2>Contact</h2>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="checkoutEmail">Email Address</label>
                                <input class="form-control" id="checkoutEmail" type="email" placeholder="you@example.com" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="checkoutPhone">Phone Number</label>
                                <input class="form-control" id="checkoutPhone" type="tel" placeholder="+1 (555) 123-4567" />
                            </div>
                        </div>
                    </div>

                    <div class="checkout-block">
                        <h2>Shipping Address</h2>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="firstName">First Name</label>
                                <input class="form-control" id="firstName" type="text" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="lastName">Last Name</label>
                                <input class="form-control" id="lastName" type="text" />
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="street">Street Address</label>
                                <input class="form-control" id="street" type="text" />
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="city">City</label>
                                <input class="form-control" id="city" type="text" />
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="state">State</label>
                                <select class="form-select" id="state">
                                    <option selected>New York</option>
                                    <option>California</option>
                                    <option>Texas</option>
                                    <option>Florida</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="zipCode">ZIP Code</label>
                                <input class="form-control" id="zipCode" type="text" />
                            </div>
                        </div>
                    </div>



                    <div class="checkout-block mb-0">
                        <h2>Order Notes</h2>
                        <textarea
                            class="form-control checkout-note"
                            rows="4"
                            placeholder="Apartment access details, preferred delivery window, or special instructions."></textarea>
                        <div class="d-flex align-items-start gap-2 mt-3">
                            <input id="termsAccept" type="checkbox" class="mt-1" />
                            <label for="termsAccept" class="privacy-text">
                                I agree to SOMN Terms & Conditions and Privacy Policy.
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <aside class="checkout-summary">
                    <h2>Order Summary</h2>

                    <div class="summary-item">
                        <img src="<?php echo $base_url; ?>img/c1.jpg" alt="Cozify Comfort Hybrid" />
                        <div>
                            <h3>Cozify Comfort Hybrid</h3>
                            <p>Queen | Medium</p>
                            <span>$1,699</span>
                        </div>
                    </div>

                    <div class="summary-item">
                        <img src="<?php echo $base_url; ?>img/c2.jpg" alt="Felicity Cooling Topper" />
                        <div>
                            <h3>Felicity Cooling Topper</h3>
                            <p>Queen | Stone</p>
                            <span>$329</span>
                        </div>
                    </div>

                    <div class="summary-meta">
                        <div><span>Subtotal</span><strong>$2,028</strong></div>
                        <div><span>Shipping</span><strong>Free</strong></div>
                        <div><span>Estimated Tax</span><strong>$162</strong></div>
                        <div class="total"><span>Total</span><strong>$2,190</strong></div>
                    </div>

                    <div class="checkout-pay-options">
                        <p>Select Payment Method</p>
                        <label>
                            <input type="radio" name="paymentOption" checked />
                            <img src="img/paypal.png" style="width: 100px;" alt="">
                        </label>

                        <label>
                            <input type="radio" name="paymentOption" />
                            <img src="img/visa.png" style="width: 100px;" alt="">

                        </label>
                    </div>

                    <button type="button" class="btn checkout-submit w-100">
                        Place Order
                    </button>
                    <a href="<?php echo $base_url; ?>cart.php" class="checkout-back">Return To Cart</a>
                </aside>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>