@extends('frontend.layouts.master')

@section('title','ISCOP SUP - À Propos de nous')

@section('main-content')


<!-- start page-title -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title"> Orientation Pédagogique</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">Accueil</a>
                        </li>
                        <li>Services :  Orientation Pédagogique</li>
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
                    <img src="{{url('frontend/images/servises/7.jpg')}}" style="width:100%" alt="Courses Images" />
                    {{-- <div class="course-seats">
                        170 <span>SEATS</span>
                    </div> --}}
                </div>

                <div class="course-desc">
                    {{-- <h3 class="desc-title">Besoin d’aide pour vos études ?</h3> --}}
                    <div class="desc-text">
                        <p>
                            L’Orientation  scolaire consiste à proposer à une personne en âge de scolarité et même aux adultes  les différentes filières dans lesquelles elle pourrait s’insérer en fonction de ses intérêts, de son parcours scolaire antérieur, et de sa personnalité.

Alors, vous êtes élèves ou étudiants et vous trouvez de la difficulté pour définir votre parcours pédagogique ; ISCOPsup vous oriente à l’aide des conseillers d’orientation de haut niveau, qualifiés et expérimentés vers le chemin le plus convenable à votre profil.
</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses Details End -->
@endsection
