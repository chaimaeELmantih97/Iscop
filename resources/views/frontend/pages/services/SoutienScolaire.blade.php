@extends('frontend.layouts.master')

@section('title','ISCOP SUP ')

@section('main-content')


<!-- start page-title -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Soutien Scolaire</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">Accueil</a>
                        </li>
                        <li>Services : Soutien Scolaire</li>
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
                    <img src="{{url('frontend/images/servises/2.jpg')}}" style="width:100%" alt="Courses Images" />
                    {{-- <div class="course-seats">
                        170 <span>SEATS</span>
                    </div> --}}
                </div>

                <div class="course-desc">
                    <h3 class="desc-title">Besoin d’aide pour vos études ?</h3>
                    <div class="desc-text">
                        <p>
                            Prenez la liberté de choisir le système d’enseignement qui vous correspond et confiez-nous
                            l’accompagnement de vos enfants en soutien scolaire.

                            Nous avons toujours placé l’élève au centre de notre vision. Avec une dizaine d’offres
                            différentes, nous sommes en mesure de vous proposer celle qui s’adaptera au mieux au profil
                            de votre enfant.

                            Que ce soit en centre ou à domicile, en particulier ou en groupes restreints, nous
                            enseignons plus de 15 matières du primaire à l’enseignement supérieur en passant par le
                            collège et le lycée.

                            Notre méthodologie proactive s’adapte à tous les types d’enseignement , nos formules
                            s’adaptent aux exigences spécifiques de nos élèves en fonction de leurs besoins et des
                            différents systèmes scolaires au sein desquels ils évoluent.
                        </p>
                    </div>
                    <div class="sidebar-area">
                    <div class="tags-cloud clearfix">
                        <h3 class="title">Principales matières enseignées à ISCOPsup </h3>
                        <ul>
                            <li>
                                <a href="#">Mathématiques</a>
                            </li>
                            <li>
                                <a href="#">Physique-chimie</a>
                            </li>
                            <li>
                                <a href="#">Sciences de la Vie et de la Terre</a>
                            </li>
                            <li>
                                <a href="#">Algorithmique</a>
                            </li>
                            <li>
                                <a href="#"> Français</a>
                            </li>
                            <li>
                                <a href="#">Préparation du BAC Français en 1ère</a>
                            </li>
                            <li>
                                <a href="#">Sciences Economiques et Sociales</a>
                            </li>
                            <li>
                                <a href="#">Histoire Géographie</a>
                            </li>
                            <li>
                                <a href="#">Management</a>
                            </li>
                            <li>
                                <a href="#">Marketing</a>
                            </li>
                            <li>
                                <a href="#">Gestion</a>
                            </li>
                            <li>
                                <a href="#">Droit</a>
                            </li>
                            <li>
                                <a href="#"> Anglais</a>
                            </li>
                            <li>
                                <a href="#">Arabe</a>
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
