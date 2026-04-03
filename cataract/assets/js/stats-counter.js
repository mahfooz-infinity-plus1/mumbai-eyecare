document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll('.purecounter');
  let animated = false;

  function animateCounters() {
    counters.forEach(counter => {
      const start = +counter.getAttribute('data-purecounter-start') || 0;
      const end = +counter.getAttribute('data-purecounter-end') || 0;
      const duration = +counter.getAttribute('data-purecounter-duration') || 2;
      let current = start;
      const increment = (end - start) / (duration * 60);

      function updateCounter() {
        current += increment;
        if ((increment > 0 && current < end) || (increment < 0 && current > end)) {
          counter.textContent = Math.floor(current).toLocaleString() + '+';
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = end.toLocaleString() + '+';
        }
      }
      updateCounter();
    });
  }

  const statsSection = document.getElementById('stats');
  if (statsSection) {
    const observer = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting && !animated) {
            animateCounters();
            animated = true;
            observer.unobserve(statsSection);
          }
        });
      },
      { threshold: 0.3 }
    );
    observer.observe(statsSection);
  }
});