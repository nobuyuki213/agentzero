@extends('layouts.app')

@section('title', 'エージェントゼロ')

@section('content')

@include('commons.nav-menu')

<section class="contents container" style="margin-top: 0px;">

    <div class="title text-white text-center black py-1 my-4">
        C O N T E N T S
    </div>

    <!-- Card deck -->
    <div class="card-deck">

        <!-- Card -->
        <div class="card rounded-0 border border-dark mb-5">

            <!--Card image-->
            <div class="view overlay">
                <img class="card-img-top rounded-0" src="{{ asset('storage/eventseisaku.jpg') }}" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!--Card header-->
            <div class="card-header text-white text-center black p-1">
                <!--Title-->
                <p class="card-title contents-spacing mb-0">
                    イベント企画制作
                </p>
            </div>

            <!--Card content-->
            <div class="card-body">

                <!--Text-->
                <p class="mb-0 text-justify small" style="letter-spacing:0.15em;">
                    イベントの企画・アイデア出しから制作当日の運営、スタッフ派遣までイベントをトータルで総合的にコーディネートします。
                </p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                {{-- <button type="button" class="btn btn-light-blue btn-md">Read more</button> --}}

            </div>

        </div>
        <!-- Card -->

        <!-- Card -->
        <div class="card rounded-0 border border-dark mb-5 mx-0 mx-sm-2">

            <!--Card image-->
            <div class="view overlay">
                <img class="card-img-top rounded-0" src="{{ asset('storage/casting.jpg') }}" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!--Card header-->
            <div class="card-header text-white text-center black p-1">
                <!--Title-->
                <p class="card-title contents-spacing mb-0">
                    キャスティング
                </p>
            </div>

            <!--Card content-->
            <div class="card-body">

                <!--Text-->
                <p class="mb-0 text-justify small" style="letter-spacing:0.15em;">
                    タレント・アーティスト・芸人などジャンルを問わず対応します。ご予算に合わせて柔軟にご提案しますので、お気軽にお声掛けください。
                </p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                {{-- <button type="button" class="btn btn-light-blue btn-md">Read more</button> --}}

            </div>

        </div>
        <!-- Card -->

        <!-- Card -->
        <div class="card rounded-0 border border-dark mb-5">

            <!--Card image-->
            <div class="view overlay">
                <img class="card-img-top rounded-0" src="{{ asset('storage/kaijousetsuei.jpg') }}" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!--Card header-->
            <div class="card-header text-white text-center black p-1">
                <!--Title-->
                <p class="card-title contents-spacing mb-0">
                    会場設営・空間装飾
                </p>
            </div>

            <!--Card content-->
            <div class="card-body">

                <!--Text-->
                <p class="mb-0 text-justify small" style="letter-spacing:0.15em;">
                    ここに説明が入ります。ここに説明が入ります。
                </p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                {{-- <button type="button" class="btn btn-light-blue btn-md">Read more</button> --}}

            </div>

        </div>
        <!-- Card -->

    </div>
    <!-- Card deck -->


    <!-- Card deck -->
    <div class="card-deck">

        <!-- Card -->
        <div class="card rounded-0 border border-dark mb-5">

            <!--Card image-->
            <div class="view overlay">
                <img class="card-img-top rounded-0" src="{{ asset('storage/glamorous.png') }}" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!--Card header-->
            <div class="card-header text-white text-center black p-1">
                <!--Title-->
                <p class="card-title contents-spacing mb-0">
                    Glamorous Outdoors
                </p>
            </div>

            <!--Card content-->
            <div class="card-body">

                <!--Text-->
                <p class="mb-0 text-justify small" style="letter-spacing:0.15em;">
                    アウトドアで魅力的な空間を創造します。什器のレンタルから空間のプロデュース、本格BQQなどのコンテンツも提供します。
                </p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                {{-- <button type="button" class="btn btn-light-blue btn-md">Read more</button> --}}

            </div>

        </div>
        <!-- Card -->

        <!-- Card -->
        <div class="card rounded-0 border border-dark mb-5 mx-0 mx-sm-2">

            <!--Card image-->
            <div class="view overlay">
                <img class="card-img-top rounded-0" src="{{ asset('storage/teafume.png') }}" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!--Card header-->
            <div class="card-header text-white text-center black p-1">
                <!--Title-->
                <p class="card-title contents-spacing mb-0">
                    茶道ユニット 茶香
                </p>
            </div>

            <!--Card content-->
            <div class="card-body">

                <!--Text-->
                <p class="mb-0 text-justify small" style="letter-spacing:0.15em;">
                    新しい茶の世界を切り拓く2人組茶道ユニット。移動式茶室と巨大なトランクをトレードマークに今日も日本全国を巡ります。
                </p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                {{-- <button type="button" class="btn btn-light-blue btn-md">Read more</button> --}}

            </div>

        </div>
        <!-- Card -->

        <!-- Card -->
        <div class="card rounded-0 border border-dark mb-5">

            <!--Card image-->
            <div class="view overlay">
                <img class="card-img-top rounded-0" src="{{ asset('storage/3x3イメージ.jpg') }}" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!--Card header-->
            <div class="card-header text-white text-center black p-1">
                <!--Title-->
                <p class="card-title contents-spacing mb-0">
                    Hooper's Park
                </p>
            </div>

            <!--Card content-->
            <div class="card-body">

                <!--Text-->
                <p class="mb-0 text-justify small" style="letter-spacing:0.15em;">
                    「広島の新しいバスケ文化を想像する」をテーマに、ストリート要素を盛り込んだ非常にエンタメ性が高いイベントです。
                </p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                {{-- <button type="button" class="btn btn-light-blue btn-md">Read more</button> --}}

            </div>

        </div>
        <!-- Card -->

    </div>
    <!-- Card deck -->

</section>

@endsection

@section('script')
<script>
      // 568px以下のときの処理
      $(function() {
          var $win = $(window),
              $main = $('.contents'),
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
              $main.css('margin-top', $navHeight + 25);
            } else {
              $nav.removeClass(fixedClass);
              $main.css('margin-top', '0');
            }
          });
        });

</script>
@endsection