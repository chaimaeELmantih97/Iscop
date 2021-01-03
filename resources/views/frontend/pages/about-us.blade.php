@extends('frontend.layouts.master')

@section('title','Beauty Design - À Propos de nous')

@section('main-content')

	@php
		$settings=DB::table('settings')->get();
	@endphp

    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2 style="margin-top: 50px">À Propos de Nous</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Accueil</a></li>
                        <li>À Propos de Nous</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>        
	<!-- end page-title -->
	
	
	<!-- start about -->
	<section class="arkit-about2 section-padding">
		<div class="container">
			<div class="row display-flex">
				<div class="col-lg-5 col-md-6 col-xs-12">
					<div class="arkit-about-inner">
						<span>Present dans le marché depuis 2015</span>
						<h2>{{$about->title}}</h2>
						<p>
							{{$about->description}}
						</p>
						<div class="contact-number">
							<div class="content">
								<span>Appelez-nous :</span>
								<h4>@foreach($settings as $data) {{$data->phone}} @endforeach</h4>
							</div>
							<div class="icon">
								<img alt="" class="img-responsive" src="{{asset('frontend/assets/images/about/icon/smartphone.svg')}}">
							</div>
						</div>
					</div>
				</div>
				<!--/col-->
				<div class="col-lg-7 col-md-6 col-xl-12">
					<div class="about-img">
						<img alt="{{$about->photo}}" src="{{$about->photo}}">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end of about -->

	<!-- start service -->
	<section class="arkit-service-info section-padding">
		<div class="container-fluid">
			<div class="owl-carousel owl-theme service-info-slider">
				@foreach ($services as $key => $service)
					<div class="item arkit-service-info-single" data-number="{{ ($key+1) < 10 ? '0'.($key+1) : ($key+1) }}" style="height: 330px">
						<span class="tag">{{$service->tag}}</span>
						<h2>{{$service->title}}</h2>
						<p>{{$service->description}}</p>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- end of service -->

@endsection