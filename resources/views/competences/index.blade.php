@extends('layouts.app')

@section('content')
<x-guest-layout>
	<div class="w-lg mx-auto mt-8 mb-12">
			<h1 class="text-2xl text-center font-bold mb-4">Vendre Ses Competences</h1>
			<form method="POST" action="{{ route('competences.store') }}" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
					@csrf

					<div class="mb-4">
							<label for="title" class="block mb-1">Titre</label>
							<input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
					</div>


					<div class="mb-4">
						<label for="description" class="block mb-1">Description</label>
						<textarea name="description" id="description" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required></textarea>
					</div>

					<div class="mb-4">
						<label for="author_bio" class="block mb-1">Votre Bref Resume</label>
						<textarea name="author_bio" id="author_bio" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required></textarea>
					</div>

					<div class="mb-4">
							<label for="price" class="block mb-1">Prix: A partir</label>
							<input type="number" name="price" id="price" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
					</div>
					<div class="mb-4">
							<label for="address" class="block mb-1">Addresse</label>
							<input type="text" name="address" id="address" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
					</div>

					<div class="mb-4">
							<label for="phone_number" class="block mb-1">Numero de Telephone</label>
							<input type="tel" name="phone_number" id="phone_number" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
					</div>

					<button type="submit" class="btn bg-blue-500 px-3 py-3 text-white">Enregistrer</button>
			</form>
	</div>
</x-guest-layout>

<div class="recommended-container">
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
						<button href="#">A partir de 5.500.000 <span class="currency">FG</span></button>
					</div>
				</div>
			</a>
		</div
	</div>
</div>

@endsection
