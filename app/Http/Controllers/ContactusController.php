<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
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

}
