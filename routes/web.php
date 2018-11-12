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
