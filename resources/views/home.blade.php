@extends('layouts.app')

@section('content')
<section class="banner">
	<div class="left">
		<h1>Des <span>Travailleurs Qualifiés</span> et des Annonces Pertinantes pour tous vos <span>Besoins</span></h1>
		<div class="search">
			<form action="/search" method="GET">
				<div>
						<i class="fa-solid fa-magnifying-glass"></i><input type="text" name="query" placeholder="Quoi...">
				</div>
				<!-- Add a select element for states -->
				<div class="search-dropdown">
					<label for="state"><i class="fa-solid fa-location-dot"></i> Où...</label>
					<select id="state" name="state">
							<option value=""></option>
							<option value="state2">Kaloum</option>
							<option value="state3">Hamdallaye</option>
							<option value="state4">Matam</option>
							<option value="state5">Kaloum</option>
					<!-- Add more options as needed -->
					</select>
				</div>
				<button type="submit">Recherchez</button>
			</form>
		</div>
	</div>
	<div class="right ">
		<div class="slider-container">
			<img src="{{ asset('img/electrician.jpg') }}" alt="Mechanic">
		</div>
	</div>
</section>
<section class="bonnafaire-container">
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
<section class="why-container">
	<div class="slogan-container">
		<h2>Bonnafaire! la seule <span>Platforme de Rencontre</span> </h2>
	<p>
		Où <span>professionnels</span> vendent leurs talents, les clients accomplissent
			leurs projets <br> et les <span>entreprises</span> font la publicité de leurs activités !
	</p>
	<div class="slogan-raw">
		<div class="box">
			<i class="fa-solid fa-briefcase"></i>
			<a href="/les-services" class="pro">Je Cherche des Professionnels</a>
		</div>
		<div class="box">
			<i class="fa-solid fa-graduation-cap"></i>
			<a href="/competences" class="skill">Vendre mes Compétences</a>
		</div>
		<div class="box">
			<i class="fa-solid fa-bullhorn"></i>
			<a href="#" class="ads">J'ai une Annonce à Poster</a>
		</div>
	</div>
	</div>
</section>
@endsection




