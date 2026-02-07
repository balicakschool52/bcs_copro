<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <title>@yield('title', 'Bali Cak Tourism School')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white min-h-screen">
    <x-navbar-section />
    <main class="pt-20 md:pt-20">
        @yield('content')
    </main>
    <x-footer-section />
    @stack('scripts')
</body>

</html>
