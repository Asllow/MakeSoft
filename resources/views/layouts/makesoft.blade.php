<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>@yield('title', 'MakeSoft Solutions')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- alpinejs -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.5/dist/cdn.min.js" defer></script>
    <!-- Font Awesome CDN -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-pWip/Sks4OXq4AFlD9rA4s+ppjF7aZjOkGQVUmfFyt1Svkl0z1H1FJhMQF8fJg/X8D23mT8+HbfGlJ2Y1UqLMw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

</head>
<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

<header class="bg-[#2dd4bf] text-[#0d214f] shadow">
    <div class="container mx-auto flex items-center justify-between px-6 py-4 relative">

        <!-- Esquerda: Logo + Nome -->
        <a href="https://api.whatsapp.com/send?phone=5537991154972" target="_blank"
           class="flex items-center space-x-3 select-none hover:text-[#f59e0b] transition font-semibold text-xl drop-shadow-sm z-10">
            <img src="{{ asset('public/img/logomakesoft.png') }}" alt="MakeSoft Logo" class="w-10 h-10"/>
            <span>MakeSoft Solutions</span>
        </a>

        <!-- Botão Mobile -->
        <button id="menuToggle" class="md:hidden z-20 text-3xl focus:outline-none">
            ☰
        </button>

        <!-- Menu Desktop (centralizado) -->
        <nav
            class="absolute left-1/2 transform -translate-x-1/2 hidden md:flex items-center space-x-6 text-[#0d214f] text-base font-medium">
            <a href="{{ route('home') }}" class="hover:text-[#f59e0b] transition">Início</a>
            <a href="{{ route('about') }}" class="hover:text-[#f59e0b] transition">Quem Somos</a>
            <a href="{{ route('projetos.index') }}" class="hover:text-[#f59e0b] transition">Projetos</a>
            <a href="{{ route('catalogo') }}" class="hover:text-[#f59e0b] transition">Catálogo 3D</a>
            <a href="{{ route('catalogo.corte') }}" class="hover:text-[#f59e0b] transition">Corte a Laser</a>
        </nav>

        <!-- Menu Mobile (oculto inicialmente) -->
        <div id="mobileMenu"
             class="md:hidden absolute top-full left-0 w-full bg-[#2dd4bf] text-center hidden flex-col space-y-4 py-4 shadow-lg z-10">
            <a href="{{ route('home') }}" class="block hover:text-[#f59e0b] transition">Início</a>
            <a href="{{ route('about') }}" class="block hover:text-[#f59e0b] transition">Quem Somos</a>
            <a href="{{ route('projetos.index') }}" class="block hover:text-[#f59e0b] transition">Projetos</a>
            <a href="{{ route('catalogo') }}" class="block hover:text-[#f59e0b] transition">Catálogo 3D</a>
            <a href="{{ route('catalogo.corte') }}" class="block hover:text-[#f59e0b] transition">Corte a Laser</a>
        </div>

    </div>
</header>

<!-- Script para toggle do menu mobile -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('menuToggle');
        const menu = document.getElementById('mobileMenu');

        toggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    });
</script>

<main class="flex-grow container mx-auto px-4 py-10 max-w-6xl">
    @yield('content')
</main>

<footer style="background-color: #2dd4bf;" class="text-[#0d214f] py-6">
    <div
        class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6 text-center md:text-left space-y-4 md:space-y-0">

        <div class="flex flex-col items-center md:items-start group cursor-pointer">
            <a href="https://www.google.com/maps/search/?api=1&query=-20.172778,-44.909313" target="_blank"
               class="transition text-inherit group-hover:text-[#f59e0b]">
                Rua Alvares de Azevedo, Nº 400
            </a>
            <a href="https://www.google.com/maps/search/?api=1&query=-20.172778,-44.909313" target="_blank"
               class="transition text-inherit group-hover:text-[#f59e0b]">
                CEP 35503-822, Divinópolis-MG
            </a>
        </div>

        <div class="flex flex-col items-center">
            <p>© 2024 MakeSoft Solutions, Inc</p>
            <p>CNPJ 53.471.409/0001-52</p>
        </div>

        <div class="flex flex-col items-center md:items-end space-y-2" style="min-width: 180px;">
            <div class="flex items-center justify-center space-x-2 w-full">
                <a href="https://www.instagram.com/makesoft_solutions_" target="_blank"
                   class="hover:text-[#f59e0b] transition">
                    @makesoft_solutions_
                </a>
            </div>
            <div class="flex items-center justify-center space-x-2 w-full">
                <a href="https://api.whatsapp.com/send/?phone=5537991154972" target="_blank"
                   class="hover:text-[#f59e0b] transition">
                    (37) 99115-4972
                </a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
