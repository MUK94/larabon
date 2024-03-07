@foreach ($services as $service)
	<div class="card">
		<div>
			<div class="image">
				<img src="{{ asset('storage/'.$service->cover_image) }}" alt="" srcset="">
			</div>
			<div class="detail">
				<a href="/categories/{{ $service->category->slug }}"><span class="cat"> {{ $service->category->name }}</span></a>
				<h3><a href="{{ route('serviceListings.detail', ['slug'=>$service->slug]) }}">{{ $service->title }}</a></h3>
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