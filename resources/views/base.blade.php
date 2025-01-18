<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>@yield('title', 'Cahier de Charges')</title>
    <title>Document</title>
</head>

<body>
    @include('layout.navbar')

    <main>
        @yield('content')
    </main>

    <footer class="absolute bottom-0 w-full bg-green-800 text-white text-center py-3">
        <p>&copy; {{ date('Y') }} - Cahier de Charges</p>
    </footer>

</body>

</html>