@extends('layouts.makesoft')

@section('title', 'Acesso à Planilha de Producao')

@section('content')
    <div class="max-w-md mx-auto mt-20 p-6 bg-white border rounded shadow">
        <h2 class="text-2xl font-bold text-center text-[#0d214f] mb-4">Acesso Restrito</h2>

        @if ($erro)
            <p class="text-red-500 text-center mb-4">{{ $erro }}</p>
        @endif

        <form method="POST" action="/producao" class="flex flex-col gap-4">
            @csrf
            <input type="password" name="senha" placeholder="Digite a senha"
                   class="border px-4 py-2 rounded" required>
            <button type="submit"
                    class="bg-[#2dd4bf] text-white py-2 px-4 rounded hover:bg-[#1877f2] transition">
                Entrar
            </button>
        </form>
    </div>
@endsection
