<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', '勤怠管理アプリ')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <a href="/" class="header_logo">
            <img src="{{ asset('logo.svg') }}" alt="サイトロゴ">
        </a>
        <div class="header_inner">
            @yield('header_inner')
        </div>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>