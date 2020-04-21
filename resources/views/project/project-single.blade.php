@extends('layouts.intero')
@section('content')
  <!--Start Single Post Info Area-->
  <section class="single-post-info-area">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="single-post-info-content text-center">
                      <div class="meta-box">
                          <ul class="meta-info">
                              <li>By <a href="#">{{$project_single[0]->users->name}}</a></li>
                              <li>Company name: <a href="#">{{$project_single[0]->users->company_name}}</a></li>
                              <li>Contact: <a href="#">{{$project_single[0]->users->contact}}</a></li>
                              <li>Email: <a href="#">{{$project_single[0]->users->email}}</a></li>
                          </ul>
                      </div>
                      <h1 class="blog-title">{{ $project_single[0]->project_name }}</h1>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--End Single Post Info Area-->

  <!--Start blog single area-->
  <section id="blog-area" class="blog-single-area">
      <div class="container">
          <div class="row">
              <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                  <div class="blog-post">
                      <div class="single-blog-post">
                           <div class="main-image-box">
                              {{-- <img src="/images/blog/blog-single.jpg" alt="Awesome Image"> --}}

                              <!--Carousel Wrapper-->
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        @php
          $count=0;
        @endphp

        @foreach ($project_single[0]->projectimages as $i)
            @if ($count == 0)
              @php
                $key = "active";
              @endphp
            @else
              @php
                $key = "";
              @endphp
            @endif
            <div class="carousel-item @php
              echo $key
            @endphp ">
              <img class="d-block w-100" src="{{ $i->project_image_path }}"
                alt="">
            </div>
            @php
              $count++;
            @endphp
        @endforeach

      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-thumb" data-slide-to="0" class="active">
          <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg" width="100">
        </li>
        <li data-target="#carousel-thumb" data-slide-to="1">
          <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg" width="100">
        </li>
        <li data-target="#carousel-thumb" data-slide-to="2">
          <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg" width="100">
        </li>
      </ol>
    </div>
    <!--/.Carousel Wrapper-->
                        </div>
                          <div class="top-text-box">
                              <p>{{ $project_single[0]->description }}.</p>
                              <h4>Typical Job Cost</h4>
                              <b>{{ number_format($project_single[0]->typical_job_cost) }}</b>
                          </div>



                          <div class="blog-single-bottom-content-box">
                              <h5>Cost details </h5>
                              <p>{{ $project_single[0]->cost_details }}</p>
                              {{-- <div class="row">
                                  <div class="col-xl-6">
                                      <ul>
                                          <li>Righteous indignation dislike demoralized.</li>
                                          <li>Nothing prevents able to do we like best ever.</li>
                                          <li>Equal blame those who fail theirduty.</li>
                                      </ul>
                                  </div>
                                  <div class="col-xl-6">
                                      <ul>
                                          <li>Except to obtain some advantage from it?.</li>
                                          <li>One who avoids pain that produce resultant.</li>
                                      </ul>
                                  </div>
                              </div> --}}
                          </div>

                          <div class="tag-with-social-links-box">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="inner-content clearfix">

                                          <div class="social-links-box pull-right">
                                              <p><i class="fa fa-share-alt-square" aria-hidden="true"></i>Share this post:</p>
                                              <ul class="sociallinks fix">
                                                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>


                      </div>



                      <div class="inner-comment-box">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="single-blog-title-box">
                                      <h2>Read Comments</h2>
                                  </div>
                                  <!--Start single comment outer box-->
                                  <div class="single-comment-outer-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                      <div class="single-comment-box">
                                          <div class="img-box">
                                              <img src="/images/blog/comment-1.png" alt="Awesome Image">
                                          </div>
                                          <div class="text-box">
                                              <div class="top">
                                                  <div class="name">
                                                      <h3>Steven Rich</h3>
                                                      <span>March 10, 2019</span>
                                                  </div>
                                                  <div class="reply-button">
                                                      <a href="#"><span class="icon-reload"></span>Reply</a>
                                                  </div>
                                              </div>
                                              <div class="text">
                                                  <p>Omnis iste natus error sit voluptatem accusantium nam libero tempore, cum soluta nobis est eligendi optiocumque nihil impedit quo minus id quod maxime.</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--End single comment outer box-->
                                  <!--Start single comment outer box-->
                                  <div class="single-comment-outer-box mar-left wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                      <div class="single-comment-box">
                                          <div class="img-box">
                                              <img src="/images/blog/comment-2.png" alt="Awesome Image">
                                          </div>
                                          <div class="text-box">
                                              <div class="top">
                                                  <div class="name">
                                                      <h3>William Cobus</h3>
                                                      <span>March 10, 2019</span>
                                                  </div>
                                                  <div class="reply-button">
                                                      <a href="#"><span class="icon-reload"></span>Reply</a>
                                                  </div>
                                              </div>
                                              <div class="text">
                                                  <p>Voluptatem accusantium nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--End single comment outer box-->
                                  <!--Start single comment outer box-->
                                  <div class="single-comment-outer-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                      <div class="single-comment-box">
                                          <div class="img-box">
                                              <img src="/images/blog/comment-3.png" alt="Awesome Image">
                                          </div>
                                          <div class="text-box">
                                              <div class="top">
                                                  <div class="name">
                                                      <h3>Van Wimbilton</h3>
                                                      <span>March 10, 2019</span>
                                                  </div>
                                                  <div class="reply-button">
                                                      <a href="#"><span class="icon-reload"></span>Reply</a>
                                                  </div>
                                              </div>
                                              <div class="text">
                                                  <p>Natus error sit voluptatem accusantium nam libero tempore, cum soluta nobis eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--End single comment outer box-->

                              </div>
                          </div>
                      </div>
                      <!--Start add comment box-->
                      <div class="add-comment-box">
                          <div class="single-blog-title-box">
                              <h2>Post a Comment</h2>
                          </div>
                          <form id="add-comment-form" action="#">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <input type="text" name="fname" value="" placeholder="Name" required="">
                                          </div>
                                          <div class="col-md-6">
                                              <input type="email" name="form_email" value="" placeholder="Email" required="">
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <textarea name="comment" placeholder="Your Comments" required=""></textarea>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <button class="btn-one" type="submit">Post a Comment<span class="flaticon-next"></span></button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                      <!--End add comment box-->

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
                      <div class="card mb-2">
        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (36).jpg"
          alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title font-weight-bold">{{ $project_single[0]->users->name }}</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a style="color:white;" class="btn btn-primary btn-md btn-rounded">Contact</a>
        </div>
      </div>
                      {{-- <div class="author-box-holder">
                          <div class="inner-box">
                              <div class="img-box">
                                  <img src="/images/blog/author.png" alt="Awesome Image">
                              </div>
                              <div class="text">
                                  <h3>{{ $project_single[0]->users->name }} <span>Contact</span></h3>
                                  {{-- <div class="author-social-links">
                                      <p>Follow On:</p>
                                      <ul class="fix">
                                          <li><a href="#">Facebook</a></li>
                                          <li><a href="#">Twitter</a></li>
                                          <li><a href="#">Instagram</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div> --}}
                      <!--End single sidebar-->
                      <!--Start single sidebar-->
                      <div class="single-sidebar">
                          <div class="sidebar-title">
                              <div class="title">Related Projects</div>
                          </div>
                          <ul class="recent-post">
                              <li>
                                  <div class="img-holder">
                                      <img src="/images/sidebar/recent-post-1.jpg" alt="Awesome Image">
                                      <div class="overlay-style-one">
                                          <div class="box">
                                              <div class="content">
                                                  <a href="#"><span class="icon-link"></span></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="title-holder">
                                      <span>March 10, 2019</span>
                                      <h5 class="post-title"><a href="#">Creating drama and<br> feeling with...</a></h5>
                                  </div>
                              </li>
                              <li>
                                  <div class="img-holder">
                                      <img src="/images/sidebar/recent-post-2.jpg" alt="Awesome Image">
                                      <div class="overlay-style-one">
                                          <div class="box">
                                              <div class="content">
                                                  <a href="#"><span class="icon-link"></span></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="title-holder">
                                      <span>March 02, 2019</span>
                                      <h5 class="post-title"><a href="#">Wondering if interior<br> design is dying...</a></h5>
                                  </div>
                              </li>
                              <li>
                                  <div class="img-holder">
                                      <img src="/images/sidebar/recent-post-3.jpg" alt="Awesome Image">
                                      <div class="overlay-style-one">
                                          <div class="box">
                                              <div class="content">
                                                  <a href="#"><span class="icon-link"></span></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="title-holder">
                                      <span>February 16, 2019</span>
                                      <h5 class="post-title"><a href="#">Low cost interior<br> designing ideas for...</a></h5>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <!--End single sidebar-->



                  </div>
              </div>
              <!--End Sidebar Wrapper-->


          </div>
      </div>

  </section>
  <!--End blog single area-->

@endsection
