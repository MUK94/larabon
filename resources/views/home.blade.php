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
<section class="recommended-container">
	<h2>Les plus <span>Recommandés</span></h2>
	<div class="container">
		<div class="card">
			<a href="#">
				<div class="image">
					<img src="{{ asset('img/coder.jpg') }}" alt="" srcset="">
				</div>
				<div class="detail">
					<span class="cat">Informatique</span>
					<h4>Developpement de Siteweb en Python/Django and ReactJS</h4>
					<div class="raw">
						<div class="owner">
							<img src="{{ asset('img/user.png') }}" alt="">
							<span>Aicha Diallo</span>
						</div>
						<div class="review">
							<i class="fa-solid fa-star"></i><span> 5.0 (9 reviews)</span>
						</div>
					</div>
					<div class="price">
						<button href="#">A partir de 15.500.000 <span class="currency">FG</span></button>
					</div>
				</div>
			</a>
		</div>
		<div class="card">
			<a href="#">
				<div class="image">
					<img src="{{ asset('img/designer.jpg') }}" alt="" srcset="">
				</div>
				<div class="detail">
					<span class="cat">Informatique</span>
					<h4>Graphic Design, Posters, Bouquet & Anniversaire</h4>
					<div class="raw">
						<div class="owner">
							<img src="{{ asset('img/user.png') }}" alt="">
							<span>Kamano</span>
						</div>
						<div class="review">
							<i class="fa-solid fa-star"></i><span> 3.0 (4 reviews)</span>
						</div>
					</div>
					<div class="price">
						<button href="#">A partir de 1.200.000 <span class="currency">FG</span></button>
					</div>
				</div>
			</a>
		</div>
		<div class="card">
			<a href="#">
				<div class="image">
					<img src="{{ asset('img/plumber-1.jpg') }}" alt="" srcset="">
				</div>
				<div class="detail">
					<span class="cat">Plumbérie</span>
					<h4>J'offre toute sorte de Service en Plumbérie</h4>
					<div class="raw">
						<div class="owner">
							<img src="{{ asset('img/user.png') }}" alt="">
							<span>Mouctar Balde</span>
						</div>
						<div class="review">
							<i class="fa-solid fa-star"></i><span> 5.0 (9 reviews)</span>
						</div>
					</div>
					<div class="price">
						<button href="#">A partir de 250.000 <span class="currency">FG</span></button>
					</div>
				</div>
			</a>
		</div>
		<div class="card">
			<a href="#">
				<div class="image">
					<img src="{{ asset('img/realstate-1.jpg') }}" alt="" srcset="">
				</div>
				<div class="detail">
					<span class="cat">Immobilier</span>
					<h4>Agent Immobilier de plus de 10 ans d'experience</h4>
					<div class="raw">
						<div class="owner">
							<img src="{{ asset('img/user.png') }}" alt="">
							<span>Laye Conde</span>
						</div>
						<div class="review">
							<i class="fa-solid fa-star"></i><span> 4.5 (9 reviews)</span>
						</div>
					</div>
					<div class="price">
						<button href="#">A partir de 850.000 <span class="currency">FG</span></button>
					</div>
				</div>
			</a>
		</div>
		<div class="card">
			<a href="#">
				<div class="image">
					<img src="{{ asset('img/mechanic.jpg') }}" alt="" srcset="">
				</div>
				<div class="detail">
					<span class="cat">Mecanique</span>
					<h4>Réparation de voiture Electrique Neuve et d'Occasion</h4>
					<div class="raw">
						<div class="owner">
							<img src="{{ asset('img/user.png') }}" alt="">
							<span>Aicha Diallo</span>
						</div>
						<div class="review">
							<i class="fa-solid fa-star"></i><span> 5.0 (9 reviews)</span>
						</div>
					</div>
					<div class="price">
						<button href="#">A partir de 150.000 <span class="currency">FG</span></button>
					</div>
				</div>
			</a>
		</div>
		<div class="card">
			<a href="#">
				<div class="image">
					<img src="{{ asset('img/beauty-1.jpg') }}" alt="" srcset="">
				</div>
				<div class="detail">
					<span class="cat">Beauté</span>
					<h4>Prendre soin de vous c'est avec Nous</h4>
					<div class="raw">
						<div class="owner">
							<img src="{{ asset('img/user.png') }}" alt="">
							<span>Kamano</span>
						</div>
						<div class="review">
							<i class="fa-solid fa-star"></i><span> 3.0 (4 reviews)</span>
						</div>
					</div>
					<div class="price">
						<button href="#">A partir de 25.000 <span class="currency">FG</span></button>
					</div>
				</div>
			</a>
		</div>
		<div class="card">
			<a href="#">
				<div class="image">
					<img src="{{ asset('img/electrician.jpg') }}" alt="" srcset="">
				</div>
				<div class="detail">
					<span class="cat">Electricité</span>
					<h4>Plus de 5 ans d'Expérience dans l'Electricité</h4>
					<div class="raw">
						<div class="owner">
							<img src="{{ asset('img/user.png') }}" alt="">
							<span>Mouctar Balde</span>
						</div>
						<div class="review">
							<i class="fa-solid fa-star"></i><span> 5.0 (9 reviews)</span>
						</div>
					</div>
					<div class="price">
						<button href="#">A partir de 250.000 <span class="currency">FG</span></button>
					</div>
				</div>
			</a>
		</div>
		<div class="card">
			<a href="#">
				<div class="image">
					<img src="{{ 'img/cleaner-1.jpg' }}" alt="" srcset="">
				</div>
				<div class="detail">
					<span class="cat">Nettoyage</span>
					<h4>Des Services de Nettoyage repondant a tout vos Besoins</h4>
					<div class="raw">
						<div class="owner">
							<img src="{{ asset('img/user.png') }}" alt="">
							<span>Laye Conde</span>
						</div>
						<div class="review">
							<i class="fa-solid fa-star"></i><span> 4.5 (9 reviews)</span>
						</div>
					</div>
					<div class="price">
						<button href="#">A partir de 75.000 <span class="currency">FG</span></button>
					</div>
				</div>
			</a>
		</div>

	</div>
	<div class="btn">
		<a href="#">Voir Plus <i class="fa-solid fa-circle-arrow-right"></i></a>
	</div>
</section>
<section class="category-container">
	<h2>Naviguez par <span>Catégorie</span></h2>
	<div class="container">
		<a href="#" class="box">
			<i class="fa-regular fa-building"></i>
			<span>8 services</span>
			<h3>Immobilier</h3>
			<p>Appartement, Villa & Hotel.
			</p>
		</a>
		<a href="#" class="box">
			<i class="fa-solid fa-book"></i>
			<span>8 services</span>
			<h3>Education</h3>
			<p>Professeur, Enseignants & Formateurs.
			</p>
		</a>
		<a href="#" class="box">
			<i class="fa-solid fa-shower"></i>
			<span>8 services</span>
			<h3>Plumbérie</h3>
			<p>Toilette & Cuisine.
			</p>
		</a>
		<a href="#" class="box">
			<i class="fa-solid fa-hammer"></i>
			<span>8 services</span>
			<h3>Menuiserie</h3>
			<p>Meubles & Charpente.
			</p>
		</a>
		<a href="#" class="box">
			<i class="fa-solid fa-paintbrush"></i>
			<span>8 services</span>
			<h3>Beauté</h3>
			<p>Salon de Coiffure & Cosmétique.
			</p>
		</a>
		<a href="#" class="box">
			<i class="fa-solid fa-utensils"></i>
			<span>8 services</span>
			<h3>Restaurant</h3>
			<p>Cafe, Plat locaux & Internationaux.
			</p>
		</a>
		<a href="#" class="box">
			<i class="fa-solid fa-code"></i>
			<span>8 services</span>
			<h3>Informatique</h3>
			<p>Développement de Logiciel & Maintenance.
			</p>
		</a>
		<a href="#" class="box">
			<i class="fa fa-suitcase"></i>
			<span>8 services</span>
			<h3>Mecanique</h3>
			<p>Moto, Voiture & Camion.
			</p>
		</a>
		<a href="#" class="box">
			<i class="fa-solid fa-person-digging"></i>
			<span>8 services</span>
			<h3>Maçonnerie</h3>
			<p>Maison, Etages, BTP.
			</p>
		</a>
		<a href="#" class="box">
			<i class="fa fa-suitcase"></i>
			<span>8 services</span>
			<h3>Emploi</h3>
			<p>Local, International & Coaching.
			</p>
		</a>
		<a href="#" class="box">
			<i class="fa-solid fa-bed"></i>
			<span>8 services</span>
			<h3>Travaux ménagers</h3>
			<p>Nettoyage, Cuisine & Babysitting.
			</p>
		</a>
		<a href="#" class="box">
			<i class="fa-solid fa-shuffle"></i>
			<span>8 services</span>
			<h3>Autres</h3>
			<p>Autre Service de la vie quotidienne.
			</p>
		</a>
	</div>
</section>
<section class="about-container">
	<h2>Qui Sommes <span>Nous</span>?</h2>
	@include('inc.aboutSection')
	<div class="btn">
		<a href="#">Lire Plus <i class="fa-solid fa-circle-arrow-right"></i></a>
	</div>
</section>
@endsection




