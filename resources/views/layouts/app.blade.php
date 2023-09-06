<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    <title>@yield('title', 'Produit')</title>
</head>
<body>

<div class="container my-5">
    @yield('content')
</div>

<script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
</body>
</html>
