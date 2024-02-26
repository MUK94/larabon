<div class="search">
	<form action="/services/search" method="GET">
		<div>
			<i class="fa-solid fa-magnifying-glass"></i><input type="text" name="search" placeholder="Quoi...">
		</div>
		<!-- Category Search by -->
		{{-- <div class="search-dropdown">
			<select id="category" name="category">
				<option value="">Catégorie</option>
				@foreach($categories as $category)
					<option value="{{ $category->id }}" class="text-gray-900">{{ $category->name }}</option>
				@endforeach
			</select>
		</div> --}}
		<button type="submit">Recherchez</button>
	</form>
</div>