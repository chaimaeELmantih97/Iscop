@extends('frontend.layouts.master')
@section('title','ISCOP')
@section('main-content')
<!-- Slider Area -->
@php
$banner=App\Models\Banner::first();
@endphp
<div class="rs-banner-section3"
    style="background-image: url('{{url($banner->photo)}}') ; background-position: center top;background-repeat: no-repeat;padding-top: 180px;padding-bottom: 100px;background-size: cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="countdown-part">
                    <span class="sub-title">{{$banner->title}}</span>
                    <h3 style="color:white;">{{$banner->description}} </h3>
                    <div class="counter-wrap">
                        <div class="timecounter-inner">
                            <div class="CountDownTimer2" data-date="{{$banner->date}} 23:59:59"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 md-pt-40">
                <div class="register-form">
                    <div class="form-title text-center">
                        <h4 class="title">S'inscrire maintenant</h4>
                    </div>
                    <div class="form-group text-center">
                        <form id="contact-form" class="contact-form" method="post"
                            action="{{route('inscriptionPOST')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <input class="from-control" name="nom" type="text" placeholder="Nom Complet"
                                        id="name" required="required">

                                </div>
                                <div class="col-lg-12">
                                    <input class="from-control" name="email" type="email" placeholder="E-Mail"
                                        id="email" required="required">
                                </div>
                                <div class="col-lg-12">
                                    <input class="from-control" name="tel" type="text" placeholder="Numéro de telephone"
                                        id="phone_number" required="required">
                                </div>
                                <div class="col-lg-12">
                                    <select class="from-control" name="formation" reduired id="" class="nice-select">
                                        <option value="" style="color: #A6AEBC;"> selectionner une formation</option>
                                        @php
                                        $frs=App\Models\Category::all();
                                        @endphp
                                        @foreach ($frs as $item)
                                        @if($item->is_parent!=1)
                                        <option value="{{$item->title}}"> {{$item->title}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" value="s'Inscrire Maintenant"
                                        class="wpcf7-form-control wpcf7-submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rs-services rs-services-style1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="services-item rs-animation-hover">
                    <div class="services-icon">
                        <i class="fa fa-graduation-cap rs-animation-scale-up"></i>
                    </div>
                    <div class="services-desc">
                        <h4 class="services-title">CYCLE DE FORMATION</h4>
                        <p>Nous offrons des cycles de Formation: Community Manager, Webdesigner, Comptable Confirmé et
                            Assistante de Direction .</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item rs-animation-hover">
                    <div class="services-icon">
                        <i class="fa fa-book rs-animation-scale-up"></i>
                    </div>
                    <div class="services-desc">
                        <h4 class="services-title">ATELIER FORMATION</h4>
                        <p>ISCOP SUP propose des Formations de courte durée et surtout pratiques sous forme des ateliers
                            pratiques.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item rs-animation-hover">
                    <div class="services-icon">
                        <i class="fa fa-user rs-animation-scale-up"></i>
                    </div>
                    <div class="services-desc">
                        <h4 class="services-title">ACCOMPAGNEMENT DIGITAL</h4>
                        <p>ISCOP SUP (Formation professionnelle certifiante) propose des solutions innovantes dans le
                            domaine de Marketing Digital.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--/ End Slider Area -->

<!-- Start Small Banner  -->
<div class="rs-about-style8 pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 pt-40">
                <div class="img-part">
                    <img src="{{url('frontend/images/about/home7.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-7 pl-60 md-pt-40 md-pl-15">
                <div class="sec-title2">
                    <span class="sub-title">À propos de nous</span>
                    <h2 class="title pb-10">Bienvenue à ISCOP</h2>
                    <p>
                        Institut de Formation professionnelle et Soutien Coaching et Orientation / privé (ISCOP) est un
                        organisme spécialisé en matière de :
                    </p>
                </div>
                <ul class="pb-40">
                    <li>Formation à court-terme certifiante.</li>
                    <li>Cours de soutien pour tous les niveaux.</li>
                    <li>Coaching scolaire, professionnel et familiale.</li>
                    <li>Orientation pédagogique et professionnelle.</li>
                    <li>Cours de langues et communication. </li>
                    <li>Conseil et recrutement RH.</li>
                    <li>Location de salle de formation.</li>
                    <li>Événementiels professionnels,organisation des conférences.</li>
                </ul>
                <div class="author-section">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="course-author">
                                <div class="align-img">
                                    @php
                                    $settings=DB::table('settings')->get();
                                    @endphp
                                    @foreach($settings as $data)
                                    <img src="{{$data->logo}}" alt="">
                                    @endforeach
                                </div>
                                <div class="author-content">
                                    <h4 class="mb-0">ISCOP SUP</h4>
                                    <p>
                                        Centre de Formation Professionnelle
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="signature">
                                <img src="{{url('frontend/images/about/signature2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Small Banner -->

<!-- Courses Start -->
@php
$formations=App\Models\Category::all();
@endphp

{{-- team start --}}
<div id="rs-courses" class="rs-courses sec-color sec-spacer">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-4 col-md-12">
                <div class="sec-title mb-30">
                    <h2>Formation Certifiante</h2>
                    <p>Nous proposons plusieurs types de Formations certifiantes.</p>
                </div>
                <p class="mobile-mb-50">
                    Ces programmes sont conçus pour accompagner les évolutions majeures des organisations, piloter la
                    transformation, innover, répondre aux défis de demain et construire une vision stratégique de chaque
                    métier.
                </p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="rs-carousel owl-carousel rs-navigation-2" data-loop="true" data-items="2" data-margin="30"
                    data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true"
                    data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
                    data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
                    data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true"
                    data-md-device-dots="true">
                    @foreach ($formations as $key=>$formation)
                    @if($formation->is_parent!=1)
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="{{$formation->photo}}" alt="" style="min-height:370px; max-height:370px; " />
                            <a class="image-link" href="{{route('product-detail',$formation->slug)}}"
                                title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>
                            <span class="course-value">
                                <a href="https://api.whatsapp.com/send?phone={{$formation->whatsapp}}"> <i
                                        class="fa fa-whatsapp" aria-hidden="true"
                                        style="color: white; font-size: 20px;"></i></a>
                            </span>
                        </div>
                        <div class="course-body">
                            <h4 class="course-title"><a
                                    href="{{route('product-detail',$formation->slug)}}">{{$formation->title}}</a></h4>
                            <div class="course-desc mt-2">
                                @php
                                $shortdesc=substr($formation->summary,0,100);
                                @endphp
                                <p>
                                    {{$shortdesc}} ...
                                </p>
                            </div>
                        </div>
                        <div class="course-footer">
                            <div class="course-time mr-3">
                                <span class="label">Durée</span>
                                <span class="desc">{{$formation->duree}}</span>
                            </div>
                            <div class="course-student mr-3">
                                <span class="label">Niveau</span>
                                <span class="desc">{{$formation->niveau}}</span>
                            </div>
                            <div class="class-duration mr-3">
                                <span class="label">Langue</span>
                                <span class="desc">{{$formation->langue}}</span>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
{{-- team end --}}

{{-- Counter --}}
<div class="rs-counter-style8 pt-100 bg14 md-gray-bg-color">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="rs-counter-list">
                    <div class="icon-part">
                        <i class="flaticon-tool"></i>
                    </div>
                    <div class="text-part">
                        <h2 class="counter-number plus">20</h2>
                        <h4 class="counter-desc">ENSEIGNANTS</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rs-counter-list">
                    <div class="icon-part">
                        <i class="flaticon-tool-2"></i>
                    </div>
                    <div class="text-part">
                        <h2 class="counter-number plus">10</h2>
                        <h4 class="counter-desc">Formations</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rs-counter-list">
                    <div class="icon-part">
                        <i class="flaticon-book"></i>
                    </div>
                    <div class="text-part">
                        <h2 class="counter-number plus">1000</h2>
                        <h4 class="counter-desc">ÉTUDIANTS</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rs-counter-list">
                    <div class="icon-part">
                        <i class="flaticon-book-1"></i>
                    </div>
                    <div class="text-part">
                        <h2 class="counter-number plus">10</h2>
                        <h4 class="counter-desc">PUBLICATIONS</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end counter --}}

<div id="rs-latest-news" class="rs-latest-news sec-spacer">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-4 col-md-12">
                <div class="sec-title mb-30">
                    <h2>Dernières publications</h2>
                    <p>Nous sommes prêts à partager nos conseils et notre expérience.</p>
                </div>
                <p class="mobile-mb-50">
                    Institut de Formation professionnelle et Soutien Coaching et Orientation / privé.
                </p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-9">
                        <div class="latest-news-slider">
                            @foreach ($posts as $post)
                            <div>
                                <div class="news-normal-block">
                                    <div class="news-img">
                                        <a href="{{route('blog.detail',$post->slug)}}">
                                            <img src="{{$post->photo}}" style="height: 239px; object-fit: cover;"
                                                alt="" />
                                        </a>
                                    </div>
                                    @php
                                    setlocale(LC_TIME,'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');
                                    $date = strftime('Le %d %B, %Y', strtotime($post->created_at));
                                    @endphp
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>{{$date}}</span>
                                    </div>
                                    <h4 class="news-title"><a
                                            href="{{route('blog.detail',$post->slug)}}">{{$post->title}}</a></h4>
                                    <div class="news-desc">
                                        <p>
                                            {!!$post->summary!!}
                                        </p>
                                    </div>
                                    <div class="news-btn">
                                        <a href="{{route('blog.detail',$post->slug)}}">SAVOIR PLUS</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="latest-news-nav">
                            @foreach ($posts as $post)
                            <div><img src="{{$post->photo}}" style="height: 115px; " alt="" /></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- testimonial --}}
@if (count($testimonials) != 0)

<div id="rs-testimonial" class="rs-testimonial bg5 sec-spacer">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-4 col-md-12">
                <div class="sec-title mb-30">
                    <h2 class="white-color">CE QUE LES GENS DISENT</h2>
                </div>
                <p class="white-color mobile-mb-50">
                    Nous fournissons toujours les meilleurs services. Ce que <span> disent les clients satisfaits de
                        ISCOP SUP</span>.

                </p>
            </div>
            <div class="col-lg-8  col-md-12">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30"
                    data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="false"
                    data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
                    data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true"
                    data-ipad-device-dots="false" data-md-device="2" data-md-device-nav="true"
                    data-md-device-dots="false">
                    @foreach ($testimonials as $testimonial)
                    <div class="testimonial-item">
                        <div class="testi-img">
                            <img src="{{$testimonial->photo}}" alt="Jhon Smith">
                        </div>
                        <div class="testi-desc">
                            <h4 class="testi-name">{{$testimonial->name}}</h4>
                            <p>{{$testimonial->job}}</p>
                            <p>
                                {{$testimonial->description}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif
{{-- end testimonial --}}

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">voici l'une de nos formations les plus demandées.
                </h5>
                {{-- <button class="float-right btn btn-primary" style="right: 0;"><i class="fa fa-graduation-cap mr-2"></i> S'inscrire</button> --}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width: 100%">
                <img src="{{url('storage/photos/1/logistique.jpg')}}" style="width:100%; " alt="">
            </div>
        </div>
    </div>
</div>

{{-- @php
    $fbID = "ISCOPformation";
    date_default_timezone_set("America/Chicago");
    $url = "http://graph.facebook.com/".$fbID."/feed?limit=3";
    // Update by MC Vooges 11jun 2014: Access token is now required:
    $url.= '&access_token=495497154769792|827148a9089321b01d5f55ba6671ef76';// *
    //load and setup CURL
     $c = curl_init($url);
     dd($c);
     curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    //get data from facebook and decode JSON
     $page = json_decode(curl_exec($c));
    //close the connection
     curl_close($c);
    //return the data as an object
     $myPosts=$page->data;
     dd($myPosts);
@endphp --}}

{{-- @php

$appID = '495497154769792'; // Remplacez par votre app_id
$appSecret = '827148a9089321b01d5f55ba6671ef76'; // Remplacez par votre secret

//Create an access token using the APP ID and APP Secret.
$accessToken = $appID . '|' . $appSecret;

//The ID of the Facebook page in question.
$id = 'ISCOPformation';

//Tie it all together to construct the URL
$url = "https://graph.facebook.com/$id/posts?access_token=$accessToken";

//Make the API call
$result = file_get_contents($url);
dd($result);
//Decode the JSON result.
$decoded = json_decode($result, true);

//Dump it out onto the page so that we can take a look at the structure of the data.
var_dump($decoded);
@endphp --}}

@endsection

@push('styles')

@endpush

@push('scripts')

@endpush
