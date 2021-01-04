@php
    $settings=DB::table('settings')->get();
@endphp
<!-- Start header -->
<header class="site-header header-style-1" id="header">

    <nav class="navigation navbar navbar-default">
        <div class="container-fluid">
            <div class="logo">
                <a href="{{route('home')}}"><img alt src="@foreach($settings as $data) {{$data->logo}} @endforeach"></a>
            </div>

            <div class="navbar-header">
                <button class="open-btn" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-collapse collapse navigation-holder" id="navbar">
                <button class="close-navbar"><i class="ti-close"></i></button>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{route('home')}}">Accueil</a>
                    </li>
                    <li><a href="{{route('about-us')}}">À Propos</a></li>
                    <li class="menu-item-has-children">
                        <a href="{{route('product-grids')}}">Produits</a>
                        <ul class="sub-menu">
                            @foreach(Helper::getAllCategory() as $cat)
                                <li>
                                    <a href="{{route('product-cat',$cat->slug)}}">
                                        {{$cat->title}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('blog')}}">Blog</a>
                    </li>
                    <li>
                        <a href="{{route('promotions')}}">Promotions</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- end of nav-collapse -->

            <div class="social-links">
                <ul>
                    {{-- <li><a href="javascript:"><i class="ti-pinterest"></i></a></li>
                    <li><a href="javascript:"><i class="ti-skype"></i></a></li> --}}
                    <li><a href="@foreach($settings as $data) {{$data->facebook}} @endforeach"><i class="ti-facebook"></i></a></li>
                    <li><a href="@foreach($settings as $data) {{$data->linkedin}} @endforeach"><i class="ti-linkedin"></i></a></li>
                    <li><a href="@foreach($settings as $data) {{$data->instagram}} @endforeach"><i class="ti-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- end of container -->
    </nav>
</header>
<!-- end of header -->