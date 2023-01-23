<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script scr="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <h1 class="text-center p-2">@yield('title')</h1>
    <main>
        <div class="container d-flex flex-wrap justify-content-around">
            @yield('content')
        </div>
    </main>
</body>
</html>
