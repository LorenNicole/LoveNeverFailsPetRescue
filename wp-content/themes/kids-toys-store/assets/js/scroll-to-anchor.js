(function() {
  /**
   * Smooth scroll to anchor with dynamic offset
   */
  function scrollToAnchor(event) {
    const targetId = this.getAttribute('href');
    if (targetId.startsWith('#') && targetId.length > 1) {
      event.preventDefault();

      const targetElement = document.querySelector(targetId);
      const headerHeight = document.querySelector('.header-homepage').offsetHeight;

      if (targetElement) {
        const elementPosition = targetElement.getBoundingClientRect().top + window.scrollY;
        const offsetPosition = elementPosition - headerHeight;

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });
      }
    }
  }

  // Attach click listeners to all internal anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', scrollToAnchor);
  });

  // Optional: Adjust scroll if page loads with a hash in the URL
  window.addEventListener('load', () => {
    if (window.location.hash) {
      const targetElement = document.querySelector(window.location.hash);
      const headerHeight = document.querySelector('.header-homepage').offsetHeight;
      if (targetElement) {
        const elementPosition = targetElement.getBoundingClientRect().top + window.scrollY;
        window.scrollTo({
          top: elementPosition - headerHeight,
          behavior: 'instant' // No animation on page load
        });
      }
    }
  });
})();