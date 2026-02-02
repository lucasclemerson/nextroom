<footer class="bg-slate-950 border-t border-slate-800 mt-16">
    <div class="max-w-7xl mx-auto px-6 py-6 text-center text-sm text-gray-400 space-y-2">

        <p>
            © {{ date('Y') }} NextRoom LTD • Desenvolvido por
            <a target="_blank" href="https://github.com/lucasclemerson/nextroom" class="text-blue-400 font-semibold">
                Clemerson Lucas de Oliveira
            </a>
        </p>

        <p class="text-xs text-gray-500">
            PHP {{ phpversion() }} • Laravel {{ app()->version() }}
        </p>
    </div>
</footer>
