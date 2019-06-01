<section class="top-slider container my-4">

	{{-- Carousel Wrapper --}}
	<div id="carousel-1z" class="carousel slide" data-ride="carousel">

		{{-- Indicators --}}
		<ol class="carousel-indicators">

		@for ($i = 0; $i < $sliders->count(); $i++)

			<li data-target="#carousel-1z" data-slide-to="{{ $i }}" @if ($i == 0) class="active" @endif></li>

		@endfor

		</ol>
		{{-- /.Indicators --}}

		{{-- Slides --}}
		<div class="carousel-inner" role="listbox">

		@foreach ($sliders as $slide)
			{{-- slide --}}
			<div class="carousel-item @if($loop->first)active @endif">
				<div class="view overlay">
					<img class="d-block w-100" src="{{ asset('storage/' . $slide["img_file"]) }}" alt="{{ $slide["alt"] }}">
				</div>

				@empty (!$slide["contents_name"])
					{{-- caption backgraound --}}
					<div class="carousel-caption">
						<div class="caption-back animated fadeInLeft delay-1s">
						</div>
					</div>
					{{-- caption --}}
					<div class="carousel-caption">
						<div class="animated fadeInDown slow delay-1s">
							<h3 class="h3-responsive mb-0">{{ $slide["contents_name"] }}</h3>
						</div>
					</div>
				@endempty

			</div>
			{{-- /slide --}}
		@endforeach

		</div>
		{{-- /.Slides --}}

		{{-- Controls --}}
		<a class="carousel-control-prev" href="#carousel-1z" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel-1z" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		{{-- /.Controls --}}

	</div>
	{{-- /.Carousel Wrapper --}}

</section>
