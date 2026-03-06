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
        <img src="logo.svg" alt="サイトロゴ">
        </a>
        <div class="header_inner">
        @yield('header_inner')
        </div>
    </header>

    @auth
    <nav>
        <a href="/attendance">打刻</a>
        <a href="/attendance/list">勤怠一覧</a>
        <a href="/stamp_correction_request/list">申請一覧</a>
        <form action="/logout" method="POST" style="display:inline;">
            @csrf
            <button type="submit">ログアウト</button>
        </form>
    </nav>
    @endauth

    <main style="padding: 24px;">
        @yield('content')
    </main>

</body>
</html>