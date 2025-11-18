// Blog JavaScript
document.addEventListener("DOMContentLoaded", function () {
  initBlogFilters();
  initNewsletterForm();
  initImageFallback();
});

// Filter functionality
function initBlogFilters() {
  const filterButtons = document.querySelectorAll(".filter-btn");
  const blogCards = document.querySelectorAll(".blog-card");
  const blogGrid = document.getElementById("blogGrid");

  filterButtons.forEach((button) => {
    button.addEventListener("click", function () {
      // Remove active class from all buttons
      filterButtons.forEach((btn) => btn.classList.remove("active"));

      // Add active class to clicked button
      this.classList.add("active");

      const filterValue = this.getAttribute("data-filter");

      // Filter cards
      blogCards.forEach((card) => {
        const cardCategory = card.getAttribute("data-category");

        if (filterValue === "all" || cardCategory === filterValue) {
          card.style.display = "block";
          card.style.animation = "fadeInUp 0.6s ease";
        } else {
          card.style.display = "none";
        }
      });
    });
  });
}

// Newsletter form handling
function initNewsletterForm() {
  const newsletterForm = document.getElementById("newsletterForm");

  if (newsletterForm) {
    newsletterForm.addEventListener("submit", function (e) {
      e.preventDefault();

      const submitBtn = this.querySelector(".btn");
      const emailInput = this.querySelector('input[type="email"]');
      const email = emailInput.value;

      // Show loading state
      submitBtn.classList.add("loading");

      // Simulate API call
      setTimeout(() => {
        // Hide loading state
        submitBtn.classList.remove("loading");

        // Show success message
        alert("Obrigado pela sua subscrição! Entraremos em contacto em breve.");

        // Reset form
        this.reset();
      }, 2000);
    });
  }
}

// Image fallback handling
function initImageFallback() {
  const images = document.querySelectorAll(".blog-card-image img");

  images.forEach((img) => {
    // Check if image loaded successfully
    img.addEventListener("error", function () {
      console.log("Image failed to load:", this.src);
    });

    img.addEventListener("load", function () {
      console.log("Image loaded successfully:", this.src);
    });
  });
}

// Add fadeInUp animation
const style = document.createElement("style");
style.textContent = `
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .blog-card {
        animation: fadeInUp 0.6s ease;
    }
`;
document.head.appendChild(style);
