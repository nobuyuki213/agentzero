<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('top');

// お問い合わせフォーム
Route::get('contact', 'ContactusController@index')->name('contact');
// お問い合わせ確認画面
Route::post('contact/confirm', 'ContactusController@confirm')->name('contact.confirm');
// お問い合わせメール送信完了
Route::post('contact/complete', 'ContactusController@complete')->name('contact.complete');
// HTMLメール文確認用
Route::get('contact/mailable/perview', function(){
	return new App\Mail\ContactusNotification([
		'to' => 'john@email.com',
		'to_name' => 'John Bobu',
		'from' => env('MAIL_FROM_ADDRESS'),
		'from_name' => env('MAIL_FROM_NAME'),
		'subject' => sprintf('%s 様、お問い合わせを受付いたしました。', 'John Bobu'),
		'company' => 'John Company',
		'email' => 'john@email.com',
		'category' => '商品について',
		'message' => '商品の中身が違いました',
	], 'to'); // 受信用を確認する場合は、[to]を[from]に変更し、上記URLにアクセス
});