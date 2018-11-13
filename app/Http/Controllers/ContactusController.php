<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactusRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactusNotification;

class ContactusController extends Controller
{
	/**
	 * [index description] お問い合わせフォーム遷移
	 * @return [type] [description]
	 */
	public function index()
	{
		// お問い合わせ項目を配列で作成
		$categories = [
			['value' => 'イベントについて', 'type' => 'イベントについて'],
			['value' => 'その他', 'type' => 'その他'],
		];

		return view('contactus.index', [
			'categories' => $categories,
		]);
	}

	/**
	 * [confirm description] お問い合わせ確認画面遷移＆バリデーション＆バリデーション前処理
	 * @param  ContactusRequest $request [description]
	 * @return [type]                    [description]
	 */
	public function confirm(ContactusRequest $request)
	{
		// リクエストデータを$data変数に配列で作る
		$data = [
			'name' => $request->name,
			'email' => $request->email,
			'company' => $request->company,
			'category' => $request->category,
			'message' => $request->message,
		];

		return view('contactus.confirm', $data);
	}

	public function complete(ContactusRequest $request)
	{
		// リクエストデータに含まれる[action]を除く
		$input = $request->except('action');
		// リクエストデータに[back]が存在した場合、お問い合わせ入力フォームに戻る
		if($request->action === 'back') {
			return redirect()->action('ContactusController@index')->withInput($input);
		};

		try {
			// お問い合わせした方にメール送信
			Mail::send(new ContactusNotification([
				'to' => $request->email,
				'to_name' => $request->name,
				'from' => env('MAIL_FROM_ADDRESS'),
				'from_name' => env('MAIL_FROM_NAME'),
				'subject' => sprintf('%s 様 お問い合わせを受付いたしました。', $request->name),
				'company' => $request->company,
				'email' => $request->email,
				'category' => $request->category,
				'message' => $request->message,
			], 'to')); // 送信用のviewを使用するため、第2引数に'to'を指定

			// お問い合わせ内容をメール受信
			Mail::send(new ContactusNotification([
				'to' => env('MAIL_FROM_ADDRESS'),
				'to_name' => env('MAIL_FROM_NAME'),
				'from' => $request->email,
				'from_name' => $request->name,
				'subject' => sprintf('%s 様からお問い合わせが届きました。', $request->name),
				'company' => $request->company,
				'email' => $request->email,
				'category' => $request->category,
				'message' => $request->message,
			], 'from')); // 受信用のviewを使用するため、第2引数に'from'を指定

		} catch (Exception $e) {
			return redirect()->back();
		}

		// リロードによるの二重送信防止
		$request->session()->regenerateToken();

		return view('contactus.complete');
	}
}
