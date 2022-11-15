<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('carousel/css/styles.css')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap');

        .csifont {
            font-family: 'Inter', sans-serif;
        }

        .afont {
            font-family: 'Poppins', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Scroller styling */
        .scroller {
            height: 1.2em;
            line-height: 1.2em;
            position: relative;
            overflow: hidden;
            width: 10em;
        }

        .scroller>span {
            position: absolute;
            top: 0;
            animation: slide 8s infinite;
            font-weight: bold;

        }

        @keyframes slide {
            0% {
                top: 0;
            }

            25% {
                top: -1.2em;
            }

            50% {
                top: -2.4em;
            }

            75% {
                top: -3.6em;
            }
        }
    </style>
</head>
<body class="h-screen w-full">
    <div class="sticky top-0 bg-[#F1EBE4] h-20 w-full shadow-2xl
            justify-between flex">
            <div class="navStart w-6/12 px-32 py-1 flex"><img class=""
                    src="./assets/logo.png" alt="" srcset=""></div>
            <div class="navEnd afont items-center w-6/12 flex justify-evenly ">
                <a class="hover:text-[#005260] hover:font-bold" href="#">Home</a>
                <a class="hover:text-[#005260] hover:font-bold" href="#">About
                    us</a>
                <a class="hover:text-[#005260] hover:font-bold" href="#">Events</a>
                <a class="hover:text-[#005260] hover:font-bold" href="#">Gallery</a>
                <a class="hover:text-[#005260] hover:font-bold" href="#">Team</a>
                <a class="hover:text-[#005260] hover:font-bold" href="#">Contact</a>
            </div>
        </div>

        @yield('content')
</body>
</html>
