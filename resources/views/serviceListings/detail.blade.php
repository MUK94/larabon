@extends('layouts.app')
	<title>{{ $title }} | Bonnafaire </title>
@section('content')
{{-- {{dd($similar_services)}} --}}
	<div class="listings-container content-layout">
		<div class="detail-container">
			<div class="categories">
				@foreach ($categories as $category)
					<div class="cat-box">
						<a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
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
							<!-- silder  buttons and dots -->
							<button aria-label="none" class="slider__btn slider__btn--left">&larr;</button>
							<button aria-label="none" class="slider__btn slider__btn--right">&rarr;</button>
							<div class="dots"></div>
					</div>
					<article>
						{!! $service->description  !!}
					</article>
					<div class="review-container mt-24">
						<div class="mx-auto mt-24">
							<h3 class="text-xl font-semibold mb-4 mt-8">Reviews</h3>
							<div class="category-list grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
									<div class="relative flex items-center bg-white rounded-lg shadow-md p-4 mb-12">
										<div class="text-lg">
											<a href=""></a>
										</div>
										<div class="ml-auto">
											<button class="dropdown-button bg-gray-200 text-gray-700 px-3 py-2 rounded-full hover:bg-gray-300 focus:outline-none focus:bg-gray-300">
												<i class="fas fa-ellipsis-v"></i>
											</button>
											<ul class="dropdown-menu absolute hidden bg-white border border-gray-200 py-1 rounded-md shadow-lg right-10 top-8">
												<li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Edit</a></li>
												<li>
													<form action="" method="POST" class="inline">
														@csrf
														@method('DELETE')
														<button type="submit" class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-200">Delete</button>
													</form>
												</li>
											</ul>
										</div>
									</div>
						  </div>
							{{-- <p class="text-gray-700">No reviews posted yet.</p> --}}
					  </div>

					  <div class="mx-auto mt-16">
							<h3 class="text-xl font-semibold mb-4 mt-4">Soumettre une Review</h3>
							<form>
								 <div class="mb-4">
									  <label for="review" class="block text-gray-700">Votre Review:</label>
									  <textarea id="review" name="review" rows="4" class="form-textarea mt-1 px-2 pt-2 block w-full border-gray-300 rounded-md border focus:border-blue-500"></textarea>
								 </div>
								 <button type="submit" class="btn bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Envoyez</button>
							</form>
					  </div>

					</div>
					<div class="similar-services recommended-container">
						<h3 class="text-xl font-semibold mb-4 mt-4">Services Similaires</h3>
						<div class="container">
							@if ($similar_services->isEmpty())
								 <p>No service</p>
							@else
								 @foreach ($similar_services as $service)
									  <div class="card">
											<div>
												 <div class="image">
													  <img src="{{ asset('storage/'.$service->cover_image) }}" alt="" srcset="">
												 </div>
												 <div class="detail">
													  <a href="/categories/{{ $service->category->slug }}"><span class="cat"> {{ $service->category->name }}</span></a>
													  <h3 class="mt-4 mb-4"><a href="{{ route('serviceListings.detail', ['slug'=>$service->slug]) }}">{{ $service->title }}</a></h3>
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
							@endif
					  </div>
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

			</div>
		</div>
	</div>



@endsection
