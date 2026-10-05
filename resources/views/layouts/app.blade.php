<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'My Laravel App')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav>
        <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/contact">Contact</a>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Web Development 3 Class. All rights reserved.</p>
    </footer>

</body>
</html>