@extends('layouts.makesoft')

@section('title', 'Catálogo 3D')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-[#0d214f]">Catálogo Impressão 3D</h1>

        <!-- Filtros -->
        <form method="GET" class="mb-8 grid gap-4 md:grid-cols-6 text-sm">
            <input type="text" name="search" placeholder="Buscar por nome" value="{{ request('search') }}"
                   class="border rounded px-4 py-2 col-span-2"/>

            <select name="subcategoria" class="border rounded px-4 py-2">
                <option value="">Todas as categorias</option>
                @foreach ($subcategorias as $cat)
                    <option value="{{ $cat }}" @selected(request('subcategoria') == $cat)>{{ $cat }}</option>
                @endforeach
            </select>

            <input type="number" step="0.01" name="min_price" placeholder="Preço mínimo"
                   value="{{ request('min_price') }}"
                   class="border rounded px-4 py-2"/>
            <input type="number" step="0.01" name="max_price" placeholder="Preço máximo"
                   value="{{ request('max_price') }}"
                   class="border rounded px-4 py-2"/>

            <select name="sort" class="border rounded px-4 py-2">
                <option value="">Ordenar por</option>
                <option value="nome" @selected(request('sort') == 'nome')>Nome</option>
                <option value="preco" @selected(request('sort') == 'preco')>Preço</option>
            </select>

            <button type="submit"
                    class="bg-[#2dd4bf] text-white px-6 py-2 rounded hover:bg-[#1877f2] transition">
                Filtrar
            </button>
        </form>

        <!-- Grade de produtos -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($produtos as $produto)
                <div
                    class="bg-white border shadow-sm rounded-lg flex flex-col overflow-hidden hover:shadow-lg transition">
                    <a href="{{ route('produto.show', $produto->id_produto) }}"
                       class="block w-full h-48 bg-gray-100 flex items-center justify-center">
                        <img src="{{ $produto->img_produto }}"
                             alt="{{ $produto->nome_produto }}"
                             class="object-contain h-full"
                             onerror="this.onerror=null; this.src='{{ asset('images/sem-imagem.png') }}';">
                    </a>
                    <div class="p-4 flex-1 flex flex-col justify-between">
                        <div>
                            <a href="{{ route('produto.show', $produto->id_produto) }}">
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">{{ $produto->nome_produto }}</h3>
                            </a>
                            <p class="text-[#2dd4bf] font-bold mb-2">
                                R$ {{ number_format($produto->preco_produto, 2, ',', '.') }}</p>
                        </div>
                        <a href="https://api.whatsapp.com/send?phone=5537991154972&text=Olá, gostaria de um orçamento sobre: {{ urlencode($produto->nome_produto) }}"
                           target="_blank"
                           class="mt-auto inline-block text-sm text-[#2dd4bf] border border-[#2dd4bf] px-4 py-2 rounded hover:bg-[#2dd4bf] hover:text-white transition text-center">
                            Orçar via WhatsApp
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
