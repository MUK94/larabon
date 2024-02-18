@extends('layouts.app')
<title>{{ $title }} | Bonnafaire </title>
@section('content')
	<div class="listings-container">
		<div class="detail-container">
			<div class="categories">
				@foreach ($categories as $category)
					<div class="cat-box">
						<a href="#">{{ $category->name }}</a>
					</div>
				@endforeach
			</div>
			<div class="raw">
				<div class="detail-col">
					<h2>{{ $service->title }}</h2>
					<div class="info">
						<div class="review">
							<i class="fa-solid fa-star"></i><span> 5.0 (9 reviews)</span>
						</div>
						<div class="price btn">
							<a href="#" class="">A partir de {{ $service->price }} FG</a>
						</div>
					</div>
					<div class="image-box">
						<img src="{{ asset('storage/'.$service->cover_image)  }}" alt="{{ $service->title }}">
					</div>
					<div class="slider-image">
						<div class="slide slide-image">
							<img src="{{ asset('storage/'.$service->cover_image)  }}" alt="{{ $service->title }}">
						</div>
						<div class="slide slide-image">
							<img src="{{ asset('storage/'.$service->cover_image)  }}" alt="{{ $service->title }}">
						</div>
						<div class="slide slide-image">
							<img src="{{ asset('storage/'.$service->cover_image)  }}" alt="{{ $service->title }}">
						</div>
						<div class="slide slide-image">
							<img src="{{ asset('storage/'.$service->cover_image)  }}" alt="{{ $service->title }}">
						</div>
							<!-- silder  buttons and dots -->
							<button aria-label="none" class="slider__btn slider__btn--left">&larr;</button>
							<button aria-label="none" class="slider__btn slider__btn--right">&rarr;</button>
							<div class="dots"></div>
					</div>

					<article>
						{{ $service->description }}
					</article>
					<div class="review-container">
						<h2>Form for reviews</h2>
					</div>
					<div class="similar-services">
						<h2>Similar Services</h2>
					</div>
				</div>
				<div class="detail-sidebar">
					<div class="order-btn btn">
						<a href="#" class="">Ajouter Ce Service</a>
					</div>
					<h2>A propos du Vendeur</h2>
					<div class="bio">
						<div class="owner">
							<img src="{{ asset('img/user.png') }}" alt="">
							<span>{{ $service->user->name }}</span>
						</div>
						<p>{{ $service->author_bio }}</p>
					</div>
					<div class="contact">
						<a href="#"><i class="fa-solid fa-phone"></i> Contactez ce Vendeur</a>
						<a href="#"><i class="fa-solid fa-comment-dots"></i>Envoyez un Message</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
