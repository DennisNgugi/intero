@extends('layouts.app')
@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url(/images/resources/breadcrumb-bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Shopping cart</span>
                        <h1>That Perfectly Fits Your Life</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li class="active">Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Checkout area-->
<section class="checkout-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="exisitng-customer">
                    <h5>Exisitng Customer?<a href="#">Click here to login</a></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="coupon">
                    <h5>Have a Coupon? <a href="#">Click here to enter your code</a></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="form billing-info">
                    <div class="shop-page-title">
                        <div class="title">Billing <span>Address</span></div>
                    </div>
                    <form method="post" action="#">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="field-label">Country*</div>
                                <div class="field-input">
                                    <input type="text" name="country" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">First Name*</div>
                                <div class="field-input">
                                    <input type="text" name="fname" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">Last Name *</div>
                                <div class="field-input">
                                    <input type="text" name="lname" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Address *</div>
                                <div class="field-input">
                                    <input type="text" name="address" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-input">
                                    <input type="text" name="address" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Town / City *</div>
                                <div class="field-input">
                                    <input type="text" name="town-city" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Contact Info *</div>
                                <div class="field-input">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-input">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="create-acc">
                                    <div class="checkbox">
                                        <label>
                                    <input type="checkbox" name="ship-same-address">
                                    <span>Create an Account</span>
                                </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="form shipping-info">
                    <div class="shop-page-title">
                        <div class="title">Shipping to a Different <span>Address</span><input type="checkbox"></div>
                    </div>
                    <form method="post" action="#">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="field-label">Country*</div>
                                <div class="field-input">
                                    <input type="text" name="country" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">First Name*</div>
                                <div class="field-input">
                                    <input type="text" name="fname" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">Last Name *</div>
                                <div class="field-input">
                                    <input type="text" name="lname" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Address *</div>
                                <div class="field-input">
                                    <input type="text" name="address" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-input">
                                    <input type="text" name="address" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Town / City *</div>
                                <div class="field-input">
                                    <input type="text" name="town-city" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Other Notes</div>
                                <div class="field-input">
                                    <textarea name="other-notes" placeholder="Special notes about your order..."></textarea>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="table">
                        <div class="shop-page-title">
                            <div class="title">Order <span>Summary</span></div>
                        </div>
                        <table class="cart-table">
                            <thead class="cart-header">
                                <tr>
                                    <th class="product-column">Products</th>
                                    <th>&nbsp;</th>
                                    <th>Quantity</th>
                                    <th class="price">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" class="product-column">
                                        <div class="column-box">
                                            <div class="prod-thumb">
                                                <a href="#"><img src="/images/shop/product-thumb-1.jpg" alt=""></a>
                                            </div>
                                            <div class="product-title">
                                                <h3>Power Remote</h3>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="qty">
                                        <input class="quantity-spinner" type="text" value="1" name="quantity">
                                    </td>
                                    <td class="price">$69.98</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="product-column">
                                        <div class="column-box">
                                            <div class="prod-thumb">
                                                <a href="#"><img src="/images/shop/product-thumb-2.jpg" alt=""></a>
                                            </div>
                                            <div class="product-title">
                                                <h3>USB Power Bank</h3>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="qty">
                                        <input class="quantity-spinner" type="text" value="2" name="quantity">
                                    </td>
                                    <td class="price">$29.99</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="cart-total">
                        <div class="shop-page-title">
                            <div class="title">Cart <span>Totals</span></div>
                        </div>
                        <ul class="cart-total-table">
                            <li class="clearfix">
                                <span class="col col-title">Cart Subtotal</span>
                                <span class="col">$146.00</span>
                            </li>
                            <li class="clearfix">
                                <span class="col col-title">Shipping and Handling</span>
                                <span class="col">$40.00</span>
                            </li>
                            <li class="clearfix">
                                <span class="col col-title">Order Total</span>
                                <span class="col">$146.00</span>
                            </li>
                        </ul>

                        <div class="payment-options">
                            <div class="option-block">
                                <div class="checkbox">
                                    <label>
                                <input name="pay-us" type="checkbox">
                                <span>Direct Bank Transfer</span>
                            </label>
                                </div>
                                <div class="text">
                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                </div>
                            </div>
                            <div class="option-block">
                                <div class="radio-block">
                                    <div class="checkbox">
                                        <label>
                                    <input name="pay-us" type="checkbox">
                                    <span>Paypal <b>What is Paypal</b></span>
                                </label>
                                    </div>
                                </div>
                            </div>
                            <div class="placeorder-button text-left">
                                <button class="btn-one" type="submit">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Checkout area-->
@stop
