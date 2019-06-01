@extends('layouts.app', ['title' => 'お問い合わせ内容の確認 | AgentZERO [エージェントゼロ]'])

@section('stylesheet')

@endsection

@section('content')

<section class="grey lighten-4 py-5">

	<div class="container">

		{{-- Material form contact --}}
		<div class="card rounded-0">

			<h3 class="card-header rounded-0 black white-text text-center py-5">
				<i class="far fa-check-circle fa-2x"></i>
				<strong class="d-block font-weight-bold mt-2">お問い合わせ内容の確認</strong>
			</h3>

			{{-- Card content --}}
			<div class="card-body px-lg-5 pt-0">

				{{-- Form --}}
				{!! Form::open(['route' => 'contact.complete',
								'style' => 'color: #1c2a48;']) !!}

					{{-- Name --}}
					<div class="md-form form-group mt-5">
						<i class="far fa-user prefix"></i>
						<input type="text" name="name" value="{{ $name }}"
								id="materialContactFormName"
								class="form-control" readonly>
						<label for="materialContactFormName">
							お名前(ご担当者様)
						</label>
					</div>

					{{-- E-mail --}}
					<div class="md-form form-group">
						<i class="far fa-envelope prefix"></i>
						<input type="email" name="email" value="{{ $email }}"
								id="materialContactFormEmail"
								class="form-control" readonly>
						<label for="materialContactFormEmail">
							メールアドレス
						</label>
					</div>

					{{-- Company --}}
					<div class="md-form form-group" @if(empty($company))style="opacity:0.3;"@endif>
						<i class="far fa-building prefix"></i>
						<input type="text" name="company" value="{{ $company }}"
								id="materialContactFormCompany"
								class="form-control" readonly>
						<label for="materialContactFormCompany">
							会社名 団体名
						</label>
					</div>

					{{-- Category --}}
					<div class="form-group">
					{!! Html::decode(Form::label('category', 'お問い合わせ項目',
						['class' => 'form-control-label float-left'])) !!}

					{!! Form::select('category',
						[$category => $category], $category,
						['class' => 'browser-default custom-select']) !!}
					</div>

					{{-- Message --}}
					<div class="form-group">
						<label for="materialContactFormMessage">お問い合わせの内容</label>
						<textarea type="text" name="message"
							id="materialContactFormMessage"
							class="form-control md-textarea"
							rows="5" readonly>{{ $message }}</textarea>
					</div>

					{{-- back button --}}
					{{-- name属性、value属性の値を付与しコントローラで「戻る」と「送信」の分岐をさせる --}}
					{!! Html::decode(Form::button('<i class="fas fa-angle-double-left fa-lg"></i> 戻って修正する', [
						'name' => 'action',
						'value' => 'back',
						'class' => 'btn btn-danger rounded-0 z-depth-0 mx-0 waves-effect',
						'type' => 'submit'])) !!}

					{{-- Send button --}}
					<button class="btn btn-outline-black btn-rounded btn-block btn-lg z-depth-0 my-4 waves-effect" type="submit">
						お問い合わせ内容を送信する <i class="far fa-paper-plane fa-lg"></i>
					</button>

				{!! Form::close() !!}
				{{-- Form --}}

			</div>

		</div>
		{{-- Material form contact --}}

	</div>{{-- container --}}

</section>

@endsection

@section('script')
<script>

</script>
@endsection