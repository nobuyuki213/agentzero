<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	/**
	 * [welcome description]
	 * @return [type] [description]
	 * "img-file" = スライダーに表示する画像ファイル
	 * "content_name" = 画像に表示するキャプション
	 * "alt" = 画像ファイルが読み込みできなかった場合の文字
	 */
	public function welcome()
	{
		$sliders = collect([
			// slider1
			["img_file" => "eventseisaku.jpg", "contents_name" => "イベント企画制作", "alt" => "イベント企画制作",],
			// slider2
			["img_file" => "kaijousetsuei.jpg", "contents_name" => "会場設営・空間装飾", "alt" => "会場設営・空間装飾",],
			// slider3
			["img_file" => "creative.png", "contents_name" => "クリエイティブ制作", "alt" => "クリエイティブ制作",],
			// slider4
			["img_file" => "casting.jpg", "contents_name" => "キャスティング", "alt" => "キャスティング",],
			// slider5
			["img_file" => "music_management.png", "contents_name" => "楽曲制作・マネジメント", "alt" => "楽曲制作・マネジメント",],
			// slider6
			["img_file" => "university_support.png", "contents_name" => "大学生サポート", "alt" => "大学生サポート",]
		]);

		$news_list = collect([
			// News1
			[
				"date" => "2019.6.1",
				"type" => "お知らせ",
				"contents" => "サイトをリニューアルしました。"
			]
			// ,// 非表示時は、カンマも含めてコメント表示すること！
			// // News2
			// [
			// 	"date" => "2019.5.18",
			// 	"type" => "イベント",
			// 	"contents" => "イベントを開始しました。"
			// ]
			// ,// 非表示時はカンマも含めてコメント表示すること！
			// // News3
			// [
			// 	"date" => "2019.5.18",
			// 	"type" => "イベント",
			// 	"contents" => "イベントを開始しました。"
			// ]
		]);

		return view('welcome', [
			'sliders' => $sliders,
			'news_list' => $news_list
		]);
	}
}
