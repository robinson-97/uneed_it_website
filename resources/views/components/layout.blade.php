<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNEED-IT</title>
{{--    <link rel="stylesheet" href="{{ asset('css/home.css') }}">--}}
    <meta name="description" content="Your one-stop solution for all your IT needs.">
    <meta name="keywords" content="IT, repair, services, phones, laptops, PCs">
    @vite(['resources/css/home.css'])
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <img src="images/logo.png" alt="UNEED-IT Logo">
        </div>
        <nav class="nav">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/nieuws') }}">Nieuws</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="{{ url('/aanvraag') }}">Aanvraag doen</a></li>
                <li><a href="{{ url('/faq') }}">FAQ</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
    {{$slot}}
</main>
<footer>
    <div class="container">
        <p>&copy; 2024 UNEED-IT. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
