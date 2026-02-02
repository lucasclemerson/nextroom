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

        /* largura */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* trilho */
        ::-webkit-scrollbar-track {
            background: #0f172a; /* slate-900 */
        }

        /* barra */
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #3b82f6, #1d4ed8);
            border-radius: 10px;
        }

        /* hover */
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #60a5fa, #2563eb);
        }

        /* Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: #3b82f6 #0f172a;
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
