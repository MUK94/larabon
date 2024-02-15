<nav class="navbar">
	<div class="nav-logo">
			{{-- <img src="{{ asset('img/logo.png') }}" alt="Bonnafaire Logo"> --}}
			<a href="/" class="logo"><h1>Bonnafaire</h1></a>
	</div>
	<div class="nav-cat-dropdown">
		<a href="" class="dropdown-link" onclick="event.preventDefault();"><i class="fas fa-list"></i>Catégories <i class="fa-solid fa-caret-down"></i></a>
		<ul class="dropdown-content">

			<li><a href="/services">Tout</a></li>
			@foreach ($categories as $category)
				<li><a href="#">{{ $category->name }}</a></li>
			@endforeach
		</ul>
	</div>
	<div class="nav-container">
		<ul class="nav-links">
				<li><a href="/">Accueil</a></li>
				<li><a href="/a-propos">A Propos</a></li>
				<li><a href="/contact">Contact</a></li>
		</ul>
	</div>
	<div class="nav-user">
		{{-- User Auth --}}
		@auth
			<div class="nav-user-auth nav-cat-dropdown">
				<a href="" class="dropdown-link"  onclick="event.preventDefault();">Mon Profil<i class="fa-solid fa-caret-down"></i></a>
				<ul class="dropdown-content">
					<li><a href="/dashboard">Tableau de bord</a></li>
					<li><a href="/profile">Profil</a></li>
					<li><a href="#">Déconnexion</a></li>
				</ul>
			</div>
		@endauth
		{{-- User Not Auth --}}
		@guest
			<div class="btn-action nav-user-not-auth">
				<a href="/login" class="btn btn-1">Connexion</a>
			</div>
			<div class="btn-action nav-user-not-auth">
				<a href="/register" class="btn btn-1">Inscription</a>
			</div>
		@endguest
		<div class="btn-action">
			<a href="/add-service" class="btn btn-2">Vender vos Compétences</a>
		</div>
	</div>
</nav>
