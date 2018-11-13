@php
	$message = nl2br($contact['message'])
@endphp
<div class="message">

	<h3>お問い合わせを以下の内容で受け付けました。</h3>
	<br>
	<p>お名前：{{ $contact['from_name'] }}</p>
	<p>メールアドレス：{{ $contact['email'] }}</p>
	@if(isset($contact['company']))
	<p>会社名・団体名：{{ $contact['company'] }}</p>
	@endif
	<p>お問い合わせの項目：{{ $contact['category'] }}</p>
	<p>お問い合わせの内容：</p>
	<p>{!! $message !!}</p>

</div>