@extends('layouts.app')
<title>{{ $title }} | Bonnafaire </title>
@section('content')
	<div class="listings-container">
		<div class="about">
			<div class="raw">
				<h1 class="title">A Propos</h1>
				<div class="slogan">
					<p>
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusamus
						fugiat illum perferendis quae voluptatem odit inventore? Optio sed natus eos
						harum eligendi, esse reiciendis, dolore quam dolorum dolores obcaecati.
					</p>
				</div>
			</div>
		</div>
	</div>
	<section class="about-container">
		@include('inc.aboutSection')
		{{-- Our team --}}
	</section>
	<div class="about-container">
		<h2>Notre <span>Equipe</span></h2>
		<div class="slider-section">
			<!-- Slider About-->
		<section id="about" class="myself section">
			<div class="slider">
				<div class="slide">
					<div class="box">
						<div class="image">
							<img src="{{ asset('img/teamate-1.jpg') }}" alt="">
						</div>
						<div class="detail">
							<div class="title">
								<h3>Mouctar Balde</h3>
								<span>CEO & Founder</span>
							</div>
							<div class="social-media">
								<a href="#"><i class="fa-brands fa-facebook"></i></a>
								<a href="#"><i class="fa-brands fa-linkedin"></i></a>
								<a href="#"><i class="fa-brands fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="box">
						<div class="image">
							<img src="{{ asset('img/teamate-2.jpg') }}" alt="">
						</div>
						<div class="detail">
							<div class="title">
								<h3>Mouctar Balde</h3>
								<span>CEO & Founder</span>
							</div>
							<div class="social-media">
								<a href="#"><i class="fa-brands fa-facebook"></i></a>
								<a href="#"><i class="fa-brands fa-linkedin"></i></a>
								<a href="#"><i class="fa-brands fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="box">
						<div class="image">
							<img src="{{ asset('img/teamate-3.jpg') }}" alt="">
						</div>
						<div class="detail">
							<div class="title">
								<h3>Mouctar Balde</h3>
								<span>CEO & Founder</span>
							</div>
							<div class="social-media">
								<a href="#"><i class="fa-brands fa-facebook"></i></a>
								<a href="#"><i class="fa-brands fa-linkedin"></i></a>
								<a href="#"><i class="fa-brands fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="box">
						<div class="image">
							<img src="{{ asset('img/teamate-4.jpg') }}" alt="">
						</div>
						<div class="detail">
							<div class="title">
								<h3>Mouctar Balde</h3>
								<span>CEO & Founder</span>
							</div>
							<div class="social-media">
								<a href="#"><i class="fa-brands fa-facebook"></i></a>
								<a href="#"><i class="fa-brands fa-linkedin"></i></a>
								<a href="#"><i class="fa-brands fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>
					<!-- silder  buttons and dots -->
					<button aria-label="none" class="slider__btn slider__btn--left">&larr;</button>
					<button aria-label="none" class="slider__btn slider__btn--right">&rarr;</button>
					<div class="dots"></div>
			</div>
    </section>

		</div>
	</div>

	</div>
@endsection
