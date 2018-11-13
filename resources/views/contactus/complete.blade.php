@extends('layouts.app')

@section('title', 'お問い合わせ受付完了')

@section('stylesheet')

@endsection

@section('content')

<section class="grey lighten-4 py-5">

	<div class="container">

		{{-- Material form contact --}}
		<div class="card rounded-0">

			<h3 class="card-header rounded-0 info-color white-text text-center py-5">
				<i class="far fa-paper-plane fa-2x"></i>
				<strong class="d-block font-weight-bold mt-2">お問い合わせ受付完了</strong>
			</h3>

			{{-- Card content --}}
			<div class="card-body px-lg-5 pt-0">

				<!--Grid row-->
				<div class="row wow fadeIn">
				<!--Grid column-->
					<div class="col-md-12 text-center">

						<h1 class="font-weight-bold mb-0 pt-md-5 pt-5 wow fadeIn">
							お問い合わせ<span class="d-inline-block">ありがとうございました</span>
						</h1>

						<div class=" text-left pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 wow fadeInUp" data-wow-delay="0.4s">
							<p>ご入力いただきましたメールアドレス宛に控えメールを自動返信いたしました。</p>
							<p>この控えメールが届かない場合は、ご入力いただいたメールアドレスに誤りがあるか、インターネット上のなんらかのトラブルの可能性もありますので、お手数ですが弊社までお電話いただくか、もしくは再度お問い合わせいただくようお願い申し上げます。</p>
							<p></p>
							<p>お問い合わせへの回答に関しまして、近日中にメールにてご回答いたします。</p>
						</div>

						<div class="wow fadeInUp" data-wow-delay="0.4s">
							<a href="{{ route('top') }}" class="btn btn-outline-success rounded waves-effect"><i class="fa fa-home left"></i>Topに戻る</a>
						</div>

					</div>
					<!--Grid column-->
				</div>
				<!--Grid row-->

			</div>

		</div>
		{{-- Material form contact --}}

	</div>{{-- container --}}

</section>

@endsection

@section('script')
<script>
	// Animations initialization
	new WOW().init();
</script>
@endsection