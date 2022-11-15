<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no, address=no, email=no">
        <title>Laravelチュートリアル</title>
        <meta name="keywords" content="">
        <meta name="description" content="">

        <!--CDN-->

        <!--CSS-->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <div class="wrapper header-color">
            <div class="container flex-between">
                <div class="header-left">
                    <h1>Laravelチュートリアル</h1>
                </div>

                <div class="header-right">
                    <nav class="nav-list">
                        <li class="nav-list-item">メニュー1</li>
                        <li class="nav-list-item">メニュー2</li>
                        <li class="nav-list-item">メニュー3</li>
                    </div>
                </div>
            </div>
        </div>

        @yield('main')

    </body>
</html>
