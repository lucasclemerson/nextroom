@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')

{{-- HERO --}}
<section class="text-center py-24 px-6 bg-gradient-to-b from-slate-900 to-slate-800">
    <h2 class="text-5xl font-bold mb-6">
        Bem-vindo ao <span class="text-blue-400">NextRoom</span>
    </h2>

    <p class="text-lg text-gray-300 mb-10 max-w-2xl mx-auto">
        Transforme sua sala de espera em uma experiência inteligente, organizada e moderna.
    </p>

    <a href="/dashboard"
       class="bg-blue-500 hover:bg-blue-600 px-8 py-3 rounded-xl font-semibold transition">
        Acessar Sistema
    </a>
</section>


{{-- FEATURES --}}
<section class="py-20 px-6 max-w-6xl mx-auto">
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


{{-- CTA --}}
<section class="py-20 text-center bg-slate-800">
    <h3 class="text-3xl font-bold mb-6">
        Pronto para começar?
    </h3>

    <a href="/login"
       class="bg-green-500 hover:bg-green-600 px-8 py-3 rounded-xl font-semibold transition">
        Entrar no sistema
    </a>
</section>

@endsection
