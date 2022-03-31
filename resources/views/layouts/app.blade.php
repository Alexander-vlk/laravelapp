<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("style.css") }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <img src="{{ asset('favicon-32x32.png') }}" alt="logo">
    </header>
    @yield('content')
    <footer>
        <h2>2022 год</h2>
    </footer>
</body>
</html>
