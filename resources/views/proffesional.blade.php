@extends('layouts.app')
@section('content')       <!--Start breadcrumb area-->

        <!--Start blog area-->
        <section id="blog-area" class="blog-large-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-post">
                            <!--Start Single blog Post style4-->
                            <div class="single-blog-post style4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="/images/blog/v2-3.jpg" height="250px" width="350px" alt="Awesome Image">

                                </div>
                                <div class="text-holder">
                                    <h3 class="blog-title"><a href="/proffesional-view">Cornerstone architects</a></h3>
                                    <div class="meta-box">
                                        <ul class="meta-info">
                                            <li>Call <a href="#">071974014</a></li>
                                            <li>Location <a href="#">Nairobi</a></li>
                                            <li>Reviews <a href="#"></a></li>

                                        </ul>
                                    </div>
                                    <div class="text">
                                        <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound
                                            to all ensue; and equal blame belongs to those who fail in their duty through shrinking.</p>
                                    </div>
                                    <div class="button">
                                        <a class="btn btn-primary" href="/proffesional-view">Read More...</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Single blog Post style4-->

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="post-pagination text-center">
                                    <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Start sidebar Wrapper-->
                    <div class="col-xl-3 col-lg-4 col-md-7 col-sm-12">
                        <div class="sidebar-wrapper">
                            <div class="sidebar-search-box">
                                <form class="search-form" action="#">
                                    <input placeholder="Your Keyword..." type="text">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!--Start single sidebar-->
                            <div class="single-sidebar categories-box">
                                <div class="sidebar-title">
                                    <div class="title">Categories</div>
                                </div>
                                <ul class="categories clearfix">
                                    <li><a href="#">Modern Design<sup>(7)</sup></a></li>
                                    <li><a href="#">Architecture<sup>(5)</sup></a></li>
                                    <li><a href="#">Interior & Exterior<sup>(4)</sup></a></li>
                                    <li><a href="#">Residential<sup>(3)</sup></a></li>
                                    <li><a href="#">Commercial Works<sup>(8)</sup></a></li>
                                    <li><a href="#">Uncategorized<sup>(2)</sup></a></li>
                                </ul>
                            </div>
                            <!--End single sidebar-->



                        </div>
                    </div>
                    <!--End Sidebar Wrapper-->

                </div>
            </div>
        </section>
        <!--End blog area-->

      @stop
