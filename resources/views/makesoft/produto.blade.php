@extends('layouts.makesoft')

@section('title', $produto->nome_produto)

@section('content')
    <div class="max-w-5xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-[#0d214f]">{{ $produto->nome_produto }}</h1>

        <div class="bg-white border shadow-sm rounded-lg overflow-hidden">
            <div class="relative flex items-center justify-center bg-gray-100 rounded-t-lg" style="height:24rem;">
                <!-- Botão seta esquerda -->
                <button id="carousel-prev" aria-label="Imagem anterior"
                        class="absolute left-2 text-[#2dd4bf] text-4xl font-bold bg-white bg-opacity-80 rounded-full w-10 h-10 flex items-center justify-center hover:bg-opacity-100 transition select-none z-10">
                    &#10094;
                </button>

                <!-- Imagens do produto em carrossel -->
                @if($imagensCorrigidas->count() > 0)
                    @foreach($imagensCorrigidas as $index => $img)
                        <img
                            src="{{ $img }}"
                            alt="{{ $produto->nome_produto }} - imagem {{ $index + 1 }}"
                            data-slide-index="{{ $index }}"
                            class="absolute inset-0 w-full h-full object-contain transition-opacity duration-300 cursor-pointer"
                            style="{{ $index === 0 ? 'opacity:1; position:relative;' : 'opacity:0; position:absolute;' }}"
                        />
                    @endforeach
                @else
                    <!-- Caso não tenha imagens extras, mostra a imagem principal -->
                    <img
                        id="main-image"
                        src="{{ $produto->img_produto }}"
                        alt="{{ $produto->nome_produto }}"
                        class="w-full h-full object-contain cursor-pointer"
                    />
                @endif

                <!-- Botão seta direita -->
                <button id="carousel-next" aria-label="Próxima imagem"
                        class="absolute right-2 text-[#2dd4bf] text-4xl font-bold bg-white bg-opacity-80 rounded-full w-10 h-10 flex items-center justify-center hover:bg-opacity-100 transition select-none z-10">
                    &#10095;
                </button>
            </div>

            <!-- Bolinhas indicadoras -->
            @if($imagensCorrigidas->count() > 0)
                <div class="flex justify-center space-x-2 py-4 bg-white rounded-b-lg">
                    @foreach($imagensCorrigidas as $index => $img)
                        <button
                            type="button"
                            data-slide-button="{{ $index }}"
                            aria-label="Ver imagem {{ $index + 1 }}"
                            class="w-3 h-3 rounded-full bg-[#2dd4bf] opacity-50 hover:opacity-100 transition"
                            style="{{ $index === 0 ? 'opacity:1;' : '' }}"
                        ></button>
                    @endforeach
                </div>
            @endif

            <div class="p-6 flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                <p class="text-2xl font-bold text-[#2dd4bf]">
                    R$ {{ number_format($produto->preco_produto, 2, ',', '.') }}</p>
                <a href="https://api.whatsapp.com/send?phone=5537991154972&text=Olá, gostaria de um orçamento sobre: {{ urlencode($produto->nome_produto) }}"
                   target="_blank"
                   class="inline-block bg-[#2dd4bf] text-white px-6 py-3 rounded hover:bg-[#1877f2] transition text-center font-semibold">
                    Orçar via WhatsApp
                </a>
            </div>
            <div class="px-6 pb-6 text-gray-700 space-y-4">
                <div>
                    <h2 class="text-lg font-semibold text-[#0d214f]">Descrição do Produto</h2>
                    <p>{{ $produto->desc_produto ?? 'Nenhuma descrição disponível.' }}</p>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-[#0d214f]">Dimensões aproximadas</h2>
                    <p>{{ $produto->dimensao_produto ?? 'Dimensões não informadas.' }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de zoom -->
    <div id="image-modal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50">
        <div class="relative max-w-5xl max-h-[90vh] p-4 flex items-center justify-center">
            <button id="modal-prev" aria-label="Imagem anterior"
                    class="absolute left-2 text-white text-4xl font-bold bg-black bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center hover:bg-opacity-75 transition select-none">
                &#10094;
            </button>
            <img id="modal-image" src="" alt="Imagem ampliada" class="max-w-[90vw] max-h-[85vh] rounded-lg shadow-lg"/>
            <button id="modal-next" aria-label="Próxima imagem"
                    class="absolute right-2 text-white text-4xl font-bold bg-black bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center hover:bg-opacity-75 transition select-none">
                &#10095;
            </button>
            <button id="modal-close" class="absolute top-2 right-2 text-white text-3xl font-bold hover:text-gray-300">
                &times;
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const images = [...document.querySelectorAll('[data-slide-index]')];
            const buttons = [...document.querySelectorAll('[data-slide-button]')];
            const carouselPrev = document.getElementById('carousel-prev');
            const carouselNext = document.getElementById('carousel-next');
            let currentIndex = 0;
            let slideInterval;

            function showImage(index) {
                images.forEach(img => {
                    if (parseInt(img.getAttribute('data-slide-index')) === index) {
                        img.style.opacity = '1';
                        img.style.position = 'relative';
                    } else {
                        img.style.opacity = '0';
                        img.style.position = 'absolute';
                    }
                });

                buttons.forEach((btn, idx) => {
                    if (idx === index) {
                        btn.style.opacity = '1';
                        btn.setAttribute('aria-current', 'true');
                    } else {
                        btn.style.opacity = '0.5';
                        btn.removeAttribute('aria-current');
                    }
                });

                currentIndex = index;
            }

            function startAutoSlide() {
                slideInterval = setInterval(() => {
                    let nextIndex = currentIndex + 1;
                    if (nextIndex >= images.length) nextIndex = 0;
                    showImage(nextIndex);
                }, 5000);
            }

            function resetAutoSlide() {
                clearInterval(slideInterval);
                startAutoSlide();
            }

            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    const index = parseInt(button.getAttribute('data-slide-button'));
                    showImage(index);
                    resetAutoSlide();
                });
            });

            carouselPrev.addEventListener('click', () => {
                if (images.length === 0) return;
                let newIndex = currentIndex - 1;
                if (newIndex < 0) newIndex = images.length - 1;
                showImage(newIndex);
                resetAutoSlide();
            });

            carouselNext.addEventListener('click', () => {
                if (images.length === 0) return;
                let newIndex = currentIndex + 1;
                if (newIndex >= images.length) newIndex = 0;
                showImage(newIndex);
                resetAutoSlide();
            });

            if (images.length === 0) {
                currentIndex = -1;
                carouselPrev.style.display = 'none';
                carouselNext.style.display = 'none';
            } else {
                showImage(0);
                startAutoSlide();
            }

            // Modal zoom
            const modal = document.getElementById('image-modal');
            const modalImage = document.getElementById('modal-image');
            const modalClose = document.getElementById('modal-close');
            const modalPrev = document.getElementById('modal-prev');
            const modalNext = document.getElementById('modal-next');

            function openModal(index) {
                if (images.length === 0) return;

                const img = images[index];
                modalImage.src = img.src;
                modalImage.alt = img.alt;
                modal.classList.remove('hidden');
                currentIndex = index;
            }

            function closeModal() {
                modal.classList.add('hidden');
                modalImage.src = '';
                modalImage.alt = '';
            }

            function showModalImage(index) {
                if (index < 0) index = images.length - 1;
                if (index >= images.length) index = 0;
                currentIndex = index;
                modalImage.src = images[currentIndex].src;
                modalImage.alt = images[currentIndex].alt;
                showImage(currentIndex);
            }

            if (images.length > 0) {
                images.forEach((img, index) => {
                    img.addEventListener('click', () => {
                        openModal(index);
                    });
                });
            } else {
                const mainImage = document.getElementById('main-image');
                if (mainImage) {
                    mainImage.addEventListener('click', () => {
                        modalImage.src = mainImage.src;
                        modalImage.alt = mainImage.alt;
                        modal.classList.remove('hidden');
                    });
                    modalPrev.style.display = 'none';
                    modalNext.style.display = 'none';
                }
                carouselPrev.style.display = 'none';
                carouselNext.style.display = 'none';
            }

            modalPrev.addEventListener('click', () => {
                showModalImage(currentIndex - 1);
            });

            modalNext.addEventListener('click', () => {
                showModalImage(currentIndex + 1);
            });

            modalClose.addEventListener('click', closeModal);

            modal.addEventListener('click', e => {
                if (e.target === modal) closeModal();
            });

            document.addEventListener('keydown', e => {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });
        });
    </script>
@endsection
