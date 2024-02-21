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
						<div class="price btn">
							<a href="#" class="">A partir de {{ $service->price }} FG</a>
						</div>
						<div class="review">
							<i class="fa-solid fa-star"></i><span> 5.0 (9 reviews)</span>
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

				</div>
				<div class="detail-sidebar">
					<div class="owner">
						<img src="{{ asset('img/user.png') }}" alt="">
						<div>
							<h2>{{ $service->user->name }}</h2>
							<a href="#"><i class="fa-solid fa-location"></i>{{ $service->address }}</a>
						</div>
					</div>
					<p>{{ $service->author_bio }}</p>
					<div class="contact">
						<a href="{{ 'tel:'.$service->phone_number }}"><i class="fa-solid fa-phone"></i>Appelez</a>
						<a href="#" class="btn"><i class="fa-solid fa-comment-dots"></i>Contactez</a>
					</div>
				</div>
			</div>
			<div class="similar-services">
				<h2>Similar Services</h2>
			</div>
		</div>
	</div>
@endsection
