
 @php
     $brands=App\Models\Brand::all();
 @endphp
 <div id="rs-partner" class="rs-partner pt-70 pb-70">
    <div class="container">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
            @foreach ($brands as $brand)
            <div class="partner-item">
                <a href="#"><img src="{{$brand->photo}}" alt="Partner Image"></a>
            </div>
            @endforeach
        </div>
    </div>
</div>
 <!-- Footer Start -->
 @php
$settings=DB::table('settings')->get();
@endphp
@foreach($settings as $data)
 <footer id="rs-footer" class="bg3 rs-footer rs-footer-style8">
    <div class="container">
        <!-- Footer Address -->
        <div>
            <div class="row footer-contact-desc">
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="glyph-icon flaticon-placeholder"></i>
                        <h4 class="contact-title">Adresse</h4>
                        <p class="contact-desc">
                           {{$data->address}}
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="glyph-icon flaticon-phone-call"></i>
                        <h4 class="contact-title">Numéro de telephone</h4>
                        <p class="contact-desc">
                            {{$data->phone}}<br>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="glyph-icon flaticon-email"></i>
                        <h4 class="contact-title">Adresse Email</h4>
                        <p class="contact-desc">
                            {{$data->email}}<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="about-widget">
                        <img src="{{$data->logo}}" style="height: 130px" alt="Footer Logo">
                        <p>Institut de Soutien Coaching et Orientation / Privé "ISCOPSUP"</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">POSTES RÉCENTES</h5>
                    <div class="recent-post-widget">
                        @php
                            $deuxpost=App\Models\Post::limit(2)->get();
                        @endphp
                        @foreach ($deuxpost as $item)
                          <div class="post-item">
                            <div class="post-date">
                                <span>{{$item->created_at->format('d')}}</span>
                                <span>{{$item->created_at->format('m/Y')}}</span>
                            </div>
                            <div class="post-desc">
                                <h5 class="post-title"><a href="{{route('blog.detail',$item->slug)}}">{{$item->title}}</a></h5>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">OUR SITEMAP</h5>
                    <ul class="sitemap-widget">
                        <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                        <li ><a href="about.html"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a></li>
                        <li><a href="courses.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Courses</a></li>
                        <li><a href="courses-details.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Courses Details</a></li>
                        <li><a href="events.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Events</a></li>
                        <li><a href="events-details.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Events Details</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">NEWSLETTER</h5>
                    <p>Sign Up to Our Newsletter to Get Latest Updates &amp; Services</p>
                  <div class="form-inner">
                        <input type="email" name="EMAIL" placeholder="Your email address" required="">
                      <input type="submit" value="Sign up">
                  </div>
                </div>
            </div>
            <div class="footer-share">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <p><a href="feen-tech.com">FEENTECH</a> Corporation ©️ 2021</p>
            </div>
        </div>
    </div>
</footer>
@endforeach
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>

<!-- Canvas Menu start -->
<nav class="right_menu_togle">
    <div class="close-btn"><span id="nav-close" class="text-center">x</span></div>
    <div class="canvas-logo">
        <a href="index.html"><img src="images/logo-white.png" alt="logo"></a>
    </div>
    <ul class="sidebarnav_menu list-unstyled main-menu">
        <!--Home Menu Start-->
        <li class="current-menu-item menu-item-has-children"><a href="#">Home</a>
            <ul class="list-unstyled">
                <li class="sub-nav"><a href="index.html">Home One<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="index2.html">Home Two<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="index3.html">Home Three<span class="icon"></span></a></li>
                <li class="sub-nav active" class="sub-nav"><a href="index4.html">Home Four<span class="icon"></span></a></li>
            </ul>
        </li>
        <!--Home Menu End-->

        <!--About Menu Start-->
        <li class="menu-item-has-children"><a href="#">About Us</a>
            <ul class="list-unstyled">
                <li class="sub-nav active"><a href="index.html">About One<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="index2.html">About Two<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="index3.html">About Three<span class="icon"></span></a></li>
            </ul>
        </li>
        <!--About Menu End-->

        <!--Pages Menu Start-->
        <li class="menu-item-has-children"><a href="#">Pages</a>
            <ul class="list-unstyled">
                <li class="sub-nav active"><a href="teachers.html">Teachers<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="teachers-without-filter.html">Teachers Without Filter<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="teachers-single.html">Teachers Single<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="gallery.html">Gallery One<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="gallery2.html">Gallery Two<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="gallery3.html">Gallery Three<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="shop-details.html">Shop Details<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="cart.html">Cart<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="error-404.html">Error 404<span class="icon"></span></a></li>
            </ul>
        </li>
        <!--Pages Menu End-->

        <!--Courses Menu Star-->
        <li class="menu-item-has-children"><a href="#">Courses</a>
            <ul class="list-unstyled">
                <li class="sub-nav"><a href="courses.html">Courses<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="courses2.html">Courses Two<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="courses-details.html">Courses Details<span class="icon"></span></a></li>
            </ul>
        </li>
        <!--Courses Menu End-->

        <!--Events Menu Star-->
        <li class="menu-item-has-children"><a href="#">Events</a>
            <ul class="list-unstyled">
                <li class="sub-nav"><a href="events.html">Events<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="events-details.html">Events Details<span class="icon"></span></a></li>
            </ul>
        </li>
        <!--Events Menu End-->

        <!--blog Menu Star-->
        <li class="menu-item-has-children"><a href="#">Blog</a>
            <ul class="list-unstyled">
                <li class="sub-nav"><a href="blog.html">Blog<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="blog-details.html">Blog Details<span class="icon"></span></a></li>
            </ul>
        </li>
        <!--blog Menu End-->
        <li><a href="contact.html">Contact<span class="icon"></span></a></li>
    </ul>
    <div class="search-wrap">
        <label class="screen-reader-text">Search for:</label>
        <input type="search" placeholder="Search..." name="s" class="search-input" value="">
        <button type="submit" value="Search"><i class="fa fa-search"></i></button>
    </div>
</nav>
<!-- Canvas Menu end -->

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true" class="fa fa-close"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="eg: Computer Technology" type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Search Modal End -->


<!-- modernizr js -->
<script src="{{url('frontend/js/modernizr-2.8.3.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
<!-- slick.min js -->
<script src="{{url('frontend/js/slick.min.js')}}"></script>
<!-- isotope.pkgd.min js -->
<script src="{{url('frontend/js/isotope.pkgd.min.js')}}"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="{{url('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- wow js -->
<script src="{{url('frontend/js/wow.min.js')}}"></script>
<!-- counter top js -->
<script src="{{url('frontend/js/waypoints.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.counterup.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{url('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- rsmenu js -->
<script src="{{url('frontend/js/rsmenu-main.js')}}"></script>
<!-- Time Circle js -->
<script src="{{url('frontend/js/time-circle.js')}}"></script>
<!-- plugins js -->
<script src="{{url('frontend/js/plugins.js')}}"></script>
 <!-- main js -->
<script src="{{url('frontend/js/main.js')}}"></script>
