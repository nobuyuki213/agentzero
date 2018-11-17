<div class="container mt-4 px-0 px-sm-3">

    <div class="nav-menu">

        {{-- Card group --}}
        <div class="card-group flex-row">

            {{-- 事業内容 --}}
            <div class="card card-img rounded-0 z-depth-0 border mb-0"
                style="background-image: url({{ asset('storage/businesscontens.png') }});
                       background-repeat: no-repeat;
                       background-size: 20vmin;
                       background-position: center;">

                {{-- Card overlay --}}
                <div class="view overlay rgba-white-strong h-100">
                    <a href="{{ route('company') }}">
                        <div class="mask rgba-black-slight"></div>
                    </a>

                    {{-- Card content --}}
                    <div class="text-center align-items-center h-100 px-2" style="padding:10vmin;">
                        <div>
                            <h6 class="card-title font-weight-bold mb-0" style="font-size:calc(0.4rem + 2.0vmin);">
                                事業内容
                            </h6>
                        </div>
                    </div>
                    {{-- Card content --}}

                </div>

            </div>
            {{-- Card image --}}

            {{-- 会社概要 --}}
            <div class="card card-img rounded-0 z-depth-0 border mb-0"
                style="background-image: url({{ asset('storage/company.png') }});
                       background-repeat: no-repeat;
                       background-size: 20vmin;
                       background-position: center;">

                {{-- Card overlay --}}
                <div class="view overlay rgba-white-strong h-100">
                    <a href="{{ route('company') }}">
                        <div class="mask rgba-black-slight"></div>
                    </a>

                    {{-- Card content --}}
                    <div class="text-center align-items-center h-100 px-2" style="padding:10vmin;">
                        <div>
                            <h6 class="card-title font-weight-bold mb-0" style="font-size:calc(0.4rem + 2.0vmin);">
                                会社概要
                            </h6>
                        </div>
                    </div>
                    {{-- Card content --}}

                </div>

            </div>
            {{-- Card image --}}

            {{-- お問い合わせ --}}
            <div class="card card-img rounded-0 z-depth-0 border mb-0"
                style="background-image: url({{ asset('storage/contact.png') }});
                       background-repeat: no-repeat;
                       background-size: 20vmin;
                       background-position: center;">

                {{-- Card overlay --}}
                <div class="view overlay rgba-white-strong h-100">
                    <a href="{{ route('contact') }}">
                        <div class="mask rgba-black-slight"></div>
                    </a>

                    {{-- Card content --}}
                    <div class="text-center align-items-center h-100 px-2" style="padding:10vmin;">
                        <div>
                            <h6 class="card-title font-weight-bold mb-0" style="font-size:calc(0.4rem + 2.0vmin);">
                                お問い合わせ
                            </h6>
                        </div>
                    </div>
                    {{-- Card content --}}

                </div>

            </div>
            {{-- Card image --}}

        </div>
        {{-- Card group --}}

    </div>

</div>