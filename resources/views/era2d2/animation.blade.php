@extends('era2d2.index')

@section('animation')
    <div class="container">
        <!-- Whale Container -->
        <div class="whaleContainer">
            <div class="whalePos size1">
                <div class="whaleRotate size1">
                    <div class="whale"></div>
                    <div class="fin"></div>
                </div>
            </div>
            <div class="whalePos size2">
                <div class="whaleRotate size2">
                    <div class="whale"></div>
                    <div class="fin"></div>
                </div>
            </div>
            <div class="whalePos size3">
                <div class="whaleRotate size3">
                    <div class="whale"></div>
                    <div class="fin"></div>
                </div>
            </div>
            <div class="whalePos size4">
                <div class="whaleRotate size4">
                    <div class="whale"></div>
                    <div class="fin"></div>
                </div>
            </div>
        </div>
        <!-- Circle Container -->
        <div class="cPos">
            <div class="cc">
                <div class="circle one"></div>
                <div class="circle two"></div>
                <div class="circle three"></div>
                <div class="circle four"></div>
            </div>
        </div>

        <!-- Triangle Container -->
        <div class="triangleContainer">
            <div class="triangleBar">
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
                <span class="triangle"></span>
            </div>
        </div>

        <!-- Gradient Container -->
        <div class="gradientContainer">
            <div class="overlay one"></div>
            <div class="gradient">
                <span class="ray ray1"></span>
                <span class="ray ray2"></span>
                <span class="ray ray3"></span>
                <span class="ray ray4"></span>
                <span class="ray ray5"></span>
                <span class="ray ray6"></span>
                <span class="ray ray7"></span>
                <span class="ray ray8"></span>
                <span class="ray ray9"></span>
                <span class="ray ray10"></span>
                <span class="ray ray11"></span>
                <span class="ray ray12"></span>
                <span class="ray ray13"></span>
                <span class="ray ray14"></span>
                <span class="ray ray15"></span>
                <span class="ray ray16"></span>
                <span class="ray ray17"></span>
                <span class="ray ray18"></span>
                <span class="ray ray19"></span>
                <span class="ray ray20"></span>
                <span class="ray ray21"></span>
                <span class="ray ray22"></span>
                <span class="ray ray23"></span>
                <span class="ray ray24"></span>
                <span class="ray ray25"></span>
                <span class="ray ray26"></span>
                <span class="ray ray27"></span>
                <span class="ray ray28"></span>
                <span class="ray ray29"></span>
                <span class="ray ray30"></span>
                <span class="ray ray31"></span>
                <span class="ray ray32"></span>
                <span class="ray ray33"></span>
                <span class="ray ray34"></span>
                <span class="ray ray35"></span>
                <span class="ray ray36"></span>
                <span class="ray ray37"></span>
                <span class="ray ray38"></span>
                <span class="ray ray39"></span>
                <span class="ray ray1"></span>
                <span class="ray ray2"></span>
                <span class="ray ray3"></span>
                <span class="ray ray4"></span>
                <span class="ray ray5"></span>
                <span class="ray ray6"></span>
                <span class="ray ray7"></span>
                <span class="ray ray8"></span>
                <span class="ray ray9"></span>
                <span class="ray ray10"></span>
                <span class="ray ray11"></span>
                <span class="ray ray12"></span>
                <span class="ray ray13"></span>
                <span class="ray ray14"></span>
                <span class="ray ray15"></span>
                <span class="ray ray16"></span>
                <span class="ray ray17"></span>
                <span class="ray ray18"></span>
                <span class="ray ray19"></span>
                <span class="ray ray20"></span>
                <span class="ray ray21"></span>
                <span class="ray ray22"></span>
                <span class="ray ray23"></span>
                <span class="ray ray24"></span>
                <span class="ray ray25"></span>
                <span class="ray ray26"></span>
                <span class="ray ray27"></span>
                <span class="ray ray28"></span>
                <span class="ray ray29"></span>
                <span class="ray ray30"></span>
                <span class="ray ray31"></span>
                <span class="ray ray32"></span>
                <span class="ray ray33"></span>
                <span class="ray ray34"></span>
                <span class="ray ray35"></span>
                <span class="ray ray36"></span>
                <span class="ray ray37"></span>
                <span class="ray ray38"></span>
                <span class="ray ray39"></span>
            </div>
        </div>

        <!-- Rocks Container -->
        <div class="rocks">
            <div class="rock one"></div>
            <div class="rock two"></div>
            <div class="rock three"></div>
            <div class="rock four"></div>
        </div>

        <!-- Bubble Container -->
        <div class="bubbleContainer">
            <span class="bubbleY bubbleY1">
                <span class="bubbleX bubbleX1"></span>
            </span>
            <span class="bubbleY bubbleY2">
                <span class="bubbleX bubbleX2"></span>
            </span>
            <span class="bubbleY bubbleY3">
                <span class="bubbleX bubbleX3"></span>
            </span>
            <span class="bubbleY bubbleY4">
                <span class="bubbleX bubbleX4"></span>
            </span>
            <span class="bubbleY bubbleY5">
                <span class="bubbleX bubbleX5"></span>
            </span>
            <span class="bubbleY bubbleY6">
                <span class="bubbleX bubbleX6"></span>
            </span>
            <span class="bubbleY bubbleY7">
                <span class="bubbleX bubbleX7"></span>
            </span>
            <span class="bubbleY bubbleY8">
                <span class="bubbleX bubbleX8"></span>
            </span>
            <span class="bubbleY bubbleY9">
                <span class="bubbleX bubbleX9"></span>
            </span>
            <span class="bubbleY bubbleY10">
                <span class="bubbleX bubbleX10"></span>
            </span>
        </div>
    </div>
    <script>
        const bubbleContainer = document.querySelector('.bubbleContainer');

        // Função para criar um elemento <style> no DOM
        function addKeyframes(rule) {
            const styleElement = document.getElementById('dynamic-styles') || (() => {
                const style = document.createElement('style');
                style.id = 'dynamic-styles';
                document.head.appendChild(style);
                return style;
            })();
            styleElement.sheet.insertRule(rule, styleElement.sheet.cssRules.length);
        }

        // Função para criar bolhas
        function createBubbles(count) {
            for (let i = 1; i <= count; i++) {
                // Tamanho aleatório entre 2px e 5px
                const size = Math.random() * 4 + 1;

                // Bolha X
                const bubbleX = document.createElement('span');
                bubbleX.classList.add('bubbleX');
                bubbleX.style.width = `${size}px`;
                bubbleX.style.height = `${size}px`;
                bubbleX.style.animationName = `bubbleX${i}`;
                bubbleX.style.animationDuration = '10s';

                // Bolha Y
                const bubbleY = document.createElement('span');
                bubbleY.classList.add('bubbleY');
                bubbleY.style.top = `${Math.random() * 100}px`;
                bubbleY.style.left = `${Math.random() * 156}px`;
                bubbleY.style.animationDelay = `${Math.random() * 3}s`;
                bubbleY.appendChild(bubbleX);

                // Adiciona bolha no contêiner
                bubbleContainer.appendChild(bubbleY);

                // Adiciona animação dinâmica para bubbleX
                const keyframes = `
                    @keyframes bubbleX${i} {
                    0% { transform: translateX(0); }
                    20% { transform: translateX(-${Math.random() * 15}px); }
                    40% { transform: translateX(${Math.random() * 15}px); }
                    60% { transform: translateX(-${Math.random() * 15}px); }
                    80% { transform: translateX(${Math.random() * 15}px); }
                    100% { transform: translateX(-${Math.random() * 15}px); }
                  }
                `;
                addKeyframes(keyframes);
            }
        }

        // Gera 10 bolhas
        createBubbles(10);
    </script>
@endsection
