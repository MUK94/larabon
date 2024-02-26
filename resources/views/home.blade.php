@extends('layouts.app')
<title>{{ $title }} | Bonnafaire </title>
@section('content')
<section class="banner-section">
	<div class="content-layout banner">
		<div class="left">
			<h1>Des <span>Travailleurs Qualifiés</span> et des Annonces Pertinantes pour tous vos <span>Besoins</span></h1>
			@include('inc.search')
		</div>
		<div class="right-banner ">
			<img src="{{ asset('img/worker-6.webp') }}" alt="Travailleur">
		</div>
	</div>
</section>
<section class="bonnafaire-container content-layout">
	<div class="title">
		<h2>Pourquoi <span>Bonnafaire?</span></h2>
		<p>Il n'a jamais été facile de trouver le professionnel approprié pour accomplir votre travail</p>
	</div>
	<div class="raw">
		<div class="box">
			<i class="fa-solid fa-certificate"></i>
			<h3>Meilleure Qualité</h3>
			<p>Avec la meilleure qualité et des professionnels qualifiés à votre disposition.</p>
		</div>
		<div class="box">
			<i class="fa-solid fa-comment-dots"></i>
			<h3>Communication Rapide</h3>
			<p>Facilitant l'echange entre clients et professionnels grâce à notre chat app.</p>
		</div>
		<div class="box">
			<i class="fa-solid fa-credit-card"></i>
			<h3>Payment Garanti</h3>
			<p>Paiement facile, pratique, sécurisé, garanti et rapide.</p>
		</div>
		<div class="box">
			<i class="fa-solid fa-headset"></i>
			<h3>24/7 Support</h3>
			<p>Une équipe disponible 24/7 pour fournir une assistance rapide et efficace.</p>
		</div>
	</div>
</section>
<section class="recommended-container content-layout">
	<div class="title"><h2>Les plus <span>Recommandés</span></h2></div>
	<div class="container">
		@foreach ($services as $service)
			<div class="card">
				<div>
					<div class="image">
						<img src="{{ asset('storage/'.$service->cover_image) }}" alt="" srcset="">
					</div>
					<div class="detail">
						<a href="/categories/{{ $service->category->slug }}"><span class="cat"> {{ $service->category->name }}</span></a>
						<h3><a href="{{ route('serviceListings.detail', ['slug'=>$service->slug]) }}">{{ $service->title }}</a></h3>
						<div class="raw">
							<div class="owner">
								<img src="{{ asset('img/user.png') }}" alt="">
								<span>{{ explode(" ", $service->user->name)[0] }}</span>
							</div>
							<div class="review">
								<i class="fa-solid fa-star"></i><span> 5.0 (9 reviews)</span>
							</div>
						</div>
						<div class="price">
							<button href="#">A partir de <span>{{ $service->price }} FG</span></button>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>

	</div>
	<div class="btn">
		<a href="/services">Voir Plus <i class="fa-solid fa-circle-arrow-right"></i></a>
	</div>
</section>
<section class="why-container">
	<div class="slogan-container content-layout">
		<div class="title">
			<h2>Bonnafaire! la seule <span>Platforme de Rencontre</span> </h2>
		</div>
	<p>
		Où <span>professionnels</span> vendent leurs talents, les clients accomplissent
			leurs projets.
	</p>
	<div class="slogan-raw">
		<div class="box">
			<i class="fa-solid fa-briefcase"></i>
			<a href="/services" class="pro">Je Cherche des Professionnels</a>
		</div>
		<div class="box">
			<i class="fa-solid fa-graduation-cap"></i>
			<a href="/add-service" class="skill">Vendre mes Services</a>
		</div>
		{{-- <div class="box">
			<i class="fa-solid fa-bullhorn"></i>
			<a href="#" class="ads">J'ai une Annonce à Poster</a>
		</div> --}}
	</div>
	</div>
</section>

<section class="category-container content-layout">
	<div class="title"><h2>Naviguez par <span>Catégorie</span></h2></div>
	<div class="container">
		@foreach ($categories as $category)
			@if ($category->services->count() !== 0)
				<a href="/categories/{{ $category->slug }}" class="box">
					<p>
							<i class="fa-solid fa-hashtag"></i>
							<span>{{ $category->services->count() }}</span> {{ $category->services->count() == 1 ? 'service' : 'services' }}
					</p>
					<h3>{{ $category->name }}</h3>
				</a>
			@endif
		@endforeach

	</div>
</section>
<section class="about-container content-layout">
	<div class="title"><h2>Qui Sommes <span>Nous</span>?</h2></div>
	@include('inc.aboutSection')
	<div class="btn">
		<a href="/a-propos">Lire Plus <i class="fa-solid fa-circle-arrow-right"></i></a>
	</div>
</section>
@endsection




