@extends('layouts.app')

@section('title', 'お問い合わせ')

@section('stylesheet')

@endsection

@section('content')

<section class="grey lighten-4 py-5">

	<div class="container">

		{{-- Material form contact --}}
		<div class="card rounded-0">

			<h3 class="card-header rounded-0 black white-text text-center py-5">
				<i class="fas fa-envelope fa-2x"></i>
				<strong class="d-block font-weight-bold mt-2">お問い合わせ</strong>
			</h3>

			{{-- Card content --}}
			<div class="card-body px-lg-5 pt-0">

				{{-- Form --}}
				{!! Form::open(['route' => 'contact.confirm',
								'style' => 'color: #1c2a48;']) !!}

					{{-- Name --}}
					<div class="md-form form-group mt-5">
						<i class="far fa-user prefix"></i>
						<input type="text" name="name" value="{{ old('name') }}"
								id="materialContactFormName"
								class="form-control
									{{ empty($errors->has('name')) ? '' : ' is-invalid'}}"
								aria-describedby="nameHelp" required>
						<label for="materialContactFormName">
							お名前(ご担当者様)<span class="badge badge-danger ml-2">必須</span>
						</label>
						<small id="nameHelp" class="form-text text-muted">
							例）山田　太郎
						</small>
						@if($errors->has('name'))
							<div class="invalid-feedback">{{ $errors->first('name')}}</div>
						@endif
					</div>

					{{-- E-mail --}}
					<div class="md-form form-group">
						<i class="far fa-envelope prefix"></i>
						<input type="email" name="email" value="{{ old('email') }}"
								id="materialContactFormEmail"
								class="form-control
									{{ empty($errors->has('email')) ? '' : ' is-invalid'}}"
								aria-describedby="emailHelp" required>
						<label for="materialContactFormEmail">
							メールアドレス<span class="badge badge-danger ml-2">必須</span>
						</label>
						<small id="emailHelp" class="form-text text-muted">
							例）yamada@email.co.jp
						</small>
						@if($errors->has('email'))
							<div class="invalid-feedback">{{ $errors->first('email')}}</div>
						@endif
					</div>

					{{-- Company --}}
					<div class="md-form form-group">
						<i class="far fa-building prefix"></i>
						<input type="text" name="company" value="{{ old('company') }}"
								id="materialContactFormCompany"
								class="form-control
									{{ empty($errors->has('company')) ? '' : ' is-invalid'}}"
								aria-describedby="companyHelp">
						<label for="materialContactFormCompany">
							会社名 団体名
						</label>
						<small id="companyHelp" class="form-text text-muted">
							例）株式会社　山田
						</small>
						@if($errors->has('company'))
							<div class="invalid-feedback">{{ $errors->first('company')}}</div>
						@endif
					</div>

					{{-- Category --}}
					<div class="form-group">
					{!! Html::decode(Form::label('category', 'お問い合わせ項目<span class="badge badge-danger ml-2">必須</span>',
						['class' => 'form-control-label float-left'])) !!}

					{!! Form::select('category',
						['' => '選択してください']+array_pluck($categories, 'type', 'value'), old('category'),
						['required', 'class' => 'browser-default custom-select']) !!}
					</div>

					{{-- Message --}}
					<div class="md-form form-group">
						<i class="far fa-edit prefix"></i>
						<textarea type="text" name="message"
							id="materialContactFormMessage"
							class="form-control md-textarea{{ empty($errors->has('message')) ? '' : ' is-invalid'}}"
							rows="5" required>{{ old('message') }}</textarea>
						<label for="materialContactFormMessage">お問い合わせの内容<span class="badge badge-danger ml-2">必須</span></label>
						@if($errors->has('message'))
							<div class="invalid-feedback">{{ $errors->first('message')}}</div>
						@endif
					</div>

					{{-- Copy --}}
					{{-- <div class="form-check">
						<input type="checkbox" class="form-check-input" id="materialContactFormCopy">
						<label class="form-check-label" for="materialContactFormCopy">Send me a copy of this message</label>
					</div> --}}

					{{-- Send button --}}
					<button class="btn btn-outline-black btn-rounded btn-block btn-lg z-depth-0 my-4 waves-effect" type="submit">
						入力内容の確認画面へ <i class="far fa-check-circle fa-lg"></i>
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