<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    @yield('css')
    @yield('symbol')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/index.js') }}" defer></script>
    <script>
        var scrollPosition;
        var STORAGE_KEY = "scrollY";


        function saveScrollPosition() {
            scrollPosition = window.pageYOffset;
            localStorage.setItem(STORAGE_KEY, scrollPosition);
        }

        window.addEventListener("load", function () {
            scrollPosition = localStorage.getItem(STORAGE_KEY);
            if (scrollPosition !== null) {
                scrollTo(0, scrollPosition);
            }
            window.addEventListener("scroll", saveScrollPosition, false);
        });
    </script>
</head>

<body class="body">
    <div class="wrapper">
        @component('components.header')
        @endcomponent
        <main class="main">
            @yield('main')
        </main>
    </div>
</body>

</html>