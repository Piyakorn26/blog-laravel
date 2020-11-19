@extends('layouts.main')

@section('content')
<!-- Start About Area -->
<section class="about-area ptb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="about-content" style="padding-top: 50px;">
					<div class="section-title">
						<h7>Service</h7>
						<h2>About Us</h2>
					</div>
					<p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc tinci dunt nec elei fend et tiram.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis egestas ante, sed viverra nunc tincidunt nec nteger nonsed condimntum elit, sit amet feugiat lorem. Proin tempus sagittis velit vitae scelerisque.
						Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc tinci dunt nec elei fend et tiram.
					Business-to-business metrics analytics value proposition funding angel investor entrepreneur alpha ramen equity gamification. Social proof partner network research.</p>
				</div>
				<div style="padding-top: 70px;">
					<a href="#" class="btn btn-primary">Contact</a>
				</div>

				@foreach ($content as $key => $value)
				<div>
					{{ $value }}
				</div>
				@endforeach

				<div class="about-content" style="padding-top: 70px;">
					<div class="section-title">
						<h2><b>Software ?</b></h2>
						<div class="bar"></div>
						<p>We have been meticulously fine tuned for delivering strengh and stability backed by knowledge and superior innovation.<br>
						We have been.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12" style="padding-top: 50px;">
				<div class="about-image">
					<img src="{{asset('public/assets/img/chair.png')}}" alt="image">
				</div>
			</div>
		</div>
		<div class="about-inner-area">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="about-text">
						<img src="{{ asset('public/theme/img/bigdata-analytics/discover-img2.jpg')}}" alt="image">
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="about-text">
						<img src="{{ asset('public/theme/img/bigdata-analytics/discover-img2.jpg')}}" alt="image">
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
					<div class="about-text">
						<img src="{{ asset('public/theme/img/bigdata-analytics/discover-img2.jpg')}}" alt="image">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End About Area -->
<!-- Start Team Area -->
<section class="team-area ptb-80 bg-f9f6f6">
	<div class="container">
		<div class="section-title">
			<h2>Software Development Process</h2>
			<div class="bar"></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</div>
</section>
<!-- End Team Area -->
<!-- Start Software Process Area -->
<section class="about-area ptb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="about-content">
					<div class="section-title">
						<div>
							<h2>1.Software Development Process</h2>
							<p>We have been meticulously fine tuned for delivering strengh and stability backed by knowledge and superior innovation.</p>
						</div>
						<div style="padding-top: 15px;">
							<h2>2.Software Development Process</h2>
							<p>We have been meticulously fine tuned for delivering strengh and stability backed by knowledge and superior innovation.</p>
						</div>
						<div style="padding-top: 15px;">
							<h2>3.Software Development Process</h2>
							<p>We have been meticulously fine tuned for delivering strengh and stability backed by knowledge and superior innovation.</p>
						</div>
						<div style="padding-top: 15px;">
							<h2>4.Software Development Process</h2>
							<p>We have been meticulously fine tuned for delivering strengh and stability backed by knowledge and superior innovation.</p>
						</div>
						<div style="padding-top: 15px;">
							<h2>5.Software Development Process</h2>
							<p>We have been meticulously fine tuned for delivering strengh and stability backed by knowledge and superior innovation.</p>
						</div>
						<div style="padding-top: 15px;">
							<h2>6.Software Development Process</h2>
							<p>We have been meticulously fine tuned for delivering strengh and stability backed by knowledge and superior innovation.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- End Software Process Area -->
<!-- Start Permanent Ser Area -->
<section class="iot-cta-area bg-0f054b" style="padding-top: 25px;">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="cta-iot-img">
					<img src="{{ asset('public/theme/img/cta-shape2.png')}}" class="wow fadeInUp" data-wow-delay="0.6s" alt="image">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="cta-iot-content" style="padding-bottom: 25px;">
					<h3>ASC Permanent Service</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
					<a href="#" class="btn btn-primary">contact</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Permanent Ser Area -->
<!-- Start Project Methodlogy Area -->
<section class="features-area-two ptb-80">
	<div class="container">
		<div class="row h-100 justify-content-center align-items-center">

			<div class="col-lg-6 col-md-12 services-content">
				<div class="section-title">
					<h2>Project Methodlogy</h2>
					<div class="bar"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="row">

					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box">

						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box">

						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box">

						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box">

						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box">

						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box">

						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box">

						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box">

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 services-left-image">
				<img src="{{ asset('public/theme/img/services-left-image/big-monitor.png')}}" class="wow fadeInDown" data-wow-delay="0.6s" alt="big-monitor">
				<img src="{{ asset('public/theme/img/services-left-image/creative.png')}}" class="wow fadeInUp" data-wow-delay="0.6s" alt="creative">
				<img src="{{ asset('public/theme/img/services-left-image/developer.png')}}" class="wow fadeInLeft" data-wow-delay="0.6s" alt="developer">
				<img src="{{ asset('public/theme/img/services-left-image/flower-top.png')}}" class="wow zoomIn" data-wow-delay="0.6s" alt="flower-top">
				<img src="{{ asset('public/theme/img/services-left-image/small-monitor.png')}}" class="wow bounceIn" data-wow-delay="0.6s" alt="small-monitor">
				<img src="{{ asset('public/theme/img/services-left-image/small-top.png')}}" class="wow fadeInDown" data-wow-delay="0.6s" alt="small-top">
				<img src="{{ asset('public/theme/img/services-left-image/table.png')}}" class="wow zoomIn" data-wow-delay="0.6s" alt="table">
				<img src="{{ asset('public/theme/img/services-left-image/target.png')}}" class="wow fadeInUp" data-wow-delay="0.6s" alt="target">
				<img src="{{ asset('public/theme/img/services-left-image/cercle-shape.png')}}" class="bg-image rotateme" alt="shape">
				<img src="{{ asset('public/theme/img/services-left-image/main-pic.png')}}" class="wow fadeInUp" data-wow-delay="0.6s" alt="main-pic">
			</div>
		</div>
	</div>
</section>
<!-- End Project Methodlogy Area -->
<!-- Start What We Do Area -->
<section class="what-we-do-area ptb-80">
	<div class="container">
		<div class="section-title">
			<h2>Our Expertise & Technology Skills</h2>
			<div class="bar"></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="single-what-we-do-box">

					<h3><a href="single-services.html">Our Come Bussiness</a></h3>
					<p>Lorem ipsum dolor sit consectetur, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
					<div class="icon">
						<i class="flaticon-monitor"></i>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="single-what-we-do-box">

					<h3><a href="single-services.html">Our Come Bussiness</a></h3>
					<p>Lorem ipsum dolor sit consectetur, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
					<div class="icon">
						<i class="flaticon-idea"></i>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
				<div class="single-what-we-do-box">

					<h3><a href="single-services.html">Our Come Bussiness</a></h3>
					<p>Lorem ipsum dolor sit consectetur, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
					<div class="icon">
						<i class="flaticon-software"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End What We Do Area -->
<!-- Start Skill Level Area -->
<section class="features-area-two ptb-80">
	<div class="container">
		<div class="row h-100 justify-content-center align-items-center">

			<div class="col-lg-6 col-md-12 services-left-image">
				<img src="{{ asset('public/theme/img/services-left-image/big-monitor.png')}}" class="wow fadeInDown" data-wow-delay="0.6s" alt="big-monitor">
				<img src="{{ asset('public/theme/img/services-left-image/creative.png')}}" class="wow fadeInUp" data-wow-delay="0.6s" alt="creative">
				<img src="{{ asset('public/theme/img/services-left-image/developer.png')}}" class="wow fadeInLeft" data-wow-delay="0.6s" alt="developer">
				<img src="{{ asset('public/theme/img/services-left-image/flower-top.png')}}" class="wow zoomIn" data-wow-delay="0.6s" alt="flower-top">
				<img src="{{ asset('public/theme/img/services-left-image/small-monitor.png')}}" class="wow bounceIn" data-wow-delay="0.6s" alt="small-monitor">
				<img src="{{ asset('public/theme/img/services-left-image/small-top.png')}}" class="wow fadeInDown" data-wow-delay="0.6s" alt="small-top">
				<img src="{{ asset('public/theme/img/services-left-image/table.png')}}" class="wow zoomIn" data-wow-delay="0.6s" alt="table">
				<img src="{{ asset('public/theme/img/services-left-image/target.png')}}" class="wow fadeInUp" data-wow-delay="0.6s" alt="target">
				<img src="{{ asset('public/theme/img/services-left-image/cercle-shape.png')}}" class="bg-image rotateme" alt="shape">
				<img src="{{ asset('public/theme/img/services-left-image/main-pic.png')}}" class="wow fadeInUp" data-wow-delay="0.6s" alt="main-pic">
			</div>
			<div class="col-lg-6 col-md-12 services-content">
				<div class="section-title">
					<h2>Skill Level</h2>
					<div class="bar"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="row">
					{{-- @if (count($users) > 0)
					@foreach ($users as $value)
						<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="box">
							{{ $value['name'] }}
						</div>
					</div>
					@endforeach
				@endif --}}




				</div>
			</div>

		</div>
	</div>
</section>
<!-- End Skill level Area -->
<section>
	<div class="container">
		<div class="section-title">
			<h2>Certification</h2>
			<div class="bar"></div>
			<p>We have been meticulously fine tuned for delivering strengh and stability backed by knowledge and superior innovation.</p>
		</div>
		<div class="row" >
			<div class="form-group col" >
				<img src="{{ asset('public/theme/img/bigdata-analytics/discover-img2.jpg')}}" alt="image">
			</div>
			<div class="col">
				<img src="{{ asset('public/theme/img/bigdata-analytics/discover-img2.jpg')}}" alt="image">
			</div>
			<div class="col">
				<img src="{{ asset('public/theme/img/bigdata-analytics/discover-img2.jpg')}}" alt="image">
			</div>
		</div>
			<div class="row">
				<div class="col" >
					<img src="{{ asset('public/theme/img/bigdata-analytics/discover-img2.jpg')}}" alt="image">
				</div>
				<div class="col">
					<img src="{{ asset('public/theme/img/bigdata-analytics/discover-img2.jpg')}}" alt="image">
				</div>
			</div>
		<div class="contact-cta-box">
					<h3>Have any question about us?</h3>
					<p>Don't hesitate to contact us</p>
					<a href="#" class="btn btn-primary">Contact Us</a>
				</div>

	</div>
</section>
@endsection
