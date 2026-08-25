/* BoldJacketWay - Main Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
    });
  }

  // Sticky Navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Animated metric counters
  const counters = document.querySelectorAll('.metric-number');
  if (counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          let count = 0;
          const speed = target / 50;
          const updateCount = () => {
            count += speed;
            if (count < target) {
              entry.target.innerText = Math.ceil(count);
              setTimeout(updateCount, 25);
            } else {
              entry.target.innerText = target;
            }
          };
          updateCount();
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  // Interactive Jacket Silhouette & Outerwear Textile Selector Explorer
  const jacketButtons = document.querySelectorAll('.jacket-btn');
  const jacketDisplay = document.getElementById('jacket-detail');

  if (jacketButtons.length > 0 && jacketDisplay) {
    jacketButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        jacketButtons.forEach(b => b.classList.remove('active-jacket'));
        this.classList.add('active-jacket');
        const jacketName = this.getAttribute('data-jacket');
        const description = this.getAttribute('data-desc');
        const durability = this.getAttribute('data-durability');

        jacketDisplay.innerHTML = `
          <div class="jacket-card" style="border-left: 4px solid var(--accent-ochre); margin-top: 1.5rem;">
            <h3 style="color: var(--accent-ochre); font-size: 1.5rem; margin-bottom: 0.5rem;">${jacketName} Atelier Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">${description}</p>
            <strong style="color: var(--accent-rust); font-size: 0.95rem;">Empirical Outerwear Armor Rating: ${durability}</strong>
          </div>
        `;
      });
    });
  }

  // Jacket Matcher & Climate Diagnostic Quiz
  const climateQuizButtons = document.querySelectorAll('.climate-quiz-btn');
  const climateQuizResult = document.getElementById('climate-quiz-result');

  if (climateQuizButtons.length > 0 && climateQuizResult) {
    climateQuizButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        climateQuizButtons.forEach(b => b.style.opacity = '0.7');
        this.style.opacity = '1';
        const recommendation = this.getAttribute('data-rec');
        climateQuizResult.innerHTML = `
          <div class="jacket-card" style="background: var(--bg-secondary); margin-top: 1rem; border-color: var(--accent-ochre);">
            <h4 style="color: var(--accent-ochre); margin-bottom: 0.5rem;">Your Curated Outerwear Armor Recommendation</h4>
            <p style="color: var(--text-primary); font-weight: 600;">${recommendation}</p>
          </div>
        `;
      });
    });
  }
});
