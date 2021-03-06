
 <link rel='stylesheet' href="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css">
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
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
                        <p>Institut de Formation , de Soutien Coaching et Orientation / Privé "ISCOPSUP" .</p>
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
                    <h5 class="footer-title">Liens Utiles</h5>
                    <ul class="sitemap-widget">
                        <li class="active"><a href="{{route('home')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>Acceuil</a></li>
                        <li class="active"><a href="{{route('about-us')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>À PROPOS</a></li>
                        <li ><a href="{{route('contact')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
                        <li><a href="{{route('blog')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>Blogs</a></li>
                        <li> <a href="{{route('blog')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>NOTRE GALERIE</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">NEWSLETTER</h5>
                    <p>Inscrivez-vous à notre bulletin d'information pour recevoir les dernières mises à jour et les derniers services.</p>
                  <div class="form-inner">
                    <form action="{{route('subscribe')}}"  method="post" class="newsletter-inner" id="maform" >
                        @csrf
                        <input type="email" name="email" id="mc-email" placeholder="Votre adresse e-mail" required>
                      <input type="submit" class="news-btn" id="mc-submit" value="Sign up">
                    </form>
                  </div>
                </div>
            </div>
            <div class="footer-share">
                <ul>
                    <li><a target="_blank" href="https://api.whatsapp.com/send?phone=++212607158182"><i class="fa fa-whatsapp"></i></a></li>
                    @if ($data->facebook)
                    <li><a target="_blank" href="{{$data->facebook}}"><i class="fa fa-facebook"></i></a></li>
                    @endif
                    @if ($data->instagram)
                    <li><a target="_blank" href="{{$data->instagram}}"><i class="fa fa-instagram"></i></a></li>
                    @endif
                    @if ($data->facebook2)
                    <li><a target="_blank" href="{{$data->facebook2}}"><i class="fa fa-facebook"></i></a></li>
                    @endif
                    @if ($data->instagram2)
                    <li><a target="_blank" href="{{$data->instagram2}}"><i class="fa fa-instagram"></i></a></li>
                    @endif
                    @if ($data->linkedin)
                    <li><a target="_blank" href="{{$data->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <p><a href="https://feen-tech.com">FEENTECH</a> Corporation ©️ 2021</p>
            </div>
        </div>
    </div>
</footer>
@endforeach
<!-- Footer End -->
<!-- start scrollUp  -->
{{-- <div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div> --}}
<style>
    #scroll {
    position:fixed;
    right:10px;
    bottom:10px;
    cursor:pointer;
    width:50px;
    height:50px;
    background-color:#3498db;
    text-indent:-9999px;
    display:none;
    -webkit-border-radius:60px;
    -moz-border-radius:60px;
    border-radius:60px
}
#scroll span {
    position:absolute;
    top:50%;
    left:50%;
    margin-left:-8px;
    margin-top:-12px;
    height:0;
    width:0;
    border:8px solid transparent;
    border-bottom-color:#ffffff;
}
#scroll:hover {
    background-color:#5a0ceb;
    opacity:1;filter:"alpha(opacity=100)";
    -ms-filter:"alpha(opacity=100)";
}
</style>
<a href="#" id="scroll" style="display: none;"><span></span></a>

<script>
    $('#maform').submit((e) => {
        let that = e.currentTarget;
        e.preventDefault();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            method: 'POST',
            url: "{{route('subscribe')}}",
            data: {email : $("#mc-email").val()}
        })
        .done((data) => {

            $("#mc-email").val('')
            swal("Thank You ", "Vous êtes inscrit!", "success");

        })
        .fail((data) => {
            $("#mc-email").val('')
            swal("Thank you !", "Vous êtes inscrit!", "success");
            console.log("error");
        });
    });
    $('#maform2').submit((e) => {
        let that = e.currentTarget;
        e.preventDefault();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            method: 'POST',
            url: "{{route('subscribe')}}",
            data: {email : $("#newsletter-term").val()}
        })
        .done((data) => {

            $("#newsletter-term").val('')
            swal("Merci ", "Vous êtes inscrit!", "success");


        })
        .fail((data) => {
            $("#newsletter-term").val('')
            swal("Merci !", "Vous êtes inscrit!", "success");
            console.log("error");

        });
    });
</script>

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

<style>
    .select-style {
        border-bottom: 1px solid #A6AEBC;
    width: 100%;
    border-radius: 3px;
    overflow: hidden;
    background: #0d0d0d url(img/icon-select.png) no-repeat 90% 50%;
}

.select-style select {
    padding: 5px 8px;
    width: 130%;
    color: #A6AEBC;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
    outline: none;
}
</style>

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true" class="fa fa-close"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form method="post" action="{{route('inscriptionPOST')}}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" name="nom" placeholder="Nom Complet" type="text" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" placeholder="Email" type="email" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="tel" placeholder="Numéro du telephone" type="text" required>
                    </div>
                    {{-- <div class="form-group">
                        <select name="formation" reduired id="" class="nice-select">
                            <option value="" style="color: #A6AEBC;"> selectionner une formation</option>
                            @php
                                $frs=App\Models\Category::all();
                            @endphp
                            @foreach ($frs as $item)
                            <option value="{{$item->title}}" > {{$item->title}}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="form-group">
                        <div class="select-style">
                            <select name="formation" reduired >
                                <option value="" style="color: #A6AEBC;"  required> selectionner une formation</option>
                                @php
                                    $frs=App\Models\Category::all();
                                @endphp
                                @foreach ($frs as $item)
                                @if($item->is_parent!=1)
                                <option value="{{$item->title}}" > {{$item->title}}</option>
                                @endif
                                @endforeach
                            </select>
                          </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary mt-3 float-right" type="submit"> S'inscrire </button>
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
{{-- modal.js --}}
<script src="{{url('modal/modal.js')}}"></script>
<script>
    // openGenModal('1');
    $('#myModal').modal('show');
</script>
<script>
    $(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});
</script>
