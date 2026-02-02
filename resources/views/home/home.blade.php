@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')

{{-- HERO --}}

<section class="relative grid items-center justify-center text-center py-32 bg-cover bg-center"
    style="background-image: url('{{ asset('images/page_home.png') }}')"
>
    {{-- overlay escuro para melhorar leitura --}}
    <div class="absolute inset-0 bg-slate-900/80 backdrop-blur-sm"></div>

    <div class="relative z-10">
        <h2 class="text-5xl font-bold mb-6">
            Bem-vindo ao
            <span class="text-blue-400 inline-flex items-center gap-2">
                NextRoom
                <img src="{{ asset('images/logo.png') }}"
                     alt="NextRoom Logo"
                     class="w-24 h-auto">
            </span>
        </h2>
    
        <p class="text-lg text-gray-300 mb-10 max-w-2xl mx-auto">
            Transforme sua sala de espera em uma experiência inteligente, organizada e moderna.
        </p>
    
        <a href="/dashboard"
            class="bg-blue-500 hover:bg-blue-600 px-8 py-3 rounded-xl font-semibold transition">
            Acessar Sistema
        </a>
    </div>

</section>


{{-- VISUÃO EM TEMPO REAL --}}
<section class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <h3 class="text-3xl font-bold mb-10 text-center">
            Como estamos nesse momento?
        </h3>

        {{-- CARDS --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-slate-800 p-6 rounded-2xl shadow-lg">
                <p class="text-gray-400 text-sm">Total de Acessos</p>
                <h4 class="text-3xl font-bold text-blue-400 mt-2">1.245</h4>
            </div>
            <div class="bg-slate-800 p-6 rounded-2xl shadow-lg">
                <p class="text-gray-400 text-sm">Pessoas na Fila</p>
                <h4 class="text-3xl font-bold text-yellow-400 mt-2">32</h4>
            </div>
            <div class="bg-slate-800 p-6 rounded-2xl shadow-lg">
                <p class="text-gray-400 text-sm">Autoatendimentos</p>
                <h4 class="text-3xl font-bold text-green-400 mt-2">890</h4>
            </div>
            <div class="bg-slate-800 p-6 rounded-2xl shadow-lg">
                <p class="text-gray-400 text-sm">Tempo Médio</p>
                <h4 class="text-3xl font-bold text-purple-400 mt-2">4min</h4>
            </div>
        </div>


        {{-- STATUS SALAS --}}
        <div class="mt-12 bg-slate-800 rounded-2xl p-8 shadow-lg">
            <h4 class="text-xl font-semibold mb-6">Status das Salas</h4>
            <div class="grid md:grid-cols-3 gap-4 text-sm">
                <div class="flex justify-between bg-slate-900 p-4 rounded-lg">
                    <span>Sala 01</span>
                    <span class="text-green-400 font-semibold">Atendendo</span>
                </div>
                <div class="flex justify-between bg-slate-900 p-4 rounded-lg">
                    <span>Sala 02</span>
                    <span class="text-yellow-400 font-semibold">Em Pausa</span>
                </div>
                <div class="flex justify-between bg-slate-900 p-4 rounded-lg">
                    <span>Sala 03</span>
                    <span class="text-red-400 font-semibold">Offline</span>
                </div>
                <div class="flex justify-between bg-slate-900 p-4 rounded-lg">
                    <span>Sala 04</span>
                    <span class="text-yellow-400 font-semibold">Em Pausa</span>
                </div>
                <div class="flex justify-between bg-slate-900 p-4 rounded-lg">
                    <span>Sala 05</span>
                    <span class="text-green-400 font-semibold">Atendendo</span>
                </div>
                <div class="flex justify-between bg-slate-900 p-4 rounded-lg">
                    <span>Sala 06</span>
                    <span class="text-red-400 font-semibold">Offline</span>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- FEATURES --}}
<section class="py-10 px-6 max-w-6xl mx-auto">
    <div class="grid md:grid-cols-3 gap-8">

        <div class="bg-slate-800 p-8 rounded-2xl shadow-lg text-center">
            <h3 class="text-xl font-bold mb-3 text-blue-400">Gestão de Filas</h3>
            <p class="text-gray-300">
                Organize atendimentos e reduza tempo de espera.
            </p>
        </div>

        <div class="bg-slate-800 p-8 rounded-2xl shadow-lg text-center">
            <h3 class="text-xl font-bold mb-3 text-blue-400">Painel em Tempo Real</h3>
            <p class="text-gray-300">
                Acompanhe status das salas e chamados ao vivo.
            </p>
        </div>

        <div class="bg-slate-800 p-8 rounded-2xl shadow-lg text-center">
            <h3 class="text-xl font-bold mb-3 text-blue-400">Experiência Moderna</h3>
            <p class="text-gray-300">
                Interface leve, rápida e responsiva.
            </p>
        </div>

    </div>
</section>
@endsection
