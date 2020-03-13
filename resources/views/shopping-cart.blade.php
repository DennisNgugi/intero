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



<!--Start cart area-->
<section class="cart-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th class="prod-column">Products</th>
                                <th>&nbsp;</th>
                                <th>Quantity</th>
                                <th class="availability">Availability</th>
                                <th class="price">Price</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2" class="prod-column">
                                    <div class="column-box">
                                        <div class="prod-thumb">
                                            <a href="#"><img src="/images/shop/product-thumb-1.jpg" alt=""></a>
                                        </div>
                                        <div class="title">
                                            <h3 class="prod-title">Power Remote</h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="qty">
                                    <input class="quantity-spinner" type="text" value="1" name="quantity">
                                </td>
                                <td class="unit-price">
                                    <div class="available-info">
                                        <span class="icon fa fa-check thm-bg-clr"></span>Item(s)<br>Avilable Now
                                    </div>
                                </td>
                                <td class="price">$34.99</td>
                                <td class="sub-total">$34.99</td>
                                <td>
                                    <div class="remove">
                                        <div class="checkbox">
                                            <label>
                                        <input name="remove" type="checkbox">
                                        <span>Remove</span>
                                    </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="prod-column">
                                    <div class="column-box">
                                        <div class="prod-thumb">
                                            <a href="#"><img src="/images/shop/product-thumb-2.jpg" alt=""></a>
                                        </div>
                                        <div class="title">
                                            <h3 class="prod-title">USB Power Bank</h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="qty">
                                    <input class="quantity-spinner" type="text" value="2" name="quantity">
                                </td>
                                <td class="unit-price">
                                    <div class="available-info">
                                        <span class="icon fa fa-check thm-bg-clr"></span>Item(s)<br>Avilable Now
                                    </div>
                                </td>
                                <td class="price">$29.99</td>
                                <td class="sub-total">$29.99</td>
                                <td>
                                    <div class="remove">
                                        <div class="checkbox">
                                            <label>
                                        <input name="remove" type="checkbox">
                                        <span>Remove</span>
                                    </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row cart-middle">
            <div class="col-xl-6 col-lg-9 col-md-8 col-sm-12">
                <div class="apply-coupon">
                    <input type="text" name="coupon-code" value="" placeholder="Enter Coupon Code...">
                    <div class="apply-coupon-button">
                        <button class="btn-one" type="button">Apply Coupon</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-3 col-md-4 col-sm-12">
                <div class="update-cart pull-right">
                    <button class="btn-one" type="button">Update Cart</button>
                </div>
            </div>
        </div>

        <div class="row cart-bottom">
            <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12">
                <div class="calculate-shipping">
                    <div class="shop-page-title">
                        <div class="title">Shipping <span>Calculate</span></div>
                    </div>
                    <select class="selectmenu">
                <option selected="selected">United Kingdom (UK)</option>
                <option>United Kingdom (UK)</option>
                <option>United State (USA)</option>
                <option>France</option>
    </select>
                    <div class="row">
                        <div class="col-lg-6">
                            <input class="mar-bottom" type="text" placeholder="State / Country" required>
                        </div>
                        <div class="col-lg-6">
                            <input class="zip-code" type="text" placeholder="Zip Code" required>
                        </div>
                    </div>
                    <button class="btn-one" type="submit">update Totals</button>
                </div>
            </div>
            <!--Start cart total -->
            <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12">
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
                    <button class="btn-one checkout-btn">Proceed to Checkout</button>
                </div>
            </div>
            <!--End cart total -->
        </div>

    </div>
</section>
<!--End cart area-->
@stop
