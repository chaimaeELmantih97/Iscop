@extends('frontend.layouts.master')

@section('title','ISCOP SUP - À Propos de nous')

@section('main-content')


<!-- start page-title -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">PREPARATION AUX CONCOURS</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">Accueil</a>
                        </li>
                        <li>Services : PREPARATION AUX CONCOURS</li>
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
                    <img src="{{url('frontend/images/servises/9.jpg')}}" style="width:100%" alt="Courses Images" />
                    {{-- <div class="course-seats">
                        170 <span>SEATS</span>
                    </div> --}}
                </div>

                <div class="course-desc">
                    {{-- <h3 class="desc-title">Besoin d’aide pour vos études ?</h3> --}}
                    <div class="desc-text">
                        Réussir un concours très sélectif offert seulement aux candidats les plus méritants nécessite non seulement des connaissances préalables mais aussi une véritable préparation basée sur une méthodologie de travail pour bien gérer d’abord son stress, son temps et  s’entrainer aux différents tests posés le jour du concours. Alors, entre le format du concours auquel les candidats ne sont pas habitués et le nombre de places limité, il est important de bien se préparer  au concours afin d’être prêt le jour J.

ISCOPsup vous propose une méthodologie qui vous permet de :

<ul style="list-style-type: square" class="ml-5 mt-5">
<li>
    S’appuyer sur une série de documents et de supports permettant  de préparer au mieux les concours.
</li>
<li>
    S’entrainer systématiquement  afin  d’acquérir les bases méthodologiques, de développer les réflexes et de gagner en efficacité  et en rapidité.
</li>
<li>
    Proposer des sujets de concours ou à participer à la correction des épreuves qui sont l’unique moyen de se former à ce type d’épreuve et d’assurer une admission définitive.
</li>
<li>
Intégrer la meilleure école possible.
</li>
</ul>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses Details End -->
@endsection
