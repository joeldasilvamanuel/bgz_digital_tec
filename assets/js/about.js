// About Page Functionality
function initAboutPage() {
  // Only run on about page
  if (!document.querySelector(".about-hero")) return;

  // Simple scroll animations for about page
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = "1";
        entry.target.style.transform = "translateY(0)";
      }
    });
  }, observerOptions);

  // Observe elements for animation
  const animateElements = document.querySelectorAll(
    ".mission-card, .department-card, .leader-card, .team-stat"
  );
  animateElements.forEach((el) => {
    el.style.opacity = "0";
    el.style.transform = "translateY(30px)";
    el.style.transition = "opacity 0.6s ease, transform 0.6s ease";
    observer.observe(el);
  });
}

// Add to main initialization
document.addEventListener("DOMContentLoaded", function () {
  // ... existing code ...
  initAboutPage(); // Add this line
});
