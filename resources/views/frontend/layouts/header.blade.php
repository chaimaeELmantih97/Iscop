<div class="full-width-header">
    @php
    $settings=DB::table('settings')->get();
    @endphp
    @foreach($settings as $data)
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
                                @if ($data->facebook2)
                                <li><a target="_blank" href="{{$data->facebook2}}"><i class="fa fa-facebook" style="font-size:20px; color:#046FE3;"></i></a></li>
                                @endif
                                <li><a target="_blank" href="https://api.whatsapp.com/send?phone=++212607158182"><i
                                            class="fa fa-whatsapp" style="font-size:20px; color:#30AB43;"></i></a></li>
                                            @if ($data->facebook)
                                            <li><a target="_blank" href="{{$data->facebook}}"><i class="fa fa-facebook" style="font-size:20px; color:#046FE3;"></i></a></li>
                                            @endif
                                            @if ($data->instagram)
                                            <li><a target="_blank" href="{{$data->instagram}}"><i class="fa fa-instagram" style="font-size:20px; color:#C02C82;"></i></a></li>
                                            @endif
                                            @if ($data->instagram2)
                                            <li><a target="_blank" href="{{$data->instagram2}}"><i class="fa fa-instagram" style="font-size:20px; color:#C02C82;"></i></a></li>
                                            @endif
                                            @if ($data->linkedin)
                                            <li><a target="_blank" href="{{$data->linkedin}}"><i class="fa fa-linkedin" style="font-size:20px; color:#0A66C2;"></i></a></li>
                                            @endif
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
        <div class="rs-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12">
                        <div class="logo-area">
                            {{-- <a href="index.html"><img src="images/logo.png" alt="logo"></a> --}}

                            <a href="{{route('home')}}"><img src="{{url($data->logo)}}" style="height:90px"
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
                                            <a href="tel:0661350450" class="mt-2">+212661350450</a> <br>
                                            <a href="tel:0607158182">+212607158182</a> <br>
                                            <a href="tel:0661350450">+212701047620</a>
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
                                            Siège: {{$data->address}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Top End -->

        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="main-menu">
                    <div class="row">
                        <div class="col-sm-12">
                            <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                            <div class="row">
                                <nav class="rs-menu bg-aqua">
                                    <ul class="nav-menu">
                                        <!-- Home -->
                                        <li class=" {{ Request::routeIs('home') ? 'current-menu-item current_page_item  ' : '' }}">
                                            <a href="{{route('home')}}" class="home">Accueil</a>
                                        </li>
                                        <!-- End Home -->

                                        <!--About Menu Start-->
                                        <li class=" menu-item-has-children {{ (request()->segment(1) == 'details-Formation') ? 'current-menu-item current_page_item' : '' }}">
                                            <a href="#">ATELIER FORMATION</a>
                                            <ul class="sub-menu">
                                                @foreach(Helper::getAllCategory() as $cat)

                                                <li @if($cat->child_cat) class="menu-item-has-children" @endif> <a
                                                        href="#">{{$cat->title}}</a>
                                                    <ul class="sub-menu">
                                                        @foreach($cat->child_cat as $item)
                                                        <li>
                                                            <a
                                                                href="{{route('product-detail',$item->slug)}}">{{$item->title}}
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>

                                                @endforeach

                                            </ul>
                                        </li>
                                        <!--About Menu End-->
                                        <li class=" {{ Request::routeIs('about-us') ? 'current-menu-item current_page_item  ' : '' }}">
                                            <a href="{{route('about-us')}}">À propos de nous</a>
                                        </li>

                                        <li class=" menu-item-has-children {{ (request()->segment(1) == 'services') ? 'current-menu-item current_page_item' : '' }}">
                                            <a href="#">Autres services</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children"> <a href="#">Soutien Et
                                                        Accompagnement</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item-has-children"> <a
                                                                href="{{url('services/soutienUniversitaire')}}">Soutien
                                                                Universitaire</a>
                                                        </li>
                                                        <li class="menu-item-has-children"> <a
                                                                href="{{url('services/SoutienScolaire')}}">Soutien
                                                                Scolaire</a>
                                                        </li>
                                                        <li class="menu-item-has-children"> <a
                                                                href="{{url('services/LanguesCommunication')}}">Langues
                                                                Et Communication</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"> <a href="#">Coaching</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item-has-children"> <a
                                                                href="{{url('services/CoachingPédagogique')}}">Pédagogique</a>
                                                        </li>
                                                        <li class="menu-item-has-children"> <a
                                                                href="{{url('services/CoachingProfessionnel')}}">Professionnel</a>
                                                        </li>
                                                        <li class="menu-item-has-children"> <a
                                                                href="{{url('services/CoachingFamiliale')}}">Familiale</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mr-3 menu-item-has-children"> <a href="#">Orientation</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item-has-children"> <a
                                                                href="{{url('services/OrientationPédagogique')}}">Pédagogique</a>
                                                        </li>
                                                        <li class="menu-item-has-children"> <a
                                                                href="{{url('services/OrientationProfessionnel')}}">Professionnel</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mr-3 menu-item-has-children"> <a href="#">Préparation Aux Concours</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item-has-children"> <a
                                                                href="{{url('services/GrandesEcoles')}}">Grandes Écoles</a>
                                                        </li>
                                                        <li class="menu-item-has-children"> <a
                                                                href="{{url('services/FontionPriveePublique')}}">La Fonction Publique Et Privée</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <!--blog Menu Start-->
                                        <li  class=" {{ Request::routeIs('blog') ? 'current-menu-item current_page_item  ' : '' }}">
                                            <a href="{{route('blog')}}">Blog</a>
                                        </li>
                                        <!--blog Menu End-->
                                        {{-- notre galerie  --}}
                                        <li
                                            class="{{ Request::routeIs('galerie') ? 'current-menu-item current_page_item  ' : '' }}">
                                            <a href="{{route('galerie')}}">Notre Galerie</a>
                                        </li>
                                        <!--Contact Menu Start-->
                                        <li
                                            class="{{ Request::routeIs('contact') ? 'current-menu-item current_page_item  ' : '' }}">
                                            <a href="{{route('contact')}}">Contact</a>
                                        </li>
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
    @endforeach
</div>

<div id="return-to-top" data-target=".search-modal" data-toggle="modal">
    <i class="fa fa-graduation-cap mr-2" aria-hidden="true"></i><span>S'inscrire</span>
</div>
