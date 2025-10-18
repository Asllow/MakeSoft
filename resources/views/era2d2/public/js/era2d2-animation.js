document.addEventListener('DOMContentLoaded', function () {
  const root = document.querySelector('.era2-animation');
  if (!root) return;

  const leafContainer = root.querySelector('.leafContainer');
  const particles = root.querySelector('.particles');

  function createLeaves(count = 18) {
    for (let i = 0; i < count; i++) {
      const leaf = document.createElement('span');
      leaf.className = 'leaf';
      const left = Math.random() * 100;
      const startTop = -20 - Math.random() * 40;
      const duration = 6 + Math.random() * 6;
      const delay = Math.random() * 6;
      leaf.style.left = `${left}%`;
      leaf.style.top = `${startTop}px`;
      leaf.style.animationDuration = `${duration}s`;
      leaf.style.animationDelay = `${delay}s`;
      leafContainer.appendChild(leaf);
    }
  }

  function createParticles(count = 14) {
    for (let i = 0; i < count; i++) {
      const p = document.createElement('span');
      p.className = 'particle';
      const x = Math.random() * 100;
      const y = 15 + Math.random() * 60;
      p.style.left = `${x}%`;
      p.style.top  = `${y}%`;
      p.style.animationDelay = `${Math.random() * 3}s`;
      p.style.animationDuration = `${2 + Math.random() * 3}s`;
      particles.appendChild(p);
    }
  }

  createLeaves();
  createParticles();

  window.addEventListener('resize', () => {
    // opcional: não recriar para evitar flicker
  });
});

