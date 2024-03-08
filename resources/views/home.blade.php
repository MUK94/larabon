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

<section class="about-container content-layout">
	<div class="title">
		<h2>Une Nouvelle manière de <span>Collaborer</span></h2>
	</div>
	<div>
		<div class="mission">
			<div class="container">
				<div class="left">
					<h3>Monnayez vos Qualifications</h3>
					<p>Faites bénéficier votre capacité dans un domaine spécifique aux personnes qui ont un besoin précis.
						Vous avez la possibilitée de fournir un service et etre payé en retour.
						Communiquez directement avec les clients qui souhaitent avoir un service que vous etes en mesure de réaliser parce que vous avez le savoir-faire et répondez à cette attente tout en générant du revenu.
						Notre plateforme vous aide a gagner de l’argent.
					</p>
					<div class="btn">
						<a href="/add-service">Rejoindre la Communauté <i class="fa-solid fa-circle-arrow-right"></i></a>
					</div>
				</div>
				<div class="right">
					<img src="{{ asset('img/about-1.jpg') }}" alt="Bonnafaire Team">
				</div>
			</div>
		</div>
		<div class="story">
			<h3>Trouvez le meilleur Professionnel</h3>
			<div class="container">
				<div class="left">
					<div class="video">
						<video width="620" height="340" controls autoplay>
							<source src="{{ asset('img/my-video.mp4') }}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
					</div>
				</div>
				<div class="right">
					<p>
						Vous voulez avoir du travail durant toute l’année ?
						vous souhaitez démontrer l’étendue de votre talent ?
						Avec Bonnafaire vous avez l’assurance d’avoir des revenus réguliers
						avec des clients qui ont toujours besoin qu’un travail de qualité soit fait. <br>
						<b>Alors mettez de la réussite dans ce que vous entreprenez et devenez pionnier dans votre secteur d’activité.</b>
					</p>
					<div class="btn">
						<a href="/services">Trouvez le Meilleur <i class="fa-solid fa-circle-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection




