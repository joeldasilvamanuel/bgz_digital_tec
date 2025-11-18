// Main JavaScript for BDZ DIGITAL TEC

document.addEventListener("DOMContentLoaded", function () {
  // Initialize all components
  initHeroSlider();
  initEnhancedNavigation(); // Updated with mobile responsiveness
  initStatsCounter();
  initPortfolioCarousel();
  initTestimonialsCarousel();
  initScrollAnimations();
  initButtonInteractions();
  initCardInteractions();
  initLoadingStates();
  handleFormSubmission("contactForm");
});

// Hero Slider
function initHeroSlider() {
  const slider = document.getElementById("heroSlider");
  if (!slider) return;

  const slides = slider.querySelectorAll(".slide");
  const dotsContainer = document.getElementById("sliderDots");
  const prevBtn = document.getElementById("sliderPrev");
  const nextBtn = document.getElementById("sliderNext");

  let currentSlide = 0;
  const slideCount = slides.length;

  // Create dots
  if (dotsContainer) {
    slides.forEach((_, index) => {
      const dot = document.createElement("div");
      dot.className = "slider-dot" + (index === 0 ? " active" : "");
      dot.addEventListener("click", () => goToSlide(index));
      dotsContainer.appendChild(dot);
    });
  }

  const dots = dotsContainer
    ? dotsContainer.querySelectorAll(".slider-dot")
    : [];

  function goToSlide(index) {
    slides[currentSlide].classList.remove("active");
    if (dots.length > 0) {
      dots[currentSlide].classList.remove("active");
    }

    currentSlide = (index + slideCount) % slideCount;

    slides[currentSlide].classList.add("active");
    if (dots.length > 0) {
      dots[currentSlide].classList.add("active");
    }
  }

  function nextSlide() {
    goToSlide(currentSlide + 1);
  }

  function prevSlide() {
    goToSlide(currentSlide - 1);
  }

  // Event listeners
  if (nextBtn) nextBtn.addEventListener("click", nextSlide);
  if (prevBtn) prevBtn.addEventListener("click", prevSlide);

  // Auto slide
  let slideInterval = setInterval(nextSlide, 5000);

  // Pause on hover
  slider.addEventListener("mouseenter", () => clearInterval(slideInterval));
  slider.addEventListener("mouseleave", () => {
    slideInterval = setInterval(nextSlide, 5000);
  });
}

// Enhanced Navigation with Dropdowns - ATUALIZADO COM RESPONSIVIDADE
function initEnhancedNavigation() {
  const navToggle = document.getElementById("navToggle");
  const navMenu = document.getElementById("navMenu");
  const dropdowns = document.querySelectorAll(".dropdown");

  // Mobile toggle - NOVA FUNCIONALIDADE
  if (navToggle && navMenu) {
    navToggle.addEventListener("click", () => {
      navMenu.classList.toggle("active");
      navToggle.classList.toggle("active");

      // Close dropdowns when closing menu
      if (!navMenu.classList.contains("active")) {
        dropdowns.forEach((dropdown) => {
          dropdown.classList.remove("active");
        });
      }
    });
  }

  // NOVO: Dropdown functionality for mobile
  dropdowns.forEach((dropdown) => {
    const dropdownLink = dropdown.querySelector(".nav-link");

    dropdownLink.addEventListener("click", function (e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        dropdown.classList.toggle("active");

        // Close other dropdowns
        dropdowns.forEach((otherDropdown) => {
          if (otherDropdown !== dropdown) {
            otherDropdown.classList.remove("active");
          }
        });
      }
    });
  });

  // NOVO: Close menu when clicking on links (mobile)
  const navLinks = document.querySelectorAll(
    ".nav-link:not(.dropdown .nav-link)"
  );
  navLinks.forEach((link) => {
    link.addEventListener("click", () => {
      if (window.innerWidth <= 768) {
        navToggle.classList.remove("active");
        navMenu.classList.remove("active");
        dropdowns.forEach((dropdown) => {
          dropdown.classList.remove("active");
        });
      }
    });
  });

  // NOVO: Close menu when clicking outside
  document.addEventListener("click", function (e) {
    if (navToggle && navMenu) {
      if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove("active");
        navToggle.classList.remove("active");
        dropdowns.forEach((dropdown) => {
          dropdown.classList.remove("active");
        });
      }
    }
  });

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      // Only prevent default for same-page anchors
      if (
        this.getAttribute("href").startsWith("#") &&
        !this.getAttribute("href").includes(".php")
      ) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
          const offsetTop =
            target.getBoundingClientRect().top + window.pageYOffset - 80;

          window.scrollTo({
            top: offsetTop,
            behavior: "smooth",
          });
        }
      }
    });
  });

  // Close dropdowns when clicking outside (for desktop)
  if (window.innerWidth > 968) {
    document.addEventListener("click", (e) => {
      if (!e.target.closest(".nav-links li")) {
        document.querySelectorAll(".dropdown-menu").forEach((menu) => {
          menu.style.opacity = "0";
          menu.style.visibility = "hidden";
        });
      }
    });

    // Handle dropdown hover effects
    const dropdownParents = document.querySelectorAll(".nav-links li");
    dropdownParents.forEach((parent) => {
      const dropdown = parent.querySelector(".dropdown-menu");
      if (dropdown) {
        parent.addEventListener("mouseenter", () => {
          dropdown.style.opacity = "1";
          dropdown.style.visibility = "visible";
        });

        parent.addEventListener("mouseleave", () => {
          dropdown.style.opacity = "0";
          dropdown.style.visibility = "hidden";
        });
      }
    });
  }

  // Active link highlighting
  const allNavLinks = document.querySelectorAll(".nav-link");
  const currentPage = window.location.pathname.split("/").pop() || "index.php";

  allNavLinks.forEach((link) => {
    const linkHref = link.getAttribute("href");
    if (
      (currentPage === "index.php" && linkHref === "/") ||
      (linkHref.includes(currentPage) && !linkHref.startsWith("#"))
    ) {
      link.classList.add("active");
    }

    // Enhanced hover effects
    link.addEventListener("mouseenter", function () {
      if (!this.classList.contains("active")) {
        this.style.transform = "translateY(-2px)";
      }
    });

    link.addEventListener("mouseleave", function () {
      if (!this.classList.contains("active")) {
        this.style.transform = "translateY(0)";
      }
    });
  });
}

// Stats Counter
function initStatsCounter() {
  const counters = document.querySelectorAll(".stat-number");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          const target = parseInt(counter.getAttribute("data-count"));
          const duration = 2000;
          const step = target / (duration / 16);
          let current = 0;

          const timer = setInterval(() => {
            current += step;
            if (current >= target) {
              counter.textContent = target + "+";
              clearInterval(timer);
            } else {
              counter.textContent = Math.floor(current) + "+";
            }
          }, 16);

          observer.unobserve(counter);
        }
      });
    },
    { threshold: 0.5 }
  );

  counters.forEach((counter) => observer.observe(counter));
}

// Portfolio Carousel
function initPortfolioCarousel() {
  // This would be implemented based on your preferred carousel library
  // For now, we'll use the grid layout
  console.log("Portfolio carousel initialized");
}

// Testimonials Carousel
function initTestimonialsCarousel() {
  // This would be implemented based on your preferred carousel library
  // For now, we'll use the grid layout
  console.log("Testimonials carousel initialized");
}

// Scroll Animations
function initScrollAnimations() {
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
  document
    .querySelectorAll(
      ".service-card, .stat-card, .portfolio-item, .testimonial-item"
    )
    .forEach((el) => {
      el.style.opacity = "0";
      el.style.transform = "translateY(30px)";
      el.style.transition = "opacity 0.6s ease, transform 0.6s ease";
      observer.observe(el);
    });
}

// Enhanced Button Interactions
function initButtonInteractions() {
  // All buttons ripple effect
  const buttons = document.querySelectorAll(
    ".btn, .service-link, .portfolio-link"
  );

  buttons.forEach((button) => {
    button.addEventListener("click", function (e) {
      // Ripple effect
      const ripple = document.createElement("span");
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;

      ripple.style.cssText = `
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.6);
        transform: scale(0);
        animation: ripple 0.6s linear;
        width: ${size}px;
        height: ${size}px;
        left: ${x}px;
        top: ${y}px;
      `;

      this.style.position = "relative";
      this.style.overflow = "hidden";
      this.appendChild(ripple);

      setTimeout(() => {
        ripple.remove();
      }, 600);
    });
  });
}

// Enhanced card interactions
function initCardInteractions() {
  const cards = document.querySelectorAll(
    ".service-card, .portfolio-item, .stat-card"
  );

  cards.forEach((card) => {
    card.addEventListener("mousemove", function (e) {
      if (window.innerWidth > 768) {
        // Only on desktop
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const angleY = (x - centerX) / 25;
        const angleX = (centerY - y) / 25;

        this.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg) translateY(-10px)`;
      }
    });

    card.addEventListener("mouseleave", function () {
      if (window.innerWidth > 768) {
        this.style.transform =
          "perspective(1000px) rotateX(0) rotateY(0) translateY(-10px)";
      } else {
        this.style.transform = "translateY(-10px)";
      }
    });
  });
}

// Loading states for buttons
function initLoadingStates() {
  const actionButtons = document.querySelectorAll(
    ".btn-primary, .service-link"
  );

  actionButtons.forEach((button) => {
    button.addEventListener("click", function () {
      // Simulate loading for demo
      if (
        this.classList.contains("btn-primary") &&
        !this.getAttribute("href").includes(".php")
      ) {
        this.classList.add("btn-loading");

        setTimeout(() => {
          this.classList.remove("btn-loading");
        }, 2000);
      }
    });
  });
}

// Form Handling (for contact forms)
function handleFormSubmission(formId) {
  const form = document.getElementById(formId);
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      // Basic form validation
      const formData = new FormData(this);
      const data = Object.fromEntries(formData);

      // Here you would typically send the data to your PHP backend
      console.log("Form data:", data);

      // Show success message
      alert("Mensagem enviada com sucesso! Entraremos em contacto em breve.");
      form.reset();
    });
  }
}

// Global scroll handler for navbar
window.addEventListener("scroll", () => {
  const nav = document.querySelector(".main-nav");
  if (nav && window.scrollY > 50) {
    nav.classList.add("scrolled");
  } else if (nav) {
    nav.classList.remove("scrolled");
  }
});

// Handle window resize for dropdown behavior - ATUALIZADO
window.addEventListener("resize", () => {
  const navMenu = document.getElementById("navMenu");
  const navToggle = document.getElementById("navToggle");
  const dropdowns = document.querySelectorAll(".dropdown");

  // Reset mobile menu on resize to desktop
  if (window.innerWidth > 768) {
    if (navMenu) navMenu.classList.remove("active");
    if (navToggle) navToggle.classList.remove("active");
    dropdowns.forEach((dropdown) => {
      dropdown.classList.remove("active");
    });
  }

  // Re-initialize dropdown behavior on resize
  const dropdownParents = document.querySelectorAll(".nav-links li");

  dropdownParents.forEach((parent) => {
    const dropdown = parent.querySelector(".dropdown-menu");
    if (dropdown) {
      if (window.innerWidth <= 968) {
        // Mobile - always show dropdowns
        dropdown.style.opacity = "1";
        dropdown.style.visibility = "visible";
        dropdown.style.position = "static";
        dropdown.style.transform = "none";
      } else {
        // Desktop - hide dropdowns initially
        dropdown.style.opacity = "0";
        dropdown.style.visibility = "hidden";
        dropdown.style.position = "absolute";
      }
    }
  });
});

// Inject ripple styles
const rippleStyles = `
@keyframes ripple {
  to {
    transform: scale(4);
    opacity: 0;
  }
}

.btn-loading {
  position: relative;
  color: transparent !important;
  pointer-events: none;
}

.btn-loading::after {
  content: '';
  position: absolute;
  width: 20px;
  height: 20px;
  top: 50%;
  left: 50%;
  margin-left: -10px;
  margin-top: -10px;
  border: 2px solid #ffffff;
  border-radius: 50%;
  border-top-color: transparent;
  animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
  to { transform: rotate(360deg); }
}

/* NOVO: Additional styles for mobile navigation */
@media (max-width: 768px) {
  .dropdown.active .dropdown-menu {
    max-height: 500px;
    opacity: 1;
    visibility: visible;
  }

  .dropdown-menu {
    max-height: 0;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
  }
}
`;

// Inject styles
const styleSheet = document.createElement("style");
styleSheet.textContent = rippleStyles;
document.head.appendChild(styleSheet);
