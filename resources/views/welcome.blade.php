<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BARINGO COUNTY FIELD MONITORING SYSTEM</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            background-color: #a66200;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</head>

<body class="font-sans antialiased text-gray-100">
    <header class="bg-green-700 text-white p-4">
        @if (Route::has('login'))
        <nav class="flex justify-end space-x-4">
            @auth
            <a href="{{ url('/dashboard') }}" class="rounded-md px-4 py-2 bg-green-500 hover:bg-yellow-500 transition">
                Dashboard
            </a>
            @else
            <a href="{{ route('login') }}" class="rounded-md px-4 py-2 bg-green-500 hover:bg-yellow-500 transition">
                Log in
            </a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="rounded-md px-4 py-2 bg-green-500 hover:bg-yellow-500 transition">
                Register
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>

    <ul class="flex bg-green-700 p-4 space-x-4 text-white">
        <li><a href="./Home.html" class="hover:bg-yellow-500 transition p-2">Home</a></li>
        <li><a href="#events.html" class="hover:bg-yellow-500 transition p-2">News</a></li>
        <li><a href="#contact.html" class="hover:bg-yellow-500 transition p-2">Contact</a></li>
        <li><a href="#about" class="hover:bg-yellow-500 transition p-2">About</a></li>
    </ul>

    <div class="text-center p-8">
        <p class="text-4xl text-white">Welcome to:</p>
        <h1 class="text-6xl font-bold text-green-500">BARINGO COUNTY MONITORING SYSTEM</h1>
        <hr class="border-t-2 border-white my-4">
        <p class="text-4xl font-bold text-white">Transforming lives <br> Restoring Hope</p>
        <p class="text-lg text-white mt-4">Our common goal is to promote the principle of good governance through legislation, <br>
            oversight, and representation to reflect the interests, welfare, and aspirations of the people of Baringo.</p>
    </div>

    <div class="text-center mt-8">
        <a href="{{ route('register') }}" class="inline-block bg-green-500 text-white px-6 py-3 rounded-full text-2xl hover:bg-yellow-500 transition">Click to Get Started</a>
    </div>
</body>

</html>