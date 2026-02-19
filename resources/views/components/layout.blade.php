@props([
    'title' => "Laracasts 2026"
])

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>{{ $title }}</title>
</head>
<body class="bg-gray-800 p-6 max-w-xl mx-auto text-white">
    <nav>
        <a href="/">Home</a>
        <a href="/about">About us</a>
        <a href="/contact">Contact us</a>
        <a href="/quote">Quote</a>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>
</html>
