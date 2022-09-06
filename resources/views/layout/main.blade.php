<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>{{ $page }}</title>

    @if ($page == 'Article Detail')
        @yield('partial.meta_article')
    @else
        @yield('partial.meta')
    @endif

    @yield('css')





    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/stylesheet/bootstrap.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/stylesheet/style.css') }}">

    <!-- icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/stylesheet/icon-1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/stylesheet/responsive.css') }}">

    <!-- Favicon and touch icons  -->
    <link href="{{ asset('/icon/apple-touch-icon-48-precomposed.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('/icon/apple-touch-icon-32-precomposed.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('/icon/favicon.png" rel="shortcut icon') }}">

    <!-- carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/stylesheet/owl.carousel.min.css') }}">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <style>
        .link a {
            color: #e6c951

        }
        .link a:hover {
            text-decoration-line: underline;
        }
    </style>
</head>

<body>
    <style>
        #walink:hover {
            text-decoration: underline;
        }
    </style>
    <!-- Preloader -->
    {{-- <div class="preloader">
        <div class="clear-loading loading-effect-2">
            <span></span>
        </div>
    </div> --}}

    {{-- HEADER --}}
    @include('partial.head')

    @yield('content')

    <!-- footer -->
    @include('partial.footer')


    {{-- JAVASCRIPT --}}
    @include('partial.js')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TFR9S6GN89"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-TFR9S6GN89');
    </script>
    @yield('js')
</body>

</html>
