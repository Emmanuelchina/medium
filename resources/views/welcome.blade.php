<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div class="container mx-auto flex justify-center items-center">
        <div class="w-11/12">
            <div class="p-8 overflow-hidden">
                <div class="float-left font-serif font-bold text-xl">
                    Medium
                </div>
                @if(Route::has('login'))
                    <div class="float-right">
                        @auth
                            <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
                        @else
                            <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 pr-6">{{ __('Sign In') }}</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="no-underline text-sm font-normal text-teal-800 border-solid border border-green-300 p-2 rounded">{{ __('Get Started') }}</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <div class="p-3">
                <a href="/" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">HOME</a>
                <a href="/" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">ONEZERO</a>
                <a href="/" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">ELEMENTAL</a>
                <a href="/" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">HEATED</a>
                <a href="/" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">TECH</a>
                <a href="/" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">STARTUPS</a>
                <a href="/" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">SELF</a>
                <a href="/" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">POLITICS</a>
                <a href="/" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">HEALTH</a>
                <a href="/" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">DESIGN</a>
                <a href="/" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">HUMAN PARTS</a>
                <a href="/" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">MORE</a>
            </div>
            <div class="bg-green-200 p-3">
                MIDDLE
            </div>
            <div class="bg-yellow-200 p-3">
                BOTTOM
            </div>
        </div>
    </div>
</body>
</html>
