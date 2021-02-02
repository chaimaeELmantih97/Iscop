@extends('frontend.layouts.master')

@section('title','ISCOP SUP')

@section('main-content')

    @include('frontend.pages.breadcrumbs')
	<!-- start about -->
    <div class="rs-history sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">
                    <a href="#">
                        <img src="{{$about->photo}}" alt="History Image"/>
                    </a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-title">
                        <h2>À PROPOS DE NOUS</h2>
                    </div>
                    <div class="about-desc">
                        <p>{!! html_entity_decode($about->summary) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end of about -->

    <div class="rs-vision sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mobile-mb-50">
                    <div class="vision-img rs-animation-hover">
                        <img src="http://keenitsolutions.com/products/html/edulearn/edulearn-demo/images/about/vision.jpg" alt="img02"/>
                        <a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=3f9CAMoj3Ec" title="Video Icon">
                        </a>
                        <div class="overly-border"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-title">
                        <h2>NOTRE VISION</h2>
                    </div>
                    <div class="vision-desc">
                        <p>{!! html_entity_decode($about->description) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="rs-courses-categories" class="rs-courses-categories pt-100 pb-70">
        <div class="container">
            <div class="sec-title-2 mb-50 text-right">
                <h2>COURSE CATEGORIES</h2>
                <p>I must explain to you how all this mistaken idea of denouncing pleasure.</p>
                <div class="view-more">
                    <a href="#">View All Courses <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="courses-item">
                            <i class="flaticon-book-1"></i>
                            <h4 class="courses-title"><a href="#">COMUNICATING</a></h4>
                            <span class="courses-amount">5 COURSES</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="courses-item">
                            <i class="flaticon-tool-1"></i>
                            <h4 class="courses-title"><a href="#">MATHEMATICS</a></h4>
                            <span class="courses-amount">7 COURSES</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="courses-item">
                            <i class="flaticon-document"></i>
                            <h4 class="courses-title"><a href="#">REFLECTING</a></h4>
                            <span class="courses-amount">4 COURSES</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="courses-item">
                            <i class="flaticon-tool-2"></i>
                            <h4 class="courses-title"><a href="#">BEHAVIORAL</a></h4>
                            <span class="courses-amount">6 COURSES</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="courses-item">
                            <i class="flaticon-ribbon"></i>
                            <h4 class="courses-title"><a href="#">BIOLOGICAL</a></h4>
                            <span class="courses-amount">8 COURSES</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="courses-item">
                            <i class="flaticon-school-1"></i>
                            <h4 class="courses-title"><a href="#">HUMANITIES</a></h4>
                            <span class="courses-amount">4 COURSES</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="courses-item">
                            <i class="flaticon-book"></i>
                            <h4 class="courses-title"><a href="#">AGRICULTURAL</a></h4>
                            <span class="courses-amount">7 COURSES</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="courses-item">
                            <i class="flaticon-graduation"></i>
                            <h4 class="courses-title"><a href="#">PSYCHOLOGICAL</a></h4>
                            <span class="courses-amount">6 COURSES</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



      <!-- Events Start -->
      <div id="rs-events" class="rs-events sec-spacer sec-color">
        <div class="container">
            <div class="sec-title-2 mb-50">
                <h2>Nos Services</h2>
                <p>Institut de Soutien Coaching et Orientation / privé (ISCOP)</p>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
                        @foreach ($services as $key => $service)
                        <div class="event-item">
                            <div class="event-img">
                                @if($service->photo)
                                    <img src="{{$service->photo}}" style="height: 200px;" >
                                @else
                                    <img src="{{asset('backend/img/thumbnail-default.jpg')}}" style="height: 200px;" >
                                @endif
                                <a class="image-link" href="#" title="University Tour 2018">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                            <div class="events-details white-bg">
                                <div class="event-date">
                                    <i class="fa fa-calendar"></i>
                                    <span>28 June 2017</span>
                                </div>
                                <h4 class="event-title"><a href="#">{{$service->title}}</a></h4>
                                <div class="event-meta">
                                    <div class="event-time">
                                        <i class="fa fa-clock-o"></i>
                                        <span>{{$service->tag}}</span>
                                    </div>
                                    <div class="event-location">
                                        <i class="fa fa-map-marker"></i>
                                        @php
                                        $shortdesc=substr($service->description,0,70);
                                        @endphp
                                        <span>
                                            {{$shortdesc}} ...
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Events End -->

@endsection
