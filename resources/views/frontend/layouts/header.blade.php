<!-- Start header -->
<header class="site-header header-style-1" id="header">

    <nav class="navigation navbar navbar-default">
        <div class="container-fluid">
            <div class="logo">
                <a href="index.html"><img alt src="{{asset('frontend/assets/images/logo.png')}}"></a>
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
                    <li class="menu-item-has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home default</a></li>
                            <li><a href="index-2.html">Home style 2</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">about</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="services.html">Services</a></li>
                            <li><a href="service-single.html">Services Single</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">project</a>
                        <ul class="sub-menu">
                            <li><a href="portfolio.html">project</a></li>
                            <li><a href="portfolio-single.html">project single</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                            <li><a href="blog-fullwidth.html">Blog full width</a></li>
                            <li><a href="blog-single.html">Blog details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <!-- end of nav-collapse -->

            <div class="social-links">
                <ul>
                    {{-- <li><a href="javascript:"><i class="ti-pinterest"></i></a></li>
                    <li><a href="javascript:"><i class="ti-skype"></i></a></li> --}}
                    <li><a href="javascript:"><i class="ti-instagram"></i></a></li>
                    <li><a href="javascript:"><i class="ti-linkedin"></i></a></li>
                    <li><a href="javascript:"><i class="ti-facebook"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- end of container -->
    </nav>
</header>
<!-- end of header -->