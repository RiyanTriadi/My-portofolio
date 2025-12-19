<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
    @vite('resources/css/app.css')
</head>
<body class="text-olive-100 bg-olive-700">
    @include('components.navbar')
    <main>
        @yield('content')
    </main>
</body>
</html>