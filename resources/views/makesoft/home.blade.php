@extends('layouts.makesoft')

@section('title', 'MakeSoft Solutions - Home')

@section('content')
    <div class="max-w-5xl mx-auto px-4 py-12">

        <!-- Header / Hero -->
        <section class="text-center mb-16">
            <h1 class="text-4xl font-extrabold text-[#0d214f] mb-4">
                Transformamos suas ideias em objetos reais
            </h1>
            <p class="text-lg text-[#0d214f] mb-8">
                Impressão 3D e corte a laser com alta precisão e personalização
            </p>
            <div class="flex flex-col md:flex-row justify-center items-center gap-4 my-8 mb-20">
                <a href="https://api.whatsapp.com/send?phone=5537991154972&text=Ol%C3%A1%2C%20gostaria%20de%20um%20or%C3%A7amento"
                   target="_blank"
                   class="border-2 border-[#2dd4bf] text-[#0d214f] hover:bg-[#2dd4bf] hover:text-white font-semibold py-3 px-6 rounded-lg transition text-center">
                    Solicitar Orçamento
                </a>
                <a href="#numeros"
                   class="border-2 border-[#f59e0b] text-[#0d214f] hover:bg-[#f59e0b] hover:text-white font-semibold py-3 px-6 rounded-lg transition text-center">
                    Conheça nossos serviços
                </a>

                <a href="#destaque"
                   class="border-2 border-[#8b5cf6] text-[#0d214f] hover:bg-[#8b5cf6] hover:text-white font-semibold py-3 px-6 rounded-lg transition text-center">
                    Ver Destaque
                </a>
            </div>

            <!-- Sobre -->
            <section class="mb-16 text-[#2d1a4c]">
                <div class="max-w-4xl mx-auto text-left">
                    <h2 class="text-2xl text-left font-semibold mb-3 border-b-4 border-[#8b5cf6] inline-block pb-1">Quem
                        Somos</h2>
                </div>
                <p class="mb-6 text-lg leading-relaxed text-center text-[#0d214f] max-w-3xl mx-auto">
                    A MakeSoft Solutions é uma empresa júnior dedicada a entregar soluções inovadoras
                    <br>
                    e personalizadas com impressão 3D e corte a laser. Atuamos com excelência,
                    <br>
                    sempre focados na qualidade, personalização e satisfação do cliente.
                </p>
                <div class="max-w-4xl mx-auto text-left">
                    <h2 class="text-2xl font-semibold mb-3 border-b-4 border-[#8b5cf6] inline-block">Nossa Equipe</h2>
                </div>
                <p class="mb-2 text-lg leading-relaxed text-center text-[#0d214f] max-w-3xl mx-auto">
                    Contamos com profissionais capacitados nas áreas de engenharia e design, que trabalham
                    <br>
                    de forma integrada para oferecer os melhores serviços e produtos aos nossos clientes.
                </p>
            </section>

            <!-- Números chave -->
            <section class="mb-10 flex flex-col md:flex-row justify-around gap-6 text-center text-[#0d214f]"
                     id="numeros">
                <div class="flex-1">
                    <h3 class="text-3xl font-bold text-[#0d214f]">1300+</h3>
                    <p>Projetos Executados</p>
                </div>
                <div class="flex-1">
                    <h3 class="text-3xl font-bold text-[#0d214f]">450+</h3>
                    <p>Clientes Atendidos</p>
                </div>
                <div class="flex-1">
                    <h3 class="text-3xl font-bold text-[#0d214f]">99%</h3>
                    <p>CSAT (Satisfação do Cliente)</p>
                </div>
            </section>

            <!-- Navegação / Botões -->
            <section id="services" class="mb-16 flex flex-col md:flex-row justify-around gap-6">
                <a href="{{ route('projetos.index') }}"
                   class="flex-1 bg-white border-2 border-[#2dd4bf] rounded-lg py-8 text-center hover:bg-[#2dd4bf] hover:text-white transition font-semibold">
                    Projetos
                </a>
                <a href="{{ route('catalogo') }}"
                   class="flex-1 bg-white border-2 border-[#f59e0b] rounded-lg py-8 text-center hover:bg-[#f59e0b] hover:text-white transition font-semibold">
                    Catálogo Impressão 3D
                </a>
                <a href="{{ route('catalogo.corte') }}"
                   class="flex-1 bg-white border-2 border-[#8b5cf6] rounded-lg py-8 text-center hover:bg-[#8b5cf6] hover:text-white transition font-semibold">
                    Catálogo Corte a Laser
                </a>
            </section>

            <!-- Seção Por que escolher a MakeSoft -->
            <section class="py-2 text-center px-6 mb-20" id="diferenciais">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-[#0d214f] mb-10">Por que escolher a MakeSoft?</h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-[#0d214f]">

                        <div class="p-6 border border-[#2dd4bf] rounded-lg">
                            <h3 class="text-xl font-semibold mb-2">Equipe Especializada</h3>
                            <p>Profissionais capacitados em engenharia, design e tecnologia para garantir excelência nos
                                resultados.</p>
                        </div>

                        <div class="p-6 border border-[#f59e0b] rounded-lg">
                            <h3 class="text-xl font-semibold mb-2">Qualidade e Precisão</h3>
                            <p>Alta fidelidade nos detalhes com impressão 3D e corte a laser de última geração.</p>
                        </div>

                        <div class="p-6 border border-[#8b5cf6] rounded-lg">
                            <h3 class="text-xl font-semibold mb-2">Soluções Personalizadas</h3>
                            <p>Projetos feitos sob medida, conforme a necessidade do seu negócio ou ideia criativa.</p>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Seção Clientes/Parceiros
    <section class="py-16 px-6 text-center mb-10" id="clientes">
    <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-[#0d214f] mb-10">Clientes que confiam na MakeSoft</h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-center">

      <a href="https://www.instagram.com/chatrier.esportes" target="_blank" rel="noopener noreferrer">
        <img src="{{ asset('public/img/clientes/chatrier.png') }}" alt="Chatrier" class="h-24 mx-auto hover:opacity-80 transition" />
      </a>

      <a href="https://www.instagram.com/useligas" target="_blank" rel="noopener noreferrer">
        <img src="{{ asset('public/img/clientes/useligas.png') }}" alt="UseLigas" class="h-24 mx-auto hover:opacity-80 transition" />
      </a>

      <a href="https://www.instagram.com/siribeach" target="_blank" rel="noopener noreferrer">
        <img src="{{ asset('public/img/clientes/siri.png') }}" alt="Siri" class="h-24 mx-auto hover:opacity-80 transition" />
      </a>

      <a href="https://www.instagram.com/nucleovertentes" target="_blank" rel="noopener noreferrer">
        <img src="{{ asset('public/img/clientes/nucleo vertentes.png') }}" alt="Núcleo Vertentes" class="h-24 mx-auto hover:opacity-80 transition" />
      </a> -->

    </div>
    </div>
    </section>

    <!-- Seção de Destaque ou Promoção -->
    <section class="py-16 px-6 bg-[#8b5cf6] text-white text-center mb-24" id="destaque">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-4">Conheça nosso projeto mais recente!</h2>
            <p class="text-lg mb-6">
                Desenvolvemos uma solução completa para <strong>empresas que desejam transformar ideias em produtos
                    físicos</strong>. Veja como a MakeSoft pode inovar no seu negócio.
            </p>
            <a href="{{ route('projetos.index') }}"
               class="inline-block bg-white text-[#8b5cf6] hover:bg-[#f59e0b] hover:text-white font-semibold py-3 px-6 rounded-lg transition">
                Ver Projetos
            </a>
        </div>
    </section>

    <!-- Contato -->
    <section class="text-center text-[#2d1a4c]">
        <h2 class="text-2xl font-semibold mb-2">Fale Conosco</h2>
        <p class="mb-6 max-w-md mx-auto leading-relaxed">
            Tem dúvidas ou deseja um orçamento? Entre em contato pelo WhatsApp, estamos prontos para ajudar!
        </p>
        <a href="https://api.whatsapp.com/send?phone=5537991154972" target="_blank"
           class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-8 rounded-lg transition">
            <i></i>WhatsApp
        </a>
    </section>

    </div>
@endsection
