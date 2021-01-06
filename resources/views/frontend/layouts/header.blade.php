<div class="full-width-header">

    <!-- Toolbar Start -->
    <div class="rs-toolbar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="rs-toolbar-left">
                        <div class="welcome-message">
                            <i class="fa fa-bank"></i><span>Bienvenue à ISCOP</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rs-toolbar-right">
                        <div class="toolbar-share-icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        {{-- <a href="#" class="apply-btn">Apply Now</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Toolbar End -->

    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Header Top Start -->
        @php
        $settings=DB::table('settings')->get();
        @endphp
        @foreach($settings as $data)
        <div class="rs-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12">
                        <div class="logo-area">
                            {{-- <a href="index.html"><img src="images/logo.png" alt="logo"></a> --}}

                            <a href="{{route('home')}}"><img src="{{url($data->logo)}}" style="height:43px"
                                    alt="logo"></a>

                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="header-contact">
                                    <div id="phone-details" class="widget-text">
                                        <i class="glyph-icon flaticon-phone-call"></i>
                                        <div class="info-text">
                                            <a href="tel:4155551234">
                                                <span>Appelez-nous</span>
                                                {{$data->phone}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="header-contact">
                                    <div id="info-details" class="widget-text">
                                        <i class="glyph-icon flaticon-email"></i>
                                        <div class="info-text">
                                            <a href="mailto:info@domain.com">
                                                <span>Envoyez-nous un courrier</span>
                                                {{$data->email}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="header-contact">
                                    <div id="address-details" class="widget-text">
                                        <i class="glyph-icon flaticon-placeholder"></i>
                                        <div class="info-text">
                                            <span>Location</span>
                                            {{$data->address}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Header Top End -->

        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="main-menu">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- <div id="logo-sticky" class="text-center">
                                <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                            </div> -->
                            <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                            <nav class="rs-menu">
                                <ul class="nav-menu">
                                    <!-- Home -->
                                    <li class="current-menu-item current_page_item menu-item-has-children"> <a href="{{route('home')}}"
                                        class="home">Accueil</a>
                                    </li>
                                    <!-- End Home -->

                                    <!--About Menu Start-->
                                    <li class="menu-item-has-children"> <a href="#">Atelier Formation</a>
                                        <ul class="sub-menu">
                                            @foreach(Helper::getAllCategory() as $cat)

                                            <li @if($cat->child_cat) class="menu-item-has-children" @endif> <a
                                                    href="{{route('product-detail',$cat->slug)}}">{{$cat->title}}</a>
                                                <ul class="sub-menu">
                                                    @foreach($cat->child_cat as $item)
                                                    <li>
                                                        <a
                                                            href="{{route('product-detail',$item->slug)}}">{{$item->title}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>

                                            @endforeach

                                        </ul>
                                    </li>
                                    <!--About Menu End-->

                                    <!-- Drop Down Pages Start -->
                                    <li class="rs-mega-menu mega-rs"> <a href="#">Mega</a>
                                        <ul class="mega-menu">
                                            <li class="mega-menu-container">
                                                <div class="mega-menu-innner">
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li> <a href="about.html">About One</a></li>
                                                            <li><a href="about2.html">About Two</a></li>
                                                            <li><a href="blog.html">Blog</a></li>
                                                            <li><a href="blog-details.html">Blog Details</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li> <a href="teachers.html">Teachers</a> </li>
                                                            <li> <a href="teachers-without-filter.html">Teachers Without Filter</a> </li>
                                                            <li> <a href="teachers-single.html">Teachers Single</a> </li>
                                                            <li> <a href="contact.html">Contact</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li> <a href="gallery.html">Gallery One</a> </li>
                                                            <li> <a href="gallery2.html">Gallery Two</a> </li>
                                                            <li> <a href="gallery3.html">Gallery Three</a> </li>
                                                            <li><a href="error-404.html">Error 404</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li> <a href="shop.html">Shop</a> </li>
                                                            <li> <a href="shop-details.html">Shop Details</a> </li>

                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--Drop Down Pages End -->

                                    <!--Courses Menu Start-->
                                    <li class="menu-item-has-children"> <a href="#">Courses</a>
                                      <ul class="sub-menu">
                                        <li><a href="courses.html">Courses One</a></li>
                                        <li><a href="courses2.html">Courses Two</a></li>
                                        <li><a href="courses-details.html">Courses Details</a></li>
                                          <li><a href="courses-details2.html">Courses Details 2</a></li>
                                      </ul>
                                    </li>
                                    <!--Courses Menu End-->

                                    <!--Events Menu Start-->
                                    <li class="menu-item-has-children"> <a href="#">Events</a>
                                        <ul class="sub-menu">
                                            <li><a href="events.html">Events</a></li>
                                            <li><a href="events-details.html">Events Details</a></li>
                                        </ul>
                                    </li>
                                    <!--Events Menu End-->

                                    <!-- Drop Down -->
                                    <li class="menu-item-has-children"> <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"> <a href="#">Teachers</a>
                                              <ul class="sub-menu">
                                                <li> <a href="teachers.html">Teachers</a> </li>
                                                <li> <a href="teachers-without-filter.html">Teachers Without Filter</a> </li>
                                                <li> <a href="teachers-single.html">Teachers Single</a> </li>
                                              </ul>
                                            </li>

                                            <li class="menu-item-has-children"> <a href="#">Gallery</a>
                                              <ul class="sub-menu">
                                                <li> <a href="gallery.html">Gallery One</a> </li>
                                                <li> <a href="gallery2.html">Gallery Two</a> </li>
                                                <li> <a href="gallery3.html">Gallery Three</a> </li>
                                              </ul>
                                            </li>

                                            <li class="menu-item-has-children"> <a href="#">Shop</a>
                                              <ul class="sub-menu">
                                                <li> <a href="shop.html">Shop</a> </li>
                                                <li> <a href="shop-details.html">Shop Details</a> </li>
                                              </ul>
                                            </li>

                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>

                                            <li><a href="error-404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <!--End Icons -->

                                    <!--blog Menu Start-->
                                    <li class="menu-item-has-children"> <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <!--blog Menu End-->

                                    <!--Contact Menu Start-->
                                    <li> <a href="contact.html">Contact</a></li>
                                    <!--Contact Menu End-->
                                </ul>
                            </nav>
                            {{-- <div class="right-bar-icon rs-offcanvas-link text-right">
                                <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>

                                <a id="nav-expander" class="nav-expander fixed"><i class="fa fa-bars fa-lg white"></i></a>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->

</div>
