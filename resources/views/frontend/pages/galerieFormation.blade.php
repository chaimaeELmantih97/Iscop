@extends('frontend.layouts.master')

@section('meta')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name='copyright' content=''>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
@endsection
@section('title','ISCOP SUP || Galerie')
@section('main-content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Galerie</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">Acceuil</a>
                        </li>
                        <li>Galerie</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .gimg {
        height: 200px;
        width: 100%;
    }

</style>
<!-- Breadcrumbs End -->

<!-- Gallery Start -->
<div class="rs-gallery-4 rs-gallery sec-spacer">
    <div class="container">
        <div class="sec-title-2 mb-50 text-center">
            <h2>Notre Galerie</h2>
        </div>
        <div class="row">
            @php
            $galeries=App\Galerie::all();
            @endphp
            @foreach ($galeries as $g)
            <div class="col-lg-3 col-md-6 mt-2">
                <div class="gallery-item" style="width:100%">
                    <img class="gimg" src="{{$g->photo}}" alt="Gallery Image" />
                    <div class="gallery-desc">
                        <a class="image-popup" href="{{$g->photo}}">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Gallery End -->

@endsection
@push('styles')
@endpush
@push('scripts')

@endpush
