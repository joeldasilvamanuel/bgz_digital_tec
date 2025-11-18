// Services Page Functionality
function initServicesPage() {
  // Only run on services page
  if (!document.querySelector(".services-nav")) return;

  const serviceNavItems = document.querySelectorAll(".nav-item");
  const serviceSections = document.querySelectorAll(".service-detail");

  // Service navigation
  serviceNavItems.forEach((item) => {
    item.addEventListener("click", function (e) {
      e.preventDefault();

      const targetService = this.getAttribute("data-service");

      // Update active nav item
      serviceNavItems.forEach((navItem) => navItem.classList.remove("active"));
      this.classList.add("active");

      // Show target section
      serviceSections.forEach((section) => {
        section.classList.remove("active");
        if (section.id === targetService) {
          section.classList.add("active");

          // Smooth scroll to section
          setTimeout(() => {
            section.scrollIntoView({
              behavior: "smooth",
              block: "start",
            });
          }, 100);
        }
      });
    });
  });

  // Handle URL hash on page load
  const hash = window.location.hash.replace("#", "");
  if (hash && document.getElementById(hash)) {
    const targetNavItem = document.querySelector(`[data-service="${hash}"]`);
    if (targetNavItem) {
      targetNavItem.click();
    }
  }
}

// Add to main initialization
document.addEventListener("DOMContentLoaded", function () {
  // ... existing code ...
  initServicesPage(); // Add this line
});
