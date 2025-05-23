<!DOCTYPE HTML>
<html lang="en">
<head>
    {{-- Title section --}}
    <title>
        @yield('title')
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="is-preload">

    {{-- Wrapper --}}
    <div id="wrapper">

        {{-- Main --}}
        <div id="main">
            <div class="inner">

                {{-- Header --}}
                @include('components.header')

                {{-- Content --}}
                @yield('content')

            </div>
        </div>

        {{-- Sidebar --}}
        @include('components.sidebar')

    </div>

    {{-- Scripts --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/util.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>