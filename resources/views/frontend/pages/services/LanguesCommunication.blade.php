@extends('frontend.layouts.master')

@section('title','ISCOP SUP ')

@section('main-content')


<!-- start page-title -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Langues Et Communication</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">Accueil</a>
                        </li>
                        <li>Services : Langues Et Communication</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page-title -->
<!-- Courses Details Start -->
<div class="rs-courses-details pt-100 pb-70">
    <div class="container">
        <div class="row mb-30">
            <div class="col-lg-12 col-md-12">
                <div class="detail-img" style="width:100%">
                    <img src="{{url('frontend/images/servises/3.jpg')}}" style="width:100%" alt="Courses Images" />
                    {{-- <div class="course-seats">
                        170 <span>SEATS</span>
                    </div> --}}
                </div>

                <div class="course-desc">
                    {{-- <h3 class="desc-title">Besoin d’aide pour vos études ?</h3> --}}
                    <div class="desc-text">
                        <p>
                            Pour répondre aux exigences du marché d’emploi en termes
                            de communication et techniques d’expression ISCOPsup Meknès propose aux professionnels et aux étudiants universitaires des formations en techniques de communication professionnelle sous l’encadrement des spécialistes praticiens en Communication et développement personnel; avec un club de communication dans lequel vous pouvez mettre en pratique vos capacités linguistiques.
                        </p>
                    </div>
                    <div class="sidebar-area">
                    <div class="tags-cloud clearfix">
                        {{-- <h3 class="title">Principales matières enseignées à ISCOPsup </h3> --}}
                        <ul style="list-style-type: square" class="ml-5">
                            <li>
                                <a href="#">Français</a>
                            </li>
                            <li>
                                <a href="#">english</a>
                            </li>

                            <li>
                                <a href="#">Espagnol</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses Details End -->
@endsection
