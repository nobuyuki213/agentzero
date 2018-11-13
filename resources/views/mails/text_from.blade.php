お問い合わせを以下の内容で受け付けました。

お名前：{{ $contact['from_name'] }}
メールアドレス：{{ $contact['email'] }}
@if(isset($contact['company']))
会社名・団体名：{{ $contact['company'] }}
@endif
お問い合わせの項目：{{ $contact['category'] }}
お問い合わせの内容：
{{ $contact['message'] }}