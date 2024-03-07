@extends('layouts.app')
<title>{{ $title }} | Bonnafaire </title>
@section('content')
<section class="banner-section">
	<div class="content-layout banner">
		<div class="left">
			<h1>Trouvez le <span>Bon Prestataire</span> pour Répondre à vos <span>Besoins</span></h1>
			@include('inc.search')
		</div>
		<div class="right-banner ">
			<img src="{{ asset('img/worker-6.webp') }}" alt="Travailleur">
		</div>
	</div>
</section>

<section class="why-container">
	<div class="slogan-container content-layout">
		<div class="title">
			<h2>
				Bonnafaire la <span>Première Plateforme</span> qui met en relation les
				<span>Compétences</span>, les professionnels et les particuliers
			</h2>
		</div>
	<p>
		Rêves grands avec la nouvelle plateforme Bonnafaire, libère ton imagination <br>et atteint tous tes objectifs en 1 click.
	</p>
	<div class="slogan-raw">
		<div class="box">
			<i class="fa-solid fa-briefcase"></i>
			<a href="/services" class="pro">Trouvez des professionnels</a>
		</div>
		<div class="box">
			<i class="fa-solid fa-sack-dollar"></i>
			<a href="/add-service" class="skill">Monétiser vos compétences</a>
		</div>
		<div class="box">
			<i class="fa-solid fa-bullhorn"></i>
			<a href="#" class="ads">Deposer une Annonce</a>
		</div>
	</div>
	</div>
</section>

<section class="recommended-container content-layout">
	<div class="title"><h2>Les plus <span>Recommandés</span></h2></div>
	<div class="container">
		@include('inc.recommended')
	</div>

	</div>
	<div class="btn">
		<a href="/services">Voir Plus <i class="fa-solid fa-circle-arrow-right"></i></a>
	</div>
</section>

<section class="bonnafaire-container content-layout">
	@include('inc.howSection')
	
</section>

@endsection




