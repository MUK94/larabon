@extends('layouts.app')
<title>{{ $title }} | Bonnafaire </title>
@section('content')
	<div class="recommended-container">
		<h2>Tous les Services </h2>
		<div class="searchBar">
			<div class="search">
				<form action="/search" method="GET">
					<div>
							<i class="fa-solid fa-magnifying-glass"></i><input type="text" name="query" placeholder="Quoi...">
					</div>
					<!-- Category Search by -->
					<div class="search-dropdown">
						<select id="state" name="state">
							<option value="">Catégorie</option>
							@foreach($categories as $category)
								<option value="{{ $category->id }}" class="text-gray-900">{{ $category->name }}</option>
							@endforeach
						</select>
					</div>
					<button type="submit">Recherchez</button>
				</form>
			</div>
		</div>
    <div class="container">
        @foreach ($services as $service)
					<div class="card">
						<a href="{{ route('serviceListings.detail', ['slug'=>$service->slug]) }}">
							<div class="image">
								<img src="{{ asset('storage/cover_images/'.$service->cover_image) }}" alt="" srcset="">
							</div>
							<div class="detail">
								<span class="cat"> {{ $service->category->name }}</span>
								<h4>{{ $service->title }}</h4>
								<div class="raw">
									<div class="owner">
										<img src="{{ asset('img/user.png') }}" alt="">
										<span>{{ $service->user->name }}</span>
									</div>
									<div class="review">
										<i class="fa-solid fa-star"></i><span> 5.0 (9 reviews)</span>
									</div>
								</div>
								<div class="price">
									<button href="#">A partir de <span>{{ $service->price }}</span><span class="currency">FG</span></button>
								</div>
							</div>
						</a>
					</div>
        @endforeach
    </div>
</div>

@endsection
