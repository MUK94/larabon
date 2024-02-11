@extends('layouts.app')
<title>Bonnafaire | {{ $title }}</title>
@section('content')
	<div class="listings-container">
		<div class="about">
			<div class="raw">
				<h1 class="title">A Propos</h1>
				<div class="slogan">
					<p>
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusamus
						fugiat illum perferendis quae voluptatem odit inventore? Optio sed natus eos
						harum eligendi, esse reiciendis, dolore quam dolorum dolores obcaecati.
					</p>
				</div>
			</div>
		</div>
	</div>
	<section class="about-container">
		@include('inc.aboutSection')
		{{-- Our team --}}
	</section>
	<div class="about-container">
		<h3>Notre Equipe</h3>
		<div class="">
	</div>
@endsection
