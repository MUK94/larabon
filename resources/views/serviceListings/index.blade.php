@extends('layouts.app')
<title>{{ $title }} | Bonnafaire </title>
@section('content')
	<div class="recommended-container content-layout">
		<div class="title"><h2>Tous les Services </h2></div>
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
			<div>
				<div class="image">
					<img src="{{ asset('storage/'.$service->cover_image) }}" alt="" srcset="">
				</div>
				<div class="detail">
					<a href="/categories/{{ $service->category->slug }}"><span class="cat"> {{ $service->category->name }}</span></a>
					<a href="{{ route('serviceListings.detail', ['slug'=>$service->slug]) }}"><h4>{{ $service->title }}</h4></a>
					<div class="raw">
						<div class="owner">
							<img src="{{ asset('img/user.png') }}" alt="">
							<span>{{ explode(" ", $service->user->name)[0] }}</span>
						</div>
						<div class="review">
							<i class="fa-solid fa-star"></i><span> 5.0 (9 reviews)</span>
						</div>
					</div>
					<div class="price">
						<button href="#">A partir de <span>{{ $service->price }} FG</span></button>
					</div>
				</div>
			</div>
		</div>
        @endforeach
    </div>
</div>
@endsection
