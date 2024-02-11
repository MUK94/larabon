<nav class="navbar">
	<div class="nav-logo">
			{{-- <img src="{{ asset('img/logo.png') }}" alt="Bonnafaire Logo"> --}}
			<a href="/" class="logo"><h1>Bonnafaire</h1></a>
	</div>
	<div class="nav-cat-dropdown">
		<a href="/les-services" class="dropdown-link"><i class="fas fa-list"></i>Catégories</a>
		<ul class="dropdown-content">
			<li><a href="#">Category 1</a></li>
			<li><a href="#">Category 2</a></li>
			<li><a href="#">Category 3</a></li>
			<!-- Add more categories as needed -->
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
				<a href="#" class="dropdown-link">Mon Profile<i class="fa-solid fa-caret-down"></i></a>
				<ul class="dropdown-content">
						<li><a href="#">Tableau de bord</a></li>
						<li><a href="#">Paramètres</a></li>
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
			<a href="/dashboard" class="btn btn-2">Vender Vos Compétences</a>
		</div>
	</div>
</nav>
