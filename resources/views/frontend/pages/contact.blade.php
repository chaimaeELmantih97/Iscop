@extends('frontend.layouts.master')

@section('title','ISCOP - Contactez-nous')

@section('main-content')

	<!-- start page-title -->
	<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">Contactez-nous</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{route('home')}}">Acceuil</a>
                            </li>
                            <li>contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end page-title -->

    <!-- Contact Section Start -->
		<div class="contact-page-section sec-spacer">
        	<div class="container">
        		<div id="googleMap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13564928.427652134!2d-14.508495849999973!3d33.896089200000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda04527c3cf08df%3A0xfa9267315652be9a!2sISCOP%20Consulting!5e0!3m2!1sfr!2sma!4v1610032362343!5m2!1sfr!2sma"
                      height="450" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
        		{{-- <div class="row contact-address-section">
    				<div class="col-md-4 pl-0">
    					<div class="contact-info contact-address">
    						<i class="fa fa-map-marker"></i>
    						<h4>Address</h4>
    						<p>503  Old Buffalo Street</p>
    						<p>Northwest #205, New York-3087</p>
    					</div>
    				</div>
    				<div class="col-md-4">
    					<div class="contact-info contact-phone">
    						<i class="fa fa-phone"></i>
    						<h4>Phone Number</h4>
    						<a href="tel:+3453-909-6565">+3453-909-6565</a>
    						<a href="tel:+2390-875-2235">+2390-875-2235</a>
    					</div>
    				</div>
    				<div class="col-md-4 pr-0">
    					<div class="contact-info contact-email">
    						<i class="fa fa-envelope"></i>
    						<h4>Email Address</h4>
    						<a href="mailto:infoname@gmail.com"><p>infoname@gmail.com</p></a>
    						<a href="#"><p>www.yourname.com</p></a>
        				</div>
        			</div>
        		</div> --}}

        		<div class="contact-comment-section">
                    <h3>Contactez-Nous</h3>
                    <p>Nous sommes toujours prêts à résoudre vos problèmes.</p>
                    <div id="form-messages"></div>
					<form id="contact-form" method="post" action="{{route('contact.store')}}">
                        @csrf
						<fieldset>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Nom*</label>
										<input name="name" placeholder="Nom:" id="fname" class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Email*</label>
										<input name="email" placeholder="Email:" id="lname" class="form-control" type="email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Tel*</label>
										<input name="phone" placeholder="Téléphone:" id="email" class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Subject *</label>
										<input name="subject" placeholder="Objet:" id="subject" class="form-control" type="text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Message *</label>
										<textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
									</div>
								</div>
							</div>
							<div class="form-group mb-0">
								<input class="btn-send" type="submit" value="Envoyer le message">
							</div>

						</fieldset>
					</form>
        		</div>
        	</div>
        </div>
        <!-- Contact Section End -->

@endsection
