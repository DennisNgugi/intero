@extends('layouts.app')
@section('content')

@section('departmentList')
@foreach($department as $d)
<li><a href="/department/{{$d->id}}/{{$d->slug}}">{{$d->department_name}}</a></li>
@endforeach

@stop
        <!--Main Slider-->
        <section class="main-slider style3">
            <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
                <div class="rev_slider fullwidthabanner" id="rev_slider_three" data-version="5.4.1">
                    <ul>
                        <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default"
                            data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slides/v3-1.jpg"
                            data-title="Slide Title" data-transition="parallaxvertical">

                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/slides/v3-1.jpg">

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','500','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['-145','-100','-100','-90']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="big-title">
                                        Make Your<br> Home Exquisite.
                                    </div>
                                </div>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','500','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['-15','15','-5','0']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="text">Duty through weakness of will, which is the same as saying through<br> shrinking from toil and pain.</div>
                                </div>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','500','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['85','115','90','90']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="btn-box">
                                        <a class="btn-one" href="#">About Company<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>

                        </li>

                        <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default"
                            data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slides/v3-2.jpg"
                            data-title="Slide Title" data-transition="parallaxvertical">

                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/slides/v3-2.jpg">

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','500','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['-145','-100','-100','-90']" data-x="['right','right','right','right']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content">
                                    <div class="big-title">
                                        Beautiful Living<br> Solutions.
                                    </div>
                                </div>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','500','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['-15','15','-5','0']" data-x="['right','right','right','right']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content">
                                    <div class="text">Duty through weakness of will, which is the same as saying through<br> shrinking from toil and pain.</div>
                                </div>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','500','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['85','115','90','90']" data-x="['right','right','right','right']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content">
                                    <div class="btn-box">
                                        <a class="btn-one" href="#">Our Services<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>

                        </li>

                        <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default"
                            data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slides/v3-3.jpg"
                            data-title="Slide Title" data-transition="parallaxvertical">

                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/slides/v3-3.jpg">

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['900','800','500','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['-145','-100','-100','-90']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="big-title">
                                        Ten Kitchen<br> Product Highlights.
                                    </div>
                                </div>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['900','800','500','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['-15','15','-5','0']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="text">Duty through weakness of will, which is the same as saying through<br> shrinking from toil and pain.</div>
                                </div>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['900','800','500','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['85','115','90','90']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="btn-box">
                                        <a class="btn-one" href="#">Our Products<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Main Slider-->

        <!--Start services style1 area-->
        <section class="services-style1-area">
            <div class="container">
                <div class="sec-title with-text max-width text-center">
                    <!-- <p>What We Do</p> -->
                    <div class="title">DIscover products for your  <span>Home / Office</span></div>
                    <!-- <p class="bottom-text">We are an Interior Designer, Who believe in excellence, quality and honesty, yes we design beautiful home interiors.</p> -->
                </div>
                <div class="row">
                    <!--Start single service style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1">
                            <div class="img-holder">
                                <img src="/images/services/1.jpg" alt="Awesome Image">
                                <!-- <div class="overlay-style-two"></div> -->
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-lamp"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Lighting</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-lamp"></span>
                                        </div>
                                        <div class="count">
                                            <h1>01</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Lighting</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href="#"><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                  <div class="title">
                                      <h3>Lighting</h3>
                                  </div>
                                  <div class="read-more">
                                      <a href="#"><span class="icon-next"></span></a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="/images/services/2.jpg" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-paint"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Coloring</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-paint"></span>
                                        </div>
                                        <div class="count">
                                            <h1>02</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Coloring</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href="#"><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>On that others hand, we will denounce with all righteous of demoralized charms.</p>
                                    </div>
                                    <div class="read-more">
                                        <a href="#"><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="/images/services/3.jpg" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-floor"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Patterns</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-floor"></span>
                                        </div>
                                        <div class="count">
                                            <h1>03</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Patterns</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href="#"><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>On that others hand, we will denounce with all righteous of demoralized charms.</p>
                                    </div>
                                    <div class="read-more">
                                        <a href="#"><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="/images/services/4.jpg" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-window"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Textures</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-window"></span>
                                        </div>
                                        <div class="count">
                                            <h1>04</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Textures</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href="#"><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>On that others hand, we will denounce with all righteous of demoralized charms.</p>
                                    </div>
                                    <div class="read-more">
                                        <a href="#"><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                </div>
            </div>
        </section>
        <!--End services style1 area-->

        <!--Start slogan style2 area-->
        <section class="slogan-style2-area" style="background-image:url(/images/parallax-background/slogan-bg.jpg);">
            <div class="icon-holder">
                <span class="flaticon-car"></span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title">
                                <h1>Creating lasting impressions through<br> <span>interior design.</span></h1>
                            </div>
                            <div class="button">
                                <a class="btn-one call-us" href="#"><i class="icon-music"></i>+324 123 45 978</a>
                                <a class="btn-one" href="#">Maintenance Guide<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End slogan style2 area-->


        <!--Start latest blog area style2-->
        <section class="latest-blog-area style2">
            <div class="container inner-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="sec-title float-left">
                            <p>Find professionals</p>
                            <div class="title">Services you can get <span>.....</span></div>
                        </div>
                        <div class="more-blog-button float-right">
                            <!-- <a class="btn-two" href="blog.html">More News<span class="flaticon-next"></span></a> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--Start single blog post-->
                    @foreach($project as $p)
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <img src="{{$p->thumbnail}}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <a href="#"><span class="flaticon-zoom"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="post-date">
                                    <h3>02 <span>Mar 2019</span></h3>
                                </div>
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li>By <a href="#">Rubin Santro</a></li>
                                        <li>In <a href="#">Contemporary</a></li>
                                    </ul>
                                </div>
                                <h3 class="blog-title"><a href="blog-single.html">{{$p->project_name}}</a></h3>
                                <div class="text">
                                    <p>{{$p->description}}</p>
                                    <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End single blog post-->


                </div>
            </div>
        </section>
        <!--End latest blog area style2-->
@stop
