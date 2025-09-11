// --- Card interaction logic ---
document.querySelectorAll('.card').forEach(card => {
  // Open card expanded
  card.addEventListener('click', function (e) {
    if (!e.target.classList.contains('close-btn')) {
      // ✅ Only trigger if card is not already expanded
      if (!this.classList.contains('expanded')) {
        this.classList.add('expanded');
        document.body.style.overflow = 'hidden'; // prevent background scroll

        // Get card center position for splatter
        const rect = card.getBoundingClientRect();
        const x = rect.left + rect.width / 2;
        const y = rect.top + rect.height / 2;

        playSplatterEffect(x, y); // trigger animation once
      }
    }
  });

  // Close card
  card.querySelector('.close-btn').addEventListener('click', function (e) {
    e.stopPropagation();
    card.classList.remove('expanded');
    document.body.style.overflow = ''; // re-enable background scroll
  });
});

// Close with ESC
document.addEventListener('keydown', e => {
  if (e.key === "Escape") {
    document.querySelectorAll('.card.expanded').forEach(c => c.classList.remove('expanded'));
    document.body.style.overflow = '';
  }
});


// --- Splatter animation effect ---
const canvas = document.getElementById("splatter-canvas");
const ctx = canvas.getContext("2d");

function resizeCanvas() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
}
resizeCanvas();
window.addEventListener("resize", resizeCanvas);

function playSplatterEffect(x, y) {
  let particles = [];
  const colors = ["#9900ffff", "#0080ffff", "#cb0a0aff", "#b172dbff", "#d328b7ff"];

  // create 40 particles at given (x,y)
  for (let i = 0; i < 40; i++) {
    particles.push({
      x: x,
      y: y,
      radius: Math.random() * 6 + 2,
      color: colors[Math.floor(Math.random() * colors.length)],
      dx: (Math.random() - 0.5) * 12,
      dy: (Math.random() - 0.5) * 12,
      life: 100
    });
  }

  function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    particles.forEach((p, index) => {
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
      ctx.fillStyle = p.color;
      ctx.fill();

      p.x += p.dx;
      p.y += p.dy;
      p.radius *= 0.96; // shrink over time
      p.life--;

      if (p.life <= 0) particles.splice(index, 1);
    });

    if (particles.length > 0) {
      requestAnimationFrame(animate);
    } else {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
  }

  animate();
}