@extends('frontend.layouts.master')

@section('title','ISCOP SUP - À Propos de nous')

@section('main-content')


<!-- start page-title -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Coaching Professionnel</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">Accueil</a>
                        </li>
                        <li>Services : Coaching Professionnel</li>
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
                    <img src="{{url('frontend/images/servises/4.jpg')}}" style="width:100%" alt="Courses Images" />
                    {{-- <div class="course-seats">
                        170 <span>SEATS</span>
                    </div> --}}
                </div>

                <div class="course-desc">
                    {{-- <h3 class="desc-title">Besoin d’aide pour vos études ?</h3> --}}
                    <div class="desc-text">
                        <p>
                            Afin de répondre à une demande de plus en plus importante de la part des familles, ISCOPsup organise  l’atelier méthodologie pour les élèves (collège et lycée) et les étudiants .

                            Il a pour objectif d’aider les élèves et les étudiants à acquérir de bonnes bases en matière de méthode, d’efficacité et de gestion du travail scolaire ou universitaire. Lorsqu’elles ne sont pas acquises, ces différentes bases peuvent être un obstacle aux apprentissages et à la réussite scolaire.

                            Cet atelier  donnera à vos enfants des outils concrets et les aidera à trouver leur autonomie.

                            Atelier méthodologie :

                           <ul>
                               <li>
                                Découvrir son style d’apprentissage
                               </li>
                               <li>
                                Améliorer ses méthodes de travail : apprendre à mémoriser, prendre des notes utiles, construire des fiches de travail efficaces…
                               </li>
                               <li>
                                Mieux gérer son temps : savoir organiser son travail, élaborer un emploi du temps équilibré…
                               </li>
                               <li>
                                Augmenter sa confiance en soi : une estime de soi positive pour une meilleure implication dans sa scolarité.
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
