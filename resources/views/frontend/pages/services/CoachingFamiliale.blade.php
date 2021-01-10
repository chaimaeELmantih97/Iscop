@extends('frontend.layouts.master')

@section('title','ISCOP SUP - À Propos de nous')

@section('main-content')


<!-- start page-title -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Coaching Familiale</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">Accueil</a>
                        </li>
                        <li>Services : Coaching Familiale</li>
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
                    <img src="{{url('frontend/images/servises/6.jpg')}}" style="width:100%" alt="Courses Images" />
                    {{-- <div class="course-seats">
                        170 <span>SEATS</span>
                    </div> --}}
                </div>

                <div class="course-desc">
                    {{-- <h3 class="desc-title">Besoin d’aide pour vos études ?</h3> --}}
                    <div class="desc-text">
                        <p>
                            Le coaching parental/familial est un service d’aide destiné aux parents désireux d’améliorer leurs stratégies éducatives ou souhaitant obtenir trucs et conseils par rapport à une situation donnée.

Voici quelques exemples concrets qui illustrent en quoi le coaching parental/familial peut s’avérer utile :

Parent qui se sent dépassé quant à sa façon d’intervenir auprès de son enfant ou adolescent
Événement qui nécessite une nouvelle adaptation pour la famille (décès, déménagement, etc.)
Restructuration familiale (séparation, arrivée d’un nouveau conjoint, famille reconstituée)
Parent désireux d’améliorer la communication avec son enfant ou adolescent, ou encore, souhaitant aborder un sujet délicat avec lui…
Le professionnel peut intervenir sur diverses facettes relatives à votre vie familiale et adapte ses stratégies en fonction de vos besoins spécifiques. Le coach parental/familial peut autant vous aider à optimiser la qualité de vos interventions que vous guider sur la façon de gérer une situation épineuse.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses Details End -->
@endsection
