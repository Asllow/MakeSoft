@extends('layouts.makesoft')

@section('title', 'Precificador de Pintura')

@section('content')
    <div class="max-w-xl mx-auto px-4 py-10">
        <h1 class="text-2xl font-bold text-[#0d214f] mb-6 text-center">Precificador de Serviço de Pintura</h1>

        <form id="form-pintura" class="space-y-6 bg-white shadow-md rounded-lg p-6 border">

            <!-- Preço da peça -->
            <div>
                <label class="block font-semibold text-gray-700 mb-1">Preço da impressão (R$)</label>
                <input type="number" step="0.01" min="0" id="preco-peca" class="w-full border rounded px-4 py-2"
                       placeholder="Ex: 30.00" required>
            </div>

            <!-- Tamanho da peça -->
            <div>
                <label class="block font-semibold text-gray-700 mb-1">Tamanho da peça</label>
                <div class="flex gap-6 justify-center">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="tamanho" value="grande" id="tamanho-grande" class="w-5 h-5" checked>
                        <span>Grande</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="tamanho" value="medio" id="tamanho-medio" class="w-5 h-5">
                        <span>Médio</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="tamanho" value="pequeno" id="tamanho-pequeno" class="w-5 h-5">
                        <span>Pequeno</span>
                    </label>
                </div>
            </div>

            <!-- Detalhes pequenos -->
            <div>
                <label class="block font-semibold text-gray-700 mb-1">Possui detalhes pequenos?</label>
                <div class="flex gap-6 justify-center">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="detalhes" value="nao" id="detalhes-nao" class="w-5 h-5" checked>
                        <span>Não</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="detalhes" value="sim" id="detalhes-sim" class="w-5 h-5">
                        <span>Sim</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="detalhes" value="muitos" id="detalhes-muitos" class="w-5 h-5">
                        <span>Muitos</span>
                    </label>
                </div>
            </div>

            <!-- Tipo de pintura -->
            <div>
                <label class="block font-semibold text-gray-700 mb-1">Tipo de pintura</label>
                <div class="flex gap-6 justify-center">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="pintura" value="parcial" id="pintura-parcial" class="w-5 h-5" checked>
                        <span>Parcial</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="pintura" value="completa" id="pintura-completa" class="w-5 h-5">
                        <span>Completa</span>
                    </label>
                </div>
            </div>

            <!-- Urgência -->
            <div>
                <label class="block font-semibold text-gray-700 mb-2">Urgência?</label>
                <div class="flex gap-6 justify-center">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="urgencia" value="nao" class="w-5 h-5 text-teal-500" checked>
                        <span>Não</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="urgencia" value="sim" class="w-5 h-5 text-teal-500">
                        <span>Sim</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="urgencia" value="praontem" class="w-5 h-5 text-teal-500">
                        <span>Pra ontem</span>
                    </label>
                </div>
            </div>

            <!-- Adicional extra (porcentagem) -->
            <div>
                <label class="block font-semibold text-gray-700 mb-1">Adicional extra (%)</label>
                <input type="number" id="extra" min="0" step="0.1" class="w-full border rounded px-4 py-2"
                       placeholder="Ex: 20">
            </div>

            <!-- Resultado -->
            <div class="mt-6 text-center">
                <p class="text-lg font-bold text-gray-800">Valor total da pintura:</p>
                <p id="resultado" class="text-2xl text-[#2dd4bf] font-bold mt-2">R$ 0,00</p>
            </div>
        </form>
    </div>

    <script>
        function calcularPreco() {
            const precoBase = parseFloat(document.getElementById('preco-peca').value) || 0;
            const tamanho = document.querySelector('input[name="tamanho"]:checked').value;
            const detalhes = document.querySelector('input[name="detalhes"]:checked').value;
            const pinturaCompleta = document.querySelector('input[name="pintura"]:checked').value === 'completa';
            const urgencia = document.querySelector('input[name="urgencia"]:checked').value;
            const extraPercent = parseFloat(document.getElementById('extra').value) || 0;

            let valor = 0;

            // Baseado no valor da peça
            if (precoBase < 10) valor += precoBase * 0.5;
            else if (precoBase < 30) valor += precoBase * 0.35;
            else if (precoBase < 50) valor += precoBase * 0.22;
            else if (precoBase < 100) valor += precoBase * 0.15;
            else valor += precoBase * (0.1 + (200 - precoBase) / 2000);

            // Base por tamanho
            switch (tamanho) {
                case 'pequeno':
                    valor *= 1.2;
                    break;
                case 'medio':
                    valor *= 1.1;
                    break;
                case 'grande':
                    valor *= 1;
                    break;
            }

            // Detalhes pequenos
            switch (detalhes) {
                case 'nao':
                    valor *= 1;
                    break;
                case 'sim' :
                    valor *= 1.35;
                    break;
                case 'muitos':
                    valor *= 1.9;
                    ;
                    break;
            }

            // Pintura completa
            if (pinturaCompleta) {
                switch (tamanho) {
                    case 'pequeno':
                        valor *= 1.15;
                        break;
                    case 'medio':
                        valor *= 1.3;
                        break;
                    case 'grande':
                        valor *= 1.6;
                        break;
                }
            }
            // Urgência
            switch (urgencia) {
                case 'nao':
                    valor *= 1;
                    break;
                case 'sim' :
                    valor *= 1.4;
                    break;
                case 'praontem':
                    valor *= 2.1;
                    break;
            }

            // Aplicar adicional extra percentual
            if (extraPercent > 0) {
                valor = valor * (1 + (extraPercent / 100));
            }

            // Atualiza resultado
            document.getElementById('resultado').innerText = `R$ ${valor.toFixed(2).replace('.', ',')}`;
        }

        document.getElementById('form-pintura').addEventListener('input', calcularPreco);
    </script>
@endsection
