<section class="news container mb-4">

	<div class="newa-title text-white text-center black py-1 mb-4">
		N E W S
	</div>

	{{-- News一覧 --}}
	<ul class="list-group list-group-flush animated fadeIn slow">

	@foreach ($news_list as $news)

		{{-- News --}}
		<li class="news-group-item list-group-item border-0">
			<div class="news-block">
				<a {{-- href="" title=""  --}}class="news-post-link text-body">
					<div class="post-meta clearfix">
						{{-- 日時 --}}
						<div class="post-date float-left">{{ $news["date"] }}</div>
						<div class="post-category float-right">
							{{-- ジャンル --}}
							<span class="badge badge-dark align-top">{{ $news["type"] }}</span>
						</div>
					</div>
					<p class="post-message pt-3 mb-0">{{ $news["contents"] }}</p>
				</a>
			</div>
		</li>

	@endforeach

	</ul>
	{{-- News一覧 ここまで --}}

</section>