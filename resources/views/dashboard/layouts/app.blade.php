@extends('layouts.app')
@section('content')


<!--Start Checkout area-->
<section class="checkout-area" id="app">

    <div class="bottom">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
              <!--Start single sidebar-->
              <div class="single-sidebar-box pdbtm">
                  <div class="shop-sidebar-title">
                      <h3>Menu</h3>
                  </div>
                  <ul class="categories clearfix">
                      <li><a href="/dashboard/profile">Profile</a></li>
                      <li><a href="/dashboard/project">Projects</a></li>
                      <!-- <li><a href="#">Sell a product</a></li> -->
                  </ul>
              </div>
              <!--End single sidebar-->

          </div>

            <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12">
                @yield('dashboard')
            </div>
          </div>


        </div>
    </div>
</section>
<!--End Checkout area-->
@stop
