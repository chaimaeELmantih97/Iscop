@extends('frontend.layouts.master')
@section('title','Beauty Design - Accueil')
@section('main-content')

<!-- start of hero -->
<section class="arkit-hero-slider hero-slider hero-style-1" style="height: 100vh;">
    @if(count($banners)>0)
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($banners as $key=>$banner)
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image dark-overlay" data-background="{{$banner->photo}}">
                            <div class="container">
                                <div class="slide-title" data-swiper-parallax="400">
                                    <span>Depuis 2015</span>
                                    <h2 style="color: {{$banner->title_color}}">{{$banner->title}}</h2>
                                    <p style="color: {{$banner->description_color}}">{{$banner->description}}</p>
                                </div>
                                <div class="slide-btns" data-swiper-parallax="500">
                                    <a class="theme-btn" href="services.html">Nos services</a>
                                </div>
                            </div>
                        </div>
                        <!-- end slide-inner -->
                    </div>
                    <!-- end swiper-slide -->
                @endforeach
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    @endif
</section>
<!-- end of hero slider -->

<!-- start about -->
<section class="arkit-about section-padding">
    <div class="container">
        <div class="row display-flex">
            <div class="col-lg-5 col-md-6 col-xs-12">
                <div class="arkit-about-inner">
                    <span>Present dans le marché depuis 2015</span>
                    <h2>Beauty Design</h2>
                    <p>
                        L'harmonie des lignes, la noblesse des matériaux, le sens du détail, tout en répondant aux exigences liées à l'ergonomie, la fonctionnalité, la technologie... chaque meuble que nous vous proposons est le fruit de ce subtil équilibre.
                        Importateur et distributeur du Rayonnage et du Mobilier de Bureau depuis 2015, nous sélectionnons du mobilier de bureau haut de gamme, signé par des designers de renom , et aménageons des espaces de travail pour les entreprises et les administrations par tout au Maroc.
                    </p>
                    <div class="contact-number">
                        <div class="content">
                            <span>Call Us Now:</span>
                            <h4>+212 687772987</h4>
                        </div>
                        <div class="icon">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/icon/icon-1.svg')}}">
                        </div>
                    </div>
                </div>
            </div>
            <!--/col-->
            <div class="col-lg-7 col-md-6 col-xl-12">
                <div class="about-img">
                    <img alt="" src="{{asset('frontend/assets/images/about/about-img.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of about -->

<!-- start service -->
<section class="arkit-service-info section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme service-info-slider">
                    <div class="item arkit-service-info-single" data-number="01">
                        <span class="tag">Expert Engineers</span>
                        <h2>We have expert engineers.</h2>
                        <p>Compliment favourable connection dispatched and terminated esteem powerful excuse remov
                            eirure dolor inner reprehenderit voluptate velit esse cillum dolore eugiat.</p>
                    </div>
                    <div class="item arkit-service-info-single" data-number="02">
                        <span class="tag">24/07 support</span>
                        <h2>24/7 customer support.</h2>
                        <p>Compliment favourable connection dispatched and terminated esteem powerful excuse remov
                            eirure dolor inner reprehenderit voluptate velit esse cillum dolore eugiat.</p>
                    </div>
                    <div class="item arkit-service-info-single" data-number="03">
                        <span class="tag">team members</span>
                        <h2>Talented team members.</h2>
                        <p>Compliment favourable connection dispatched and terminated esteem powerful excuse remov
                            eirure dolor inner reprehenderit voluptate velit esse cillum dolore eugiat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of service -->

<!-- start Service -->
<section class="arkit-service section-padding">
    <div class="container">
        <div class="arkit-service-top">
            <div class="row display-flex">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Les Métiers de <span>Beauty Design<span>.</h2>
                    </div>
                </div>
                {{-- <div class="col-lg-5 col-lg-offset-1 col-md-6 col-xs-12">
                    <div class="service-note">
                        <p>Compliment favourable connection dispatched terminated esteem powerful excuse remov eirure dolor
                            <a href="javascript:">inner reprehenderit voluptate velit esse cillum dolore eugiat</a>.
                        </p>
                    </div>
                </div> --}}
            </div>
        </div><!-- /Row -->
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme service-slider">

                    <div class="item">
                        <div class="arkit-single-service">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/service/img1.jpg')}}">
                            <div class="content-inner">
                                <h3><a href="portfolio-single.html">
                                    {{-- <img alt="" class="img-responsive home-icon" src="{{asset('frontend/assets/images/icon/home.svg')}}"> --}}
                                    <span>Architecture</span></a>
                                </h3>
                                {{-- <p>Compliment favourable connection disa inner reprehenderit eugiat.</p> --}}
                                <a class="read-more-btn" href="portfolio-single.html">SAVOIR PLUS <span>+</span></a>
                            </div>
                        </div>
                    </div>
                    <!--/item-->

                    <div class="item">
                        <div class="arkit-single-service">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/service/img2.jpg')}}">
                            <div class="content-inner">
                                <h3><a href="portfolio-single.html">
                                    {{-- <img alt="" class="img-responsive home-icon" src="{{asset('frontend/assets/images/icon/home.svg')}}"> --}}
                                    <span>3D Modeling</span></a>
                                </h3>
                                {{-- <p>Compliment favourable connection disa inner reprehenderit eugiat.</p> --}}
                                <a class="read-more-btn" href="portfolio-single.html">SAVOIR PLUS <span>+</span></a>
                            </div>
                        </div>
                    </div>
                    <!--/item-->

                    <div class="item">
                        <div class="arkit-single-service">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/service/img3.jpg')}}">
                            <div class="content-inner">
                                <h3><a href="portfolio-single.html">
                                    {{-- <img alt="" class="img-responsive home-icon" src="{{asset('frontend/assets/images/icon/home.svg')}}"> --}}
                                    <span>Interior Design</span></a>
                                </h3>
                                {{-- <p>Compliment favourable connection disa inner reprehenderit eugiat.</p> --}}
                                <a class="read-more-btn" href="portfolio-single.html">SAVOIR PLUS <span>+</span></a>
                            </div>
                        </div>
                    </div>
                    <!--/item-->

                    <div class="item">
                        <div class="arkit-single-service">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/service/img1.jpg')}}">
                            <div class="content-inner">
                                <h3><a href="portfolio-single.html">
                                    {{-- <img alt="" class="img-responsive home-icon" src="{{asset('frontend/assets/images/icon/home.svg')}}"> --}}
                                    <span>Architecture</span></a>
                                </h3>
                                {{-- <p>Compliment favourable connection disa inner reprehenderit eugiat.</p> --}}
                                <a class="read-more-btn" href="portfolio-single.html">SAVOIR PLUS <span>+</span></a>
                            </div>
                        </div>
                    </div>
                    <!--/item-->

                    <div class="item">
                        <div class="arkit-single-service">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/service/img2.jpg')}}">
                            <div class="content-inner">
                                <h3><a href="portfolio-single.html">
                                    {{-- <img alt="" class="img-responsive home-icon" src="{{asset('frontend/assets/images/icon/home.svg')}}"> --}}
                                    <span>3D Modeling</span></a>
                                </h3>
                                {{-- <p>Compliment favourable connection disa inner reprehenderit eugiat.</p> --}}
                                <a class="read-more-btn" href="portfolio-single.html">SAVOIR PLUS <span>+</span></a>
                            </div>
                        </div>
                    </div>
                    <!--/item-->

                    <div class="item">
                        <div class="arkit-single-service">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/service/img3.jpg')}}">
                            <div class="content-inner">
                                <h3><a href="portfolio-single.html">
                                    {{-- <img alt="" class="img-responsive home-icon" src="{{asset('frontend/assets/images/icon/home.svg')}}"> --}}
                                    <span>Interior Design</span></a>
                                </h3>
                                {{-- <p>Compliment favourable connection disa inner reprehenderit eugiat.</p> --}}
                                <a class="read-more-btn" href="portfolio-single.html">SAVOIR PLUS <span>+</span></a>
                            </div>
                        </div>
                    </div>
                    <!--/item-->

                    <div class="item">
                        <div class="arkit-single-service">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/service/img1.jpg')}}">
                            <div class="content-inner">
                                <h3><a href="jportfolio-single.html">
                                    {{-- <img alt="" class="img-responsive home-icon" src="{{asset('frontend/assets/images/icon/home.svg')}}"> --}}
                                    <span>Architecture</span></a>
                                </h3>
                                {{-- <p>Compliment favourable connection disa inner reprehenderit eugiat.</p> --}}
                                <a class="read-more-btn" href="portfolio-single.html">SAVOIR PLUS <span>+</span></a>
                            </div>
                        </div>
                    </div>
                    <!--/item-->

                    <div class="item">
                        <div class="arkit-single-service">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/service/img2.jpg')}}">
                            <div class="content-inner">
                                <h3><a href="portfolio-single.html">
                                    {{-- <img alt="" class="img-responsive home-icon" src="{{asset('frontend/assets/images/icon/home.svg')}}"> --}}
                                    <span>3D Modeling</span></a>
                                </h3>
                                {{-- <p>Compliment favourable connection disa inner reprehenderit eugiat.</p> --}}
                                <a class="read-more-btn" href="javascript:">SAVOIR PLUS <span>+</span></a>
                            </div>
                        </div>
                    </div>
                    <!--/item-->

                    <div class="item">
                        <div class="arkit-single-service">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/service/img3.jpg')}}">
                            <div class="content-inner">
                                <h3><a href="portfolio-single.html">
                                    {{-- <img alt="" class="img-responsive home-icon" src="{{asset('frontend/assets/images/icon/home.svg')}}">  --}}
                                    <span>Interior Design</span></a>
                                </h3>
                                {{-- <p>Compliment favourable connection disa inner reprehenderit eugiat.</p> --}}
                                <a class="read-more-btn" href="portfolio-single.html">SAVOIR PLUS <span>+</span></a>
                            </div>
                        </div>
                    </div>
                    <!--/item-->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of Service -->


{{-- <!-- start Team -->
<section class="arkit-team section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 col-xl-12 col-lg-offset-3 col-md-offset-3">
                <div class="section-title text-center">
                    <h2>Arkit engineer <span>always ready</span> for help you.</h2>
                </div>
            </div>
        </div>
        <!--/Row-->
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xl-12">
                <div class="arkit-member">
                    <img alt="" class="img-responlsive" src="{{asset('frontend/assets/images/team/img-1.jpg')}}">
                    <div class="team-info">
                        <h4>Josette Wadsworth</h4>
                        <p>Senior Engineer</p>
                    </div>
                </div>
            </div>
            <!--/col-->

            <div class="col-lg-3 col-sm-6 col-xl-12">
                <div class="arkit-member">
                    <img alt="" class="img-responlsive" src="{{asset('frontend/assets/images/team/img-2.jpg')}}">
                    <div class="team-info">
                        <h4>Beulah Arnold</h4>
                        <p>Senior Architect</p>
                    </div>
                </div>
            </div>
            <!--/col-->

            <div class="col-lg-3 col-sm-6 col-xl-12">
                <div class="arkit-member">
                    <img alt="" class="img-responlsive" src="{{asset('frontend/assets/images/team/img-3.jpg')}}">
                    <div class="team-info">
                        <h4>Melissa Figueroa</h4>
                        <p>Senior Engineer</p>
                    </div>
                </div>
            </div>
            <!--/col-->

            <div class="col-lg-3 col-sm-6 col-xl-12">
                <div class="arkit-member">
                    <img alt="" class="img-responlsive" src="{{asset('frontend/assets/images/team/img-4.jpg')}}">
                    <div class="team-info">
                        <h4>Monique Cannon</h4>
                        <p>Junior Architect</p>
                    </div>
                </div>
            </div>
            <!--/col-->

        </div>
        <!--/Row-->

        <div class="row">
            <div class="col-xs-12">
                <a class="join-team-btn" href="team.html">SEE OUR TEAMS<span>+</span></a>
            </div>
        </div>
    </div>
</section>
<!-- end of Team --> --}}


<!-- start Status -->
<section class="arkit-status section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xl-12">
                <div class="row">
                    <div class="col-lg-12">
                        <a class="single-status">
                            <div class="icon">
                                <i class="fa fa-file-pdf download-btn" style="font-size: 50px;"></i>
                                {{-- <img alt="" class="img-fluid normal" src="{{asset('frontend/assets/images/status/img-1.svg')}}">
                                <img alt="" class="img-fluid hover" src="{{asset('frontend/assets/images/status/hover/img-1.svg')}}"> --}}
                            </div>
                            <h3 style="line-height: 0.7">
                                <span style="font-size: 30px;">Catalogue Mobilier de Bureau</span>
                            </h3>
                            <p class="download-btn">
                                <i class="fas fa-download"></i> Télécharger 
                            </p>
                        </a>
                    </div><!--/col-->
                    {{-- <div class="col-lg-6 col-sm-6 col-xs-12">
                        <a class="single-status">
                            <div class="icon">
                                <i class="fa fa-file-pdf download-btn" style="font-size: 50px;"></i>
                            </div>
                            <h3 style="line-height: 0.7">
                                <span style="font-size: 30px;">Catalogue Mobilier de Bureau</span>
                            </h3>
                            <p class="download-btn">
                                <i class="fas fa-download"></i> Télécharger 
                            </p>
                        </a>
                    </div><!--/col--> --}}
                    <div class="col-lg-12">
                        <a class="single-status">
                            <div class="icon">
                                <i class="fa fa-file-pdf download-btn" style="font-size: 50px;"></i>
                                {{-- <img alt="" class="img-fluid normal" src="{{asset('frontend/assets/images/status/img-1.svg')}}">
                                <img alt="" class="img-fluid hover" src="{{asset('frontend/assets/images/status/hover/img-1.svg')}}"> --}}
                            </div>
                            <h3 style="line-height: 0.7">
                                <span style="font-size: 30px;">Catalogue Mobilier de Bureau</span>
                            </h3>
                            <p class="download-btn">
                                <i class="fas fa-download"></i> Télécharger 
                            </p>
                        </a>
                    </div><!--/col-->
                </div><!--/Row-->
            </div><!--/Col-->
            {{-- <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="status-right">
                    <div class="play-btn video-btn">
                        <a data-fancybox href="https://www.youtube.com/watch?v=vyeZbyEvZ28">
                            <svg height="23px" width="21px" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.356,14.514 C13.594,16.657 9.844,18.822 6.106,21.009 C2.369,23.196 0.512,22.124 0.537,17.794 C0.562,13.464 0.562,9.133 0.537,4.803 C0.512,0.473 2.369,-0.598 6.106,1.588 C9.844,3.775 13.594,5.940 17.356,8.083 C21.119,10.227 21.119,12.370 17.356,14.514 Z"
                                      fill="rgb(255, 255, 255)" fill-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div><!--/Col--> --}}
        </div><!--/Row-->
    </div><!--/container-->
    <div class="status-note">
        <h3>N’hésitez pas à nous contacter pour échanger au sujet de l’aménagement de votre espace professionnel ou Vos Dépôts de Stockage.</h3>
        <div class="bottom">
            <a class="read-more-btn" href="contact.html">CONTACT US <span>+</span></a>
            <div class="icon">
                <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/status/shelves.svg')}}" style="height: 50px; object-fit: contain">
            </div>
        </div>
    </div>
</section>
<!-- end of Status -->


{{-- <!-- start portfolio -->
<section class="portfolio section-padding">
    <div class="container-fluid">
        <div class="row display-flex-title">
            <div class="col-lg-6 col-md-7 col-xs-12">
                <div class="section-title text-center">
                    <span>Our Portfolio</span>
                    <h2>Arkit always believes in quality. <span>Some work</span> for customers.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="owl-carousel owl-theme work-portfolio-slider">

                    <div class="item">
                        <div class="single-work">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/portfolio/img-1.jpg')}}">
                            <div class="hover_layer">
                                <div class="info">
                                    <h3><a href="portfolio-single.html">Concrete Staircase</a></h3>
                                    <p>Muriddban, USA</p>
                                </div>
                                <div class="details-btn">
                                    <a class="portfolio-btn" href="portfolio-single.html">+</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/item-->

                    <div class="item">
                        <div class="single-work">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/portfolio/img-2.jpg')}}">
                            <div class="hover_layer">
                                <div class="info">
                                    <h3><a href="portfolio-single.html">Concrete Staircase</a></h3>
                                    <p>Muriddban, USA</p>
                                </div>
                                <div class="details-btn">
                                    <a class="portfolio-btn" href="portfolio-single.html">+</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/item-->

                    <div class="item">
                        <div class="single-work">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/portfolio/img-3.jpg')}}">
                            <div class="hover_layer">
                                <div class="info">
                                    <h3><a href="portfolio-single.html">Concrete Staircase</a></h3>
                                    <p>Muriddban, USA</p>
                                </div>
                                <div class="details-btn">
                                    <a class="portfolio-btn" href="portfolio-single.html">+</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/item-->

                    <div class="item">
                        <div class="single-work">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/portfolio/img-4.jpg')}}">
                            <div class="hover_layer">
                                <div class="info">
                                    <h3><a href="portfolio-single.html">Concrete Staircase</a></h3>
                                    <p>Muriddban, USA</p>
                                </div>
                                <div class="details-btn">
                                    <a class="portfolio-btn" href="portfolio-single.html">+</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/item-->

                    <div class="item">
                        <div class="single-work">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/portfolio/img-1.jpg')}}">
                            <div class="hover_layer">
                                <div class="info">
                                    <h3><a href="portfolio-single.html">Concrete Staircase</a></h3>
                                    <p>Muriddban, USA</p>
                                </div>
                                <div class="details-btn">
                                    <a class="portfolio-btn" href="portfolio-single.html">+</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/item-->

                    <div class="item">
                        <div class="single-work">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/portfolio/img-2.jpg')}}">
                            <div class="hover_layer">
                                <div class="info">
                                    <h3><a href="portfolio-single.html">Concrete Staircase</a></h3>
                                    <p>Muriddban, USA</p>
                                </div>
                                <div class="details-btn">
                                    <a class="portfolio-btn" href="portfolio-single.html">+</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/item-->

                    <div class="item">
                        <div class="single-work">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/portfolio/img-3.jpg')}}">
                            <div class="hover_layer">
                                <div class="info">
                                    <h3><a href="portfolio-single.html">Concrete Staircase</a></h3>
                                    <p>Muriddban, USA</p>
                                </div>
                                <div class="details-btn">
                                    <a class="portfolio-btn" href="portfolio-single.html">+</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/item-->

                    <div class="item">
                        <div class="single-work">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/portfolio/img-4.jpg')}}">
                            <div class="hover_layer">
                                <div class="info">
                                    <h3><a href="portfolio-single.html">Concrete Staircase</a></h3>
                                    <p>Muriddban, USA</p>
                                </div>
                                <div class="details-btn">
                                    <a class="portfolio-btn" href="portfolio-single.html">+</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/item-->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of portfolio --> --}}


<!-- start testimonial -->
<section class="testimonial section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-inner">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="section-title">
                                <span>Clients Satisfaits</span>
                                <h2>Nous fournissons toujours les meilleurs services. Ce que <span> disent les clients satisfaits de Beauty Design</span>.
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme testimonial-slider">
                        <div class="item">
                            <div class="single-testimonial">
                                <div class="info">
                                    <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/testimonials/01.jpg')}}">
                                    <h4>Josette Wadsworth</h4>
                                    <p>Senior Engineer</p>
                                </div>
                                <div class="feedback">
                                    <span class="quote"><img alt=""
                                                             class="img-responsive"
                                                             src="{{asset('frontend/assets/images/testimonials/quote.svg')}}"></span>
                                    <p>Nostrud exercitation ullamco laboris nisi ut aliquip exea commodo cillum
                                        dolore eum fugiat nulla pariatur excepteur sint occaecat cup idatat non
                                        proident and sunt in culpa qui officia deserunt mollit anim id est sint
                                        occaecat laborum.</p>
                                </div>
                            </div>
                        </div><!-- /item -->
                        <div class="item">
                            <div class="single-testimonial">
                                <div class="info">
                                    <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/testimonials/01.jpg')}}">
                                    <h4>Josette Wadsworth</h4>
                                    <p>Senior Engineer</p>
                                </div>
                                <div class="feedback">
                                    <span class="quote"><img alt=""
                                                             class="img-responsive"
                                                             src="{{asset('frontend/assets/images/testimonials/quote.svg')}}"></span>
                                    <p>Nostrud exercitation ullamco laboris nisi ut aliquip exea commodo cillum
                                        dolore eum fugiat nulla pariatur excepteur sint occaecat cup idatat non
                                        proident and sunt in culpa qui officia deserunt mollit anim id est sint
                                        occaecat laborum.</p>
                                </div>
                            </div>
                        </div><!-- /item -->
                        <div class="item">
                            <div class="single-testimonial">
                                <div class="info">
                                    <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/testimonials/01.jpg')}}">
                                    <h4>Josette Wadsworth</h4>
                                    <p>Senior Engineer</p>
                                </div>
                                <div class="feedback">
                                    <span class="quote"><img alt=""
                                                             class="img-responsive"
                                                             src="{{asset('frontend/assets/images/testimonials/quote.svg')}}"></span>
                                    <p>Nostrud exercitation ullamco laboris nisi ut aliquip exea commodo cillum
                                        dolore eum fugiat nulla pariatur excepteur sint occaecat cup idatat non
                                        proident and sunt in culpa qui officia deserunt mollit anim id est sint
                                        occaecat laborum.</p>
                                </div>
                            </div>
                        </div><!-- /item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of testimonial -->

<!-- stsrt client -->
<section class="client">
    <div class="owl-carousel owl-theme clents-slider">
        <div class="item">
            <div class="single-client">
                <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/client/img1.png')}}">
            </div>
        </div><!--/item-->
        <div class="item">
            <div class="single-client">
                <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/client/img2.png')}}">
            </div>
        </div><!--/item-->
        <div class="item">
            <div class="single-client">
                <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/client/img3.png')}}">
            </div>
        </div><!--/item-->
        <div class="item">
            <div class="single-client">
                <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/client/img4.png')}}">
            </div>
        </div><!--/item-->
        <div class="item">
            <div class="single-client">
                <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/client/img1.png')}}">
            </div>
        </div><!--/item-->
        <div class="item">
            <div class="single-client">
                <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/client/img2.png')}}">
            </div>
        </div><!--/item-->
        <div class="item">
            <div class="single-client">
                <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/client/img3.png')}}">
            </div>
        </div><!--/item-->
        <div class="item">
            <div class="single-client">
                <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/client/img4.png')}}">
            </div>
        </div><!--/item-->
    </div>
</section>
<!-- end of client -->


<!-- start blog -->
<section class="blog section-padding">
    <div class="container">
        <div class="row display-flex-title">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <span>Latest Post</span>
                    <h2>Nous sommes prêts à partager nos conseils et notre expérience.</h2>
                </div>
            </div>
        </div><!--/row-->
        <div class="row">

            <div class="col-sm-6 col-xs-12">
                <div class="single-blog">
                    <div class="row display-flex">
                        <div class="col-sm-6">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/blog/img-1.jpg')}}">
                        </div>
                        <div class="col-sm-6">
                            <span class="date">28, February, 2020</span>
                            <h3><a href="blog-single.html">Basic rules of running web agency business company.</a></h3>
                            <a class="read-more-btn" href="blog-single.html">READ MORE <span>+</span></a>
                        </div>
                    </div>
                </div>
            </div><!--/col-->

            <div class="col-sm-6 col-xs-12">
                <div class="single-blog">
                    <div class="row display-flex">
                        <div class="col-sm-6">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/blog/img-2.jpg')}}">
                        </div>
                        <div class="col-sm-6">
                            <span class="date">28, February, 2020</span>
                            <h3><a href="blog-single.html">Basic rules of running web agency business company.</a></h3>
                            <a class="read-more-btn" href="blog-single.html">READ MORE <span>+</span></a>
                        </div>
                    </div>
                </div>
            </div><!--/col-->

            <div class="col-sm-6 col-xs-12">
                <div class="single-blog">
                    <div class="row display-flex">
                        <div class="col-sm-6">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/blog/img-3.jpg')}}">
                        </div>
                        <div class="col-sm-6">
                            <span class="date">28, February, 2020</span>
                            <h3><a href="blog-single.html">Basic rules of running web agency business company.</a></h3>
                            <a class="read-more-btn" href="blog-single.html">READ MORE <span>+</span></a>
                        </div>
                    </div>
                </div>
            </div><!--/col-->

            <div class="col-sm-6 col-xs-12">
                <div class="single-blog">
                    <div class="row display-flex">
                        <div class="col-sm-6">
                            <img alt="" class="img-responsive" src="{{asset('frontend/assets/images/blog/img-4.jpg')}}">
                        </div>
                        <div class="col-sm-6">
                            <span class="date">28, February, 2020</span>
                            <h3><a href="blog-single.html">Basic rules of running web agency business company.</a></h3>
                            <a class="read-more-btn" href="blog-single.html">READ MORE <span>+</span></a>
                        </div>
                    </div>
                </div>
            </div><!--/col-->

        </div>
    </div>
</section>
<!-- end of blog -->

@endsection