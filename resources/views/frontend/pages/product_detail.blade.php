@extends('frontend.layouts.master')

@section('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name='copyright' content=''>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
@endsection
@section('title','ISCOP || PRODUCT DETAIL')
@section('main-content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">{{$formation->title}}</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">Acceuil</a>
                        </li>
                        <li>{{$formation->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumbs End -->

<!-- Courses Details Start -->
<div class="rs-courses-details pt-100 pb-70">
    <div class="container">
        <div class="row mb-30">
            <div class="col-lg-8 col-md-12">
                <div class="detail-img" style="width: 100%">
                    <img src="{{$formation->photo}}" style="width: 100%;" alt="Courses Images" />
                    <div class="course-seats price">
                        <a href="https://api.whatsapp.com/send?phone={{$formation->whatsapp}}"><i class="fa fa-whatsapp"
                                aria-hidden="true" style="color: white; font-size: 40px;margin-top: 20px;"></i></a>
                    </div>
                    {{-- <div class="course-seats">
                	        	170 <span>SEATS</span>
                	        </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="course-des-tabs">
                            <div class="tab-btm">
                                <!-- Nav tabs -->
                                <div class="tabs-wrapper">
                                    <ul class="nav classic-tabs tabs-cyan" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link waves-light active" data-toggle="tab" href="#panel51"
                                                role="tab">Description</a>
                                        </li>
                                        {{-- <li class="nav-item">
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#curriculum" role="tab">Curriculum</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#instructors" role="tab">Instructors</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#review" role="tab">Review</a>
                                                </li> --}}
                                    </ul>
                                </div>
                            </div>
                            <!-- Tab panels -->
                            <div class="tab-content card">
                                <!--Panel 1-->
                                <div class="tab-pane fade in active show" id="panel51" role="tabpanel">
                                    <h4 class="desc-title">Détails de la formation</h4>
                                    <p>
                                        {!!$formation->summary!!}
                                    </p>
                                    <p>
                                        {!!$formation->description!!}
                                    </p>

                                </div>
                                <!--/.Panel 1-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-area">
                    <div class="course-features-info">
                        <h4 class="desc-title">Caractéristiques du formation</h4>
                        <ul>
                            <li><i class="fa fa-clock-o"></i> <span class="label">Durée</span> <span
                                    class="value">{{$formation->duree}}</span></li>
                            <li><i class="fa fa-level-up"></i> <span class="label">Niveau de compétence</span> <span
                                    class="value">{{$formation->niveau}}</span></li>
                            <li><i class="fa fa-language"></i> <span class="label">Langue</span> <span
                                    class="value">{{$formation->langue}}</span></li>
                            <li><i class="fa fa-users"></i> <span class="label">Nombre de places </span> <span
                                    class="value">{{$formation->place}}</span></li>
                            <li><i class="fa fa-check-square-o"></i> <span class="label">Évaluations</span> <span
                                    class="value">OUI</span></li>
                        </ul>
                    </div>

                    <div class="newsletter">
                        <h4>Newsletter</h4>
                        <p>Inscrivez-vous à notre Newsletter !!</p>
                        <form action="{{route('subscribe')}}" method="post" class="newsletter-inner" id="maform2">
                            @csrf
                            <div class="box-newsletter">
                                <input class="form-control" placeholder="support@mail.com" name="email"
                                    id="newsletter-term" type="text">
                                <button class="btn btn-default" type="submit"><i class="fa fa-arrow-right"
                                        aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div><!-- .newsletter end -->
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-45">
        <!-- Testimonial Start -->
        <div class="related-courses rs-courses-3">
            <div class="sec-title-2 mb-50">
                <h2>RELATED COURSES</h2>
                {{-- <p>Considering primary motivation for the generation of narratives is a useful concept</p> --}}
            </div>
            @php
            $frs=App\Models\Category::all();
            @endphp
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                data-autoplay-timeout="5000" data-smart-speed="1500" data-nav="true" data-nav-speed="false"
                data-mobile-device="1" data-mobile-device-nav="true" data-ipad-device="2" data-ipad-device-nav="true"
                data-md-device="3" data-md-device-nav="true">
                @foreach ($frs as $fr)
                <div class="course-item">
                    <div class="course-img">
                        <img src="{{$fr->photo}}" alt="" />
                        <span class="course-value"><a href="https://api.whatsapp.com/send?phone={{$formation->whatsapp}}"> <i class="fa fa-whatsapp" aria-hidden="true" style="color: white; font-size: 20px;"></i></a>
                        </span>
                        <div class="course-toolbar">
                            <h4 class="course-category"></h4>
                            <div class="course-date">
                                <i class="fa fa-clock-o"></i> {{$fr->duree}}
                            </div>
                            <div class="course-duration">
                                <i class="fa fa-book"></i> Langue: {{$fr->langue}}
                            </div>
                        </div>
                    </div>
                    <div class="course-body">
                        <div class="course-desc">
                            <h4 class="course-title"><a href="{{route('product-detail',$fr->slug)}}">{{$fr->title}}</a></h4>
                            @php
                            $shortdesc=substr($fr->summary,0,100);
                            @endphp
                            <p>
                                {{$shortdesc}}
                            </p>
                        </div>
                    </div>
                    <div class="course-footer">
                        {{-- <div class="course-seats">
                            <i class="fa fa-users"></i>Nombre de places: {{$fr->place}}
                        </div> --}}
                        <div class="course-button">
                            <a href="{{route('product-detail',$fr->slug)}}">Savoire plus</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- Courses Details End -->

@endsection
@push('styles')
@endpush
@push('scripts')

@endpush
