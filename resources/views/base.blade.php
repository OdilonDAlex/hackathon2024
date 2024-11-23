<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/css/footer.css'])
    @yield('csss')
    <title>EDUKA | @yield('title')</title>
</head>
<body>
    @yield('header')

    @yield('body')

    <section class="content">
        @yield('content')
    </section>

    @include('footer')

</body>
</html>