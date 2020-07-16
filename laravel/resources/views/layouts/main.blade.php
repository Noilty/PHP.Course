<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
</head>
<body>
<div class="container">
    <h1>Меню</h1>
{{--  // че та не работает провайдер  {{ $message }}--}}
    @include('menu.main')

    @yield('content')
    <style src="{{ asset('js/app.js')  }}"></style>
</div>
</body>
</html>
