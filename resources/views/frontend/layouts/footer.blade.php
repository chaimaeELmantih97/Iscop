<!-- start site-footer -->
<footer class="site-footer">
	<div class="upper-footer">
		<div class="container">
			<div class="row display-flex">
				<div class="col-lg-3 col-sm-6 col-sm-6 col-xs-12 order-2">
					<div class="widget about-widget">
						<div class="widget-title">
							<a class="logo" href="javascript:"><img alt src="{{asset('frontend/assets/images/logo.png')}}"></a>
						</div>
						<ul>
							<li>
								<div class="icon">
									<img alt="" class="img-responsive" src="{{asset('frontend/assets/images/icon/call.svg')}}">
								</div>
								<div class="content">
									<p>Call Us:</p>
									<h4>+00 823 468 739</h4>
								</div>
							</li>
							<li>
								<div class="icon">
									<img alt="" class="img-responsive" src="{{asset('frontend/assets/images/icon/envelope-open.svg')}}">
								</div>
								<div class="content">
									<p>Email Us:</p>
									<h4>insut@gmail.com</h4>
								</div>
							</li>
							<li>
								<div class="icon">
									<img alt="" class="img-responsive" src="{{asset('frontend/assets/images/icon/gps.svg')}}">
								</div>
								<div class="content">
									<p>Address:</p>
									<h4>86 Mist Street, USA</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-sm-12 col-xs-12 order-1">
					<div class="contact-widget">
						<div class="display-flex-title">
							<div class="section-title text-center">
								<span>Contactez-Nous</span>
								<h2>Nous sommes toujours prêts à résoudre vos problèmes.</h2>
							</div>
						</div>
						<form class="contact-validation-active" id="contact-form-main" method="post"
							  novalidate="novalidate">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xl-12">
									<div class="form-group">
										<input class="form-control" id="name" name="name" placeholder="Nom*"
											   type="text">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xl-12">
									<div class="form-group">
										<input class="form-control" id="email" name="email" placeholder="Email*"
											   type="email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xl-12">
									<div class="form-group">
										<input class="form-control" id="phone" name="phone" placeholder="Téléphone*"
											   type="text">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xl-12">
									<div class="form-group">
										<div class="form-select">
											<select class="form-control" name="subject">
												<option disabled="disabled" selected="">Objet</option>
												<option style="color: #242424">Subject 1</option>
												<option style="color: #242424">Subject 2</option>
												<option style="color: #242424">Subject 3</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group">
										<div class="fullwidth">
									<textarea class="form-control" id="note" name="note"
											  placeholder="Message..."></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3">
									<div class="form-group">
										<div class="submit-area">
											<button class="submit-btn" type="submit">
												Envoyer
											</button>
											<div id="loader">
												<i class="ti-reload"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix error-handling-messages">
								<div id="success">Thank you</div>
								<div id="error"> Error occurred while sending email. Please try again later.
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-sm-6 col-xs-12 order-3">
					<div class="widget link-widget">
						<div class="widget-title">
							<h3>Our Services</h3>
						</div>
						<ul>
							<li><a href="service-single.html">Architecture</a></li>
							<li><a href="service-single.html">Floor Planing</a></li>
							<li><a href="service-single.html">Kitchen Design</a></li>
							<li><a href="service-single.html">Building Design</a></li>
							<li><a href="service-single.html">Construction</a></li>
							<li><a href="service-single.html">Interior Design</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end container -->
	</div>
	<div class="lower-footer">
		<div class="container">
			<div class="row display-flex">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<p class="copyright">Copyright © 2020. All right reserved.</p>
				</div><!-- /col -->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="social-icons">
						<ul>
							<li><a href="#"><i class="ti-skype"></i></a></li>
							<li><a href="#"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="#"><i class="ti-facebook"></i></a></li>
							<li><a href="#"><i class="ti-linkedin"></i></a></li>
						</ul>
					</div>
				</div><!-- /col -->
			</div>
		</div>
	</div>
</footer>
<!-- end site-footer -->



<!-- All JavaScript files
================================================== -->
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>

<!-- Plugins for this template -->
<script src="{{asset('frontend/assets/js/jquery-plugin-collection.js')}}"></script>

<!-- Custom script for this template -->
<script src="{{asset('frontend/assets/js/script.js')}}"></script>