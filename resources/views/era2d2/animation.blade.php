@extends('era2d2.index')

@section('animation')
<div class="container2">
    <!-- Sol e raios -->
    <div class="sun">
        @for ($i = 0; $i < 20; $i++)
            <span class="ray ray{{ $i }}"></span>
        @endfor
    </div>

    <!-- Montanhas -->
    <div class="mountains">
        <div class="mountain one"></div>
        <div class="mountain two"></div>
        <div class="mountain three"></div>
    </div>

    <!-- Árvores abstratas -->
    <div class="trees">
        <div class="tree t1"></div>
        <div class="tree t2"></div>
        <div class="tree t3"></div>
        <div class="tree t4"></div>
    </div>

    <!-- Folhas flutuantes -->
    <div class="leafContainer"></div>

    <!-- Partículas de luz -->
    <div class="particles">
        @for ($i = 0; $i < 15; $i++)
            <span class="particle"></span>
        @endfor
    </div>
</div>

<script>
    // Cria folhas flutuantes
    const leafContainer = document.querySelector('.leafContainer');
    for (let i = 0; i < 20; i++) {
        const leaf = document.createElement('span');
        leaf.classList.add('leaf');
        leaf.style.left = `${Math.random() * 100}%`;
        leaf.style.animationDelay = `${Math.random() * 5}s`;
        leafContainer.appendChild(leaf);
    }
</script>

<style>
.container2 {
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 500px;
    background: linear-gradient(to top, #3e7c4b, #9cd395);
}

/* 🌞 Sol */
.sun {
    position: absolute;
    top: 15%;
    left: 50%;
    transform: translateX(-50%);
    width: 120px;
    height: 120px;
    background: radial-gradient(circle, #ffd96b, #f2a922);
    border-radius: 50%;
    animation: rotateSun 20s linear infinite;
}
@keyframes rotateSun {
    to { transform: translateX(-50%) rotate(360deg); }
}
.sun .ray {
    position: absolute;
    width: 3px;
    height: 40px;
    background: rgba(255, 220, 120, 0.6);
    top: -10px;
    left: 50%;
    transform-origin: center 70px;
}
@for $i from 0 through 19 {
  .sun .ray#{$i} { transform: rotate(calc(18deg * #{$i})); }
}

/* ⛰️ Montanhas */
.mountains {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 180px;
}
.mountain {
    position: absolute;
    bottom: 0;
    width: 50%;
    height: 100%;
    clip-path: polygon(50% 0%, 100% 100%, 0 100%);
    animation: mountainShift 8s ease-in-out infinite alternate;
}
@keyframes mountainShift {
    0% { transform: translateY(0); }
    100% { transform: translateY(5px); }
}
.mountain.one { left: -10%; background: #4a7739; z-index: 1; }
.mountain.two { left: 25%; background: #5b8b43; z-index: 2; }
.mountain.three { left: 60%; background: #6fa84e; z-index: 3; }

/* 🌳 Árvores */
.trees .tree {
    position: absolute;
    bottom: 0;
    width: 10px;
    height: 60px;
    background: #5b3f2e;
    animation: sway 4s ease-in-out infinite alternate;
}
@keyframes sway {
    0% { transform: rotate(-1deg); }
    100% { transform: rotate(1deg); }
}
.tree::after {
    content: '';
    position: absolute;
    top: -40px;
    left: -15px;
    width: 40px;
    height: 40px;
    background: radial-gradient(circle, #49a05d, #2f693c);
    border-radius: 50%;
}
.tree.t1 { left: 15%; }
.tree.t2 { left: 40%; }
.tree.t3 { left: 65%; }
.tree.t4 { left: 80%; }

/* 🍃 Folhas flutuantes */
.leafContainer .leaf {
    position: absolute;
    width: 15px;
    height: 8px;
    background: linear-gradient(90deg, #65c96d, #3a913e);
    border-radius: 50%;
    top: 0;
    animation: floatLeaf 8s linear infinite;
    opacity: 0.8;
}
@keyframes floatLeaf {
    0% { transform: translateY(0) rotate(0deg); opacity: 0; }
    10% { opacity: 1; }
    50% { transform: translateY(200px) rotate(180deg); }
    100% { transform: translateY(400px) rotate(360deg); opacity: 0; }
}

/* ✨ Partículas de luz */
.particle {
    position: absolute;
    width: 3px;
    height: 3px;
    background: rgba(255, 255, 200, 0.8);
    border-radius: 50%;
    top: calc(20% + (80% * var(--randY, 0.5)));
    left: calc(5% + (90% * var(--randX, 0.5)));
    animation: sparkle 3s ease-in-out infinite alternate;
}
@keyframes sparkle {
    0% { opacity: 0.4; transform: scale(1); }
    100% { opacity: 1; transform: scale(1.6); }
}
</style>
@endsection
