<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUKA | @yield('title')</title>
</head>
<body>
    @yield('header')

    <section class="content">
        @yield('content')
    </section>

    @yield('footer')

</body>
</html>