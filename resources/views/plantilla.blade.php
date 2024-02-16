<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="container mt-4">
    @include('partials.nav')
    @yield('contenido')
</body>
</html>