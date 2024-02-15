@extends('layouts.app')
<title>{{ $title }} | Bonnafaire </title>
@section('content')
<x-guest-layout>
	<div class="w-lg mx-auto mt-8 mb-12">
			<h1 class="text-2xl text-center font-bold mb-4">{{ $title }}</h1>
			<form method="POST" action="/services" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
				@csrf

				<div class="mb-4">
						<label for="title" class="block mb-1">Titre</label>
						<input type="text" name="title" id="title" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
				</div>

				<div class="mb-4">
					<label for="category_id" class="block mb-1">Catégorie</label>
					<select name="category_id" id="category_id" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
						<option value="" class="text-gray-500"></option>
						@foreach($categories as $category)
							<option value="{{ $category->id }}" class="text-gray-900">{{ $category->name }}</option>
						@endforeach
					</select>
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

				<div class="mb-4">
					<label for="cover_image" class="block mb-1">Image de Couverture</label>
					<input type="file" name="cover_image" id="cover_image" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
				</div>

				<button type="submit" class="btn bg-blue-500 px-3 py-3 text-white">Enregistrer</button>
			</form>
	</div>
</x-guest-layout>

@endsection
