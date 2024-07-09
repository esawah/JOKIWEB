<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravote</title>
    <!-- Tambahkan link ke CSS Anda -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-gray-100">
    @unless(request()->routeIs('landing'))
        @include('components.navbar')
    @endunless

    <div class="container mx-auto py-6">
        @yield('content')
    </div>
</body>
</html>
