@extends('errors.layouts.base')

@section('title', '404 Not Found')

@section('content')

<section class="grey lighten-4 py-5">

	<div class="container">

		<div class="row">
			<div class="card shadow-sm col-lg-8 mx-auto">
				<div class="card-body">
					<h1 class="my-5 text-center">404 Not Found</h1>
					<div class="section mb-5">
						<p class="text-center small">
							<span class="d-block d-lg-inline">大変申し訳ございません。</span>
							<span>お探しのページは見つかりませんでした。</span>
						</p>
					</div>
					<div class="text-center warning-color p-5 mb-5">
						<div class="wow fadeIn" data-wow-delay="0.4s">
							<i class="far fa-surprise fa-10x"></i>
						</div>
					</div>
					<div class="text-center mb-5">
						{!! link_to('/', 'TOPページへ', ['class' => 'btn btn-outline-warning']) !!}
					</div>
				</div>
			</div>
		</div>

	</div>{{-- container --}}

</section>

@endsection

@section('script')
<script>
	// Animations initialization
	new WOW().init();
</script>
@endsection