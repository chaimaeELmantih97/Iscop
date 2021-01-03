@extends('frontend.layouts.master')

@section('title','Beauty Design - Contactez-nous')

@section('main-content')

	<!-- start page-title -->
	<section class="page-title">
		<div class="container">
			<div class="row">
				<div class="col col-xs-12">
					<h2>Contact</h2>
					<ol class="breadcrumb">
						<li><a href="{{route('home')}}">Accueil</a></li>
						<li>Contact</li>
					</ol>
				</div>
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section>        
	<!-- end page-title -->

	<!-- start Status -->
	<section class="archito-get-in-touch section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7">
					<div class="get-in-touch-contact-area">
						<div class="section-title">
							<span>Contactez-Nous</span>
							<h2>Nous sommes toujours prêts à résoudre vos problèmes.</h2>
						</div>
						<div class="get-contact-form">
							<form class="contact-validation-active" id="contact-form-main" method="post" action="{{route('contact.store')}}">
								@csrf
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<input class="form-control" name="name" placeholder="Nom:" type="text">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<input class="form-control" name="email" placeholder="Email:" type="email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<input class="form-control" name="phone" placeholder="Téléphone:" type="text">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<input class="form-control" name="subject" placeholder="Objet:" type="text">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<textarea class="form-control" id="note" name="message" placeholder="Message:"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<button class="theme-btn" type="submit">Envoyer le message</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-5">
					<div class="right-image">
						<img alt="" class="img-responsive" src="{{asset('frontend/assets/images/get-in-touch.png')}}">
						<div class="quote">
							<img alt="" class="img-responsive" src="{{asset('frontend/assets/images/get-in-touch-quote.svg')}}">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end of Status -->

	<!--  start contact-map -->
	<section class="contact-map-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="hidden">Adresse</h2>
					<div class="contact-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end contact-map -->

@endsection