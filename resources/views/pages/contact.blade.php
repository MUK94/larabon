@extends('layouts.app')
<title>Bonnafaire | {{ $title }}</title>
@section('content')
	<div class="listings-container">
		<div class="contact">
			<div class="raw">
				<h2 class="title">Contactez-Nous!</h1>
				<div class="slogan">
					<p>
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusamus
						fugiat illum perferendis quae voluptatem odit inventore? Optio sed natus eos
						harum eligendi, esse reiciendis, dolore quam dolorum dolores obcaecati.
					</p>
				</div>
			</div>
			<div class="raw form-container">
				<div class="left">
					<h2>Envoyez un Message</h2>
					<form action="" method="">
						<div class="box">
							<label for="name">Nom</label>
							<input type="text" id="name" name="name" placeholder="Ex. Moussa Diallo" required>
						</div>
						<div class="box">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" placeholder="Ex. user@example.com" required>
						</div>
						<div class="box">
							<label for="subject">Objet</label>
							<input type="text" id="subject" name="subject" placeholder="Comment Vendre Ses Competences" required>
						</div>
						<div class="box">
							<label for="message">Message</label>
							<textarea id="message" name="message" required></textarea>
						</div>
						<button type="submit">Envoyez</button>
					</form>
				</div>
				<div class="right">
					<div class="box">
						<i class="fa-solid fa-location-dot"></i>
						<span>Kipe, Centre Emetteur</span>
					</div>
					<div class="box">
						<i class="fa-solid fa-phone"></i>
						<span>+224 621149477</span>
					</div>
					<div class="box">
						<i class="fa-solid fa-envelope"></i>
						<a href="mailto:contact@bonnafaire.com">
							<span>contact@bonnafaire.com</span>
						</a>
				</div>
				<div class="social">
					<h3>Nous Suivre</h3>
					<div class="links">
						<a href="#"><i class="fa-brands fa-facebook"></i></a>
						<a href="#"><i class="fa-brands fa-linkedin"></i></a>
						<a href="#"><i class="fa-brands fa-twitter"></i></a>
						<a href="#"><i class="fa-brands fa-youtube"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
