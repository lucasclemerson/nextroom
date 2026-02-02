<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NextRoom - @yield('title')</title>

    {{-- Tailwind CDN (rápido pra começar) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-900 text-white">
    @include('home.components.header')
    <main>
        @yield('content')
    </main>
    @include('home.components.footer')
</body>
</html>
