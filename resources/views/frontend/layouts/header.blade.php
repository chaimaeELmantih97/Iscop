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

                            <a href="{{route('home')}}"><img src="{{url($data->logo)}}" style="height:70px"
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
                                            <a href="tel:{{$data->phone}}">
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
                                            <a href="mailto:{{$data->email}}">
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
                            <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                            <div class="row" >
                                <nav class="rs-menu bg-aqua">
                                    <ul class="nav-menu">
                                        <!-- Home -->
                                        <li class="current-menu-item current_page_item "> <a href="{{route('home')}}"
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
                                        <li > <a href="#">À propos de nous</a>

                                          </li>
                                        <!--blog Menu Start-->
                                        <li> <a href="{{route('blog')}}">Blog</a>
                                        </li>
                                        <!--blog Menu End-->

                                        <!--Contact Menu Start-->
                                        <li> <a href="{{route('contact')}}">Contact</a></li>
                                    </ul>
                                </nav>

                            </div>
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

<div  id="return-to-top" data-target=".search-modal" data-toggle="modal">
    <i class="fa fa-graduation-cap mr-2" aria-hidden="true" ></i><span>s'Inscrire</span>
</div>
