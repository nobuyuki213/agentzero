@extends('layouts.app', ['title' => 'トップページ | AgentZERO [エージェントゼロ]'])

@section('nav')

    @include('commons.nav-menu')

@endsection

@section('slider-images')

    @include('commons.welcome-slider')

@endsection

@section('news')

    @include('commons.news')

@endsection

@section('content')

<section class="contents container">

    <div class="title text-white text-center black py-1 mb-4">
        C O N T E N T S
    </div>

    {{-- Card deck --}}
    <div class="card-deck">

        {{-- イベント企画制作 --}}
        <div class="card rounded-0 z-depth-0 black mb-5 wow fadeIn">

            {{-- Card image --}}
            <div class="view overlay">
                <img class="card-img-top rounded-0 content-img" src="{{ asset('storage/eventseisaku.jpg') }}" alt="Card image cap">
                <a href="">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            {{-- Card header --}}
            <div class="card-header text-white text-center black p-1">
                {{-- Title --}}
                <p class="card-title contents-catch-spacing mb-0">
                    イベント企画制作
                </p>
            </div>

            {{-- Card content --}}
            <div class="card-body white">

                {{-- Text --}}
                <p class="mb-0 text-justify content-letter">
                    イベントの企画・アイデア出しから制作当日の運営、スタッフ派遣までイベントをトータルで総合的にコーディネートします。
                </p>
                {{-- <button type="button" class="btn btn-light-blue btn-md">Read more</button> --}}

            </div>

        </div>
        {{-- Card --}}

        {{-- 会場設営・空間装飾 --}}
        <div class="card rounded-0 z-depth-0 black mx-0 mx-md-2 mb-5 wow fadeIn">

            {{-- Card image --}}
            <div class="view overlay">
                <img class="card-img-top rounded-0 content-img" src="{{ asset('storage/kaijousetsuei.jpg') }}" alt="Card image cap">
                <a href="">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            {{-- Card header --}}
            <div class="card-header text-white text-center black p-1">
                {{-- Title --}}
                <p class="card-title contents-catch-spacing mb-0">
                    会場設営・空間装飾
                </p>
            </div>

            {{-- Card content --}}
            <div class="card-body white">

                {{-- Text --}}
                <p class="mb-0 text-justify content-letter">
                    一般的な業者では難しいクライアント様の希望に応えるオリジナリティのある会場・空間を実現します。
                </p>
                {{-- <button type="button" class="btn btn-light-blue btn-md">Read more</button> --}}

            </div>

        </div>
        {{-- Card --}}

        {{-- クリエイティブ制作 --}}
        <div class="card rounded-0 z-depth-0 black mb-5 wow fadeIn">

            {{-- Card image --}}
            <div class="view overlay">
                <img class="card-img-top rounded-0 content-img" src="{{ asset('storage/creative.png') }}" alt="Card image cap">
                <a href="">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            {{-- Card header --}}
            <div class="card-header text-white text-center black p-1">
                {{-- Title --}}
                <p class="card-title contents-catch-spacing mb-0">
                    クリエイティブ制作
                </p>
            </div>

            {{-- Card content --}}
            <div class="card-body white">

                {{-- Text --}}
                <p class="mb-0 text-justify content-letter">
                    写真撮影、動画撮影・編集、WEB制作、紙媒体編集など各種クリエイティブ業務にワンストップでご対応できます。金額を問わず、まずは一度ご相談下さい。
                </p>
                {{-- <button type="button" class="btn btn-light-blue btn-md">Read more</button> --}}

            </div>

        </div>
        {{-- Card --}}

    </div>
    {{-- Card deck --}}


    {{-- Card deck --}}
    <div class="card-deck">

        {{-- キャスティング --}}
        <div class="card rounded-0 z-depth-0 black mb-5 wow fadeIn">

            {{-- Card image --}}
            <div class="view overlay">
                <img class="card-img-top rounded-0 content-img" src="{{ asset('storage/casting.jpg') }}" alt="Card image cap">
                <a href="">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            {{-- Card header --}}
            <div class="card-header text-white text-center black p-1">
                {{-- Title --}}
                <p class="card-title contents-catch-spacing mb-0">
                    キャスティング
                </p>
            </div>

            {{-- Card content --}}
            <div class="card-body white">

                {{-- Text --}}
                <p class="mb-0 text-justify content-letter">
                    タレント・アーティスト・芸人などジャンルを問わず対応します。ご予算に合わせて柔軟にご提案しますので、お気軽にお声掛けください。
                </p>
                {{-- <button type="button" class="btn btn-light-blue btn-md">Read more</button> --}}

            </div>

        </div>
        {{-- Card --}}

        {{-- 楽曲制作・マネジメント --}}
        <div class="card rounded-0 z-depth-0 black mx-0 mx-md-2 mb-5 wow fadeIn">

            {{-- Card image --}}
            <div class="view overlay">
                <img class="card-img-top rounded-0 content-img" src="{{ asset('storage/music_management.png') }}" alt="Card image cap">
                <a href="">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            {{-- Card header --}}
            <div class="card-header text-white text-center black p-1">
                {{-- Title --}}
                <p class="card-title contents-catch-spacing mb-0">
                    楽曲制作・マネジメント
                </p>
            </div>

            {{-- Card content --}}
            <div class="card-body white">

                {{-- Text --}}
                <p class="mb-0 text-justify content-letter">
                    オリジナル曲・商業音楽・映像音楽・BGMを中心に音楽制作・楽曲制作が可能です。マネジメントするクリエイターによって幅広いジャンルに対応出来ます。
                </p>
                {{-- <button type="button" class="btn btn-light-blue btn-md">Read more</button> --}}

            </div>

        </div>
        {{-- Card --}}

        {{-- 大学生サポート --}}
        <div class="card rounded-0 z-depth-0 black mb-5 wow fadeIn">

            {{-- Card image --}}
            <div class="view overlay">
                <img class="card-img-top rounded-0 content-img" src="{{ asset('storage/university_support.png') }}" alt="Card image cap">
                <a href="">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            {{-- Card header --}}
            <div class="card-header text-white text-center black p-1">
                {{-- Title --}}
                <p class="card-title contents-catch-spacing mb-0">
                    大学生サポート
                </p>
            </div>

            {{-- Card content --}}
            <div class="card-body white">

                {{-- Text --}}
                <p class="mb-0 text-justify content-letter">
                    大学生向けフリーペーパーの発行を中心にサークルや学生団体のサポートを実施しています。 大学生との接点を持ちたいとお考えの際には気軽にご相談下さい。
                </p>
                {{-- <button type="button" class="btn btn-light-blue btn-md">Read more</button> --}}

            </div>

        </div>
        {{-- Card --}}

    </div>
    {{-- Card deck --}}

</section>

@endsection

@section('script')
<script type="text/javascript">
      // 568px以下のときの処理
      $(function() {
          var $win = $(window),
              $main = $('#main'),
              $nav = $('.nav-menu'),
              $navHeight = $nav.outerHeight(),
              $navPos = $nav.offset().top,
              fixedClass = 'is-fixed';
              w = $(window).width();
              x = 568;

          $win.on('load scroll', function() {
            var value = $(this).scrollTop();
            if ( value > $navPos && w <= x) {
              $nav.addClass(fixedClass);
              $main.css('padding-top', $navHeight);
            } else {
              $nav.removeClass(fixedClass);
              $main.css('padding-top', '0');
            }
          });
        });

</script>
<script type="text/javascript">
    // news.blade.php の p.post-message セレクタ内に記述した文が高さ60px以上になった場合、「…」を表示する
    $(function() {
		$('p.post-message').shave(60, { classname:"over-text-hidden", character:"…"}, );
    });
    // スクロール時のアニメーション
    $(function() {
        new WOW().init();
    });
</script>
@endsection