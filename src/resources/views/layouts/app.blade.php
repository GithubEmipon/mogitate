<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Charm&family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    @yield('css')
    </head>

    <body>
    <div class="app">
        <header class="header">
        <h1 class="header__heading">mogitate</h1>
        @yield('link')
        </header>
        <div class="content">
        @yield('content')
        </div>
    </div>
</body>

</html>