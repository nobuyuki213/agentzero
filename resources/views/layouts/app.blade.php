<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ $title ?? 'AgentZERO [エージェントゼロ]' }}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset("css/bootstrap.css") }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Add CSS -->
    @yield('stylesheet')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:100,600|Noto+Sans+JP" rel="stylesheet" type="text/css">
    <!-- Add Font -->
    @yield('font')
</head>

<body>

    <div id="wrapper">

        <header id="header">

            @include('commons.navbar')

        </header><!-- /header -->

        @yield('nav')

        <main id="main">

            @yield('slider-images')

            @yield('content')

            @yield('news')

        </main>

        <footer id="footer" class="page-footer font-small black">

            @include('commons.footer')

        </footer>

    </div>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    {{-- jquery.shave --}}
    <script type="text/javascript" src="{{ asset('js/jquery.shave.js') }}"></script>
    <!-- Add script.-->
    @yield('script')
</body>

</html>