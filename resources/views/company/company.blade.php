@extends('layouts.app', ['title' => '会社概要 | AgentZERO [エージェントゼロ]'])

@section('stylesheet')

@endsection

@section('font')
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:700&text=Overview" rel="stylesheet">
@endsection

@section('content')

<div class="heading">

	<div class="jumbotron jumbotron-fluid mb-0"
		style="background: url({{ asset('storage/kaisyagaiyou.jpg') }});
				background-size: cover;">
		<div class="container text-center py-3 py-sm-0">
			<h1 class="heading-log font-weight-bold"
				style="letter-spacing: 0.1rem; font-size:calc(0.3rem + 5.0vmin);">Overview</h1>
			<p class="font-small mb-0">会社概要</p>
		</div>
	</div>

</div>

<section class="grey lighten-4 py-5">

	<div class="container">

		<ul class="list-group font-middle">
			<li class="list-group-item p-0">
				<div class="row mx-0">
					<div class="col-md-3 pt-3 pb-1 py-md-4 px-4">会社名</div>
					<div class="col-md-9 pb-3 py-md-4 px-4 text-muted">株式会社エージェントゼロ</div>
				</div>
			</li>
			<li class="list-group-item p-0">
				<div class="row mx-0">
					<div class="col-md-3 pt-3 pb-1 py-md-4 px-4">代表取締役</div>
					<div class="col-md-9 pb-3 py-md-4 px-4 text-muted">霜津　孝祉</div>
				</div>
			</li>
			<li class="list-group-item p-0">
				<div class="row mx-0">
					<div class="col-md-3 pt-3 pb-1 py-md-4 px-4">住所</div>
					<div class="col-md-9 pb-3 py-md-4 px-4 text-muted">
						<ul class="list-unstyled">
							<li class="mb-2">【本社】 広島県廿日市市峰高２−８−１９</li>
							<li>【東京オフィス】 東京都目黒区五本木２−１５−８−１０１</li>
						</ul>
					</div>
				</div>
			</li>
			<li class="list-group-item p-0">
				<div class="row mx-0">
					<div class="col-md-3 pt-3 pb-1 py-md-4 px-4">事業内容</div>
					<div class="col-md-9 pb-3 py-md-4 px-4 text-muted">
						<ul class="list-unstyled">
							<li class="mb-2">イベントの企画・制作および運営</li>
							<li class="mb-2">タレント・芸人・アーティスト等のキャスティング</li>
							<li class="mb-2">アーティスト等のマネジメント・プロモーション</li>
							<li class="mb-2">楽曲およびオリジナル音源制作</li>
							<li class="mb-2">会場設営および空間装飾</li>
							<li class="mb-2">アウトドア用品のレンタル・総合プロデュース</li>
							<li class="mb-2">各種コミュニティマネジメント</li>
							<li class="mb-2">各種代理店業務</li>
							<li>大学生サポート事業</li>
						</ul>
					</div>
				</div>
			</li>
			{{-- <li class="list-group-item p-0">
				<div class="row mx-0">
					<div class="col-md-3 pt-3 pb-1 py-md-4 px-4">
						主要取引先
						<span class="small d-md-block">（敬称略、五十音順）</span>
					</div>
					<div class="col-md-9 pb-3 py-md-4 px-4 text-muted">株式会社 エージェントゼロ</div>
				</div>
			</li> --}}
		</ul>

	</div>{{-- container --}}

</section>

@endsection

@section('script')
<script>

</script>
@endsection