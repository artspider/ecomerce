<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">


</head>

<body class="antialiased bg-gray-50">

    <!-- component -->
    <nav class="flex items-center justify-between flex-wrap bg-white p-6 border-b-2 border-red-300">
        {{-- <img class="mr-6 " src="images/foot-locker-logo-vector.png" width="140" height="140" alt="" srcset=""> --}}
        <h2 class="text-3xl tracking-wider font-bold font-serif mr-6">FootPimp</h2>

        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
                <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto ">
            <div class="text-base font-semibold lg:flex-grow">
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-400 mr-4">
                    Men's
                </a>
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-400 mr-4">
                    Woman's
                </a>
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-400">
                    Kid's
                </a>
            </div>
            <div>

            </div>
        </div>

        <div class=" flex justify-center sm:items-center sm:pt-0 ">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block bg-red-600">
                @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Logg in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </nav>

    {{$slot}}

</body>

</html>