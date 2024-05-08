<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'sans-serif';
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('https://th.bing.com/th/id/R.c6c0427fdcf72c4c9ba4dacaa38777c2?rik=2WpPt9%2b6mf3ewg&riu=http%3a%2f%2fwww.cercledroitetliberte.fr%2fwp-content%2fuploads%2f2017%2f07%2fe455c663e1302293424785ef0691de4e.jpg&ehk=IDvrvGPrFCxIVX1cF%2bnvFKhbm3g9TM1T2PVnTl3hJSQ%3d&risl=&pid=ImgRaw&r=0') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        .button {
            display: inline-block;
            padding: 20px 30px;
            margin: 10px;
            border-radius: 10px;
            background-color: #3b82f6;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }
        .button:hover {
            background-color: #3b82f6;
            color: #FFF;
        }
    </style>
</head>
<body>
<div class="login-register">
    @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}" class="button">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="button">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="button">Register</a>
            @endif
        @endauth
    @endif
</div>
</body>
</html>
