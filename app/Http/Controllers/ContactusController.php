<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactusRequest;

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
}
