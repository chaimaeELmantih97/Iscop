@extends('frontend.layouts.master')

@section('title','ISCOP SUP ')

@section('main-content')


<!-- start page-title -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">SOUTIEN UNIVERSITAIRE</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">Accueil</a>
                        </li>
                        <li>Services : SOUTIEN UNIVERSITAIRE</li>
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
                <div class="detail-img">
                    <img src="{{url('frontend/images/servises/1.jpg')}}" alt="Courses Images" />
                    {{-- <div class="course-seats">
                        170 <span>SEATS</span>
                    </div> --}}
                </div>

                <div class="course-desc">
                    <h3 class="desc-title">Besoin d’aide pour vos études ?</h3>
                    <div class="desc-text">
                        <p>
                            ISCOP propose des cours de soutien pour les étudiants de l’enseignement supérieur, des cours adaptés aux étudiants de prépa, des grandes écoles ainsi que d’une formule de cours de soutien spécifique, destinée principalement aux étudiants universitaires inscrits dans des filières rattachées au domaine de l’économie et de gestion. Notre objectif de soutien est de comprendre et réviser les notions vues en classes régulièrement, s’entrainer via des exercices de difficulté croissante et enfin acquérir une méthodologie de travail.

                            Etudiants de la faculté des sciences juridiques, économiques et sociales.

                            Le centre de soutien universitaire ISCOP assure des cours de mise à niveau et de renforcement avec des professeurs de haut niveau. Les cours concernent tous les modules et éléments de module
                        </p>
                    </div>
                    <div class="course-syllabus">
                        <div id="accordion" class="rs-accordion-style1">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <strong>Semestre 1: </strong>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <ul style="list-style-type: square;" class="ml-5">
                                            <li>
                                                Statistiques descriptives
                                            </li>
                                            <li>
                                                Comptabilité générale
                                            </li>
                                            <li>
                                                Mathématique
                                            <li>
                                                Microéconomie
                                            </li>
                                            <li>
                                                Management
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>Semestre 2: </strong>
                                        {{-- <span>Business Management</span> --}}
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <ul style="list-style-type: square;" class="ml-5">
                                        <li>Macroéconomie</li>
                                       <li> Microéconomie</li>
                                        <li>Mathématique</li>
                                        <li>Comptabilité générale</li>
                                        <li>Algèbre</li>
                                        <li>Mathématiques financière</li>
                                        <li>Probabilité</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <strong>Semestre 3: </strong>
                                        {{-- <span>Civil Engineering</span> --}}
                                    </h3>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <ul style="list-style-type: square;" class="ml-5">
                                        <li>économie monétaire</li>
                                        <li>comptabilité analytique</li>
                                        <li>échantillonnage et estimation</li>
                                        <li>Marketing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        <strong>Semestre 4: </strong>
                                        {{-- <span>Civil Engineering</span> --}}
                                    </h3>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <ul style="list-style-type: square;" class="ml-5">
                                        <li>Analyse financière</li>
                                        <li>Comptabilité des sociétés</li>
                                        <li>Finance publique</li>
                                        <li>Informatiques de gestion</li>
                                        <li>économie monétaire et financière</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading5">
                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapse5"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        <strong>Semestre 5: </strong>
                                        {{-- <span>Civil Engineering</span> --}}
                                    </h3>
                                </div>
                                <div id="collapse5" class="collapse" aria-labelledby="heading5"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <ul style="list-style-type: square;" class="ml-5">
                                            <li>Fiscalité d’entreprise</li>
                                            <li>Comptabilité nationale</li>
                                            <li>Contrôle de gestion</li>
                                            <li>Théorie contemporaine</li>
                                            <li>Entrepreuneuriat</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header mb-0" id="heading6">
                                    <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapse6"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        <strong>Semestre 6: </strong>
                                        {{-- <span>Civil Engineering</span> --}}
                                    </h3>
                                </div>
                                <div id="collapse6" class="collapse" aria-labelledby="heading6"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <ul style="list-style-type: square;" class="ml-5">
                                            <li>Recherche opérationnelle</li>
                                            <li>économétrie</li>
                                            <li>Relation économiques internationales</li>
                                            <li>Management stratégique</li>
                                             <li>Théories des organisations</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial End -->
                    <!--
                    <div class="share-area">
                        <div class="row rs-vertical-middle">
                            <div class="col-md-5">
                                <h3>You Can Share It :</h3>
                            </div>
                            <div class="col-md-7">
                                <div class="share-inner">
                                    <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                                    <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                                    <a href="#"><i class="fa fa-google"></i> Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses Details End -->
@endsection
