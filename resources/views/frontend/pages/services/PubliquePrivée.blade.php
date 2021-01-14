@extends('frontend.layouts.master')

@section('title','ISCOP SUP')

@section('main-content')


<!-- start page-title -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">La Fonction Publique Et Privée</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">Accueil</a>
                        </li>
                        <li>Services : La Fonction Publique Et Privée</li>
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
                    <img src="{{url('frontend/images/servises/10.jpg')}}" style="width:100%" alt="Courses Images" />
                    {{-- <div class="course-seats">
                        170 <span>SEATS</span>
                    </div> --}}
                </div>

                <div class="course-desc">
                    {{-- <h3 class="desc-title">Besoin d’aide pour vos études ?</h3> --}}
                    <div class="desc-text">
                        Quels que soient le cadre d’emplois ou la filière visée, l’inscription à un concours de la fonction publique ou privée est un marathon de haut niveau , la préparation à ces concours pour décrocher le poste souhaité est devenu incontournable vue le grand nombre  des candidats qui postulent et qui ont presque le même parcours que le vôtre . Ainsi , se différencier par une préparation aussi précise et efficace est devenu nécessaire.

                            ISCOPsup vous propose un cycle préparatoire aux concours écrits et oraux pour intégrer la fonction publique et privée avec succès et met à votre disposition des professionnels (cadre supérieur) dans le domaine pour vous accompagner et vous guider en terme de :

                            <ul style="list-style-type: square" class="ml-5 mt-5">
                            <li>
                                Méthodologie de dissertation
                            </li>
                            <li>
                                Instruments de base : dictionnaires et lexique
                            </li>
                            <li>
                                Actualités et sujets à préparer
                            </li>
                            <li>
                                Correction des épreuves anciennes
                            </li>
                            <li>
                                Techniques pour pouvoir réussir l’épreuve orale
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
