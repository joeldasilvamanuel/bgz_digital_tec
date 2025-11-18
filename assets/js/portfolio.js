// Portfolio Page Functionality
function initPortfolioPage() {
  // Only run on portfolio page
  if (!document.querySelector(".portfolio-filters")) return;

  const filterBtns = document.querySelectorAll(".filter-btn");
  const portfolioItems = document.querySelectorAll(".portfolio-item");
  const loadMoreBtn = document.getElementById("loadMore");
  const projectModals = document.querySelectorAll(".project-modal");

  // Filter functionality
  filterBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      const filter = this.getAttribute("data-filter");

      // Update active filter
      filterBtns.forEach((b) => b.classList.remove("active"));
      this.classList.add("active");

      // Filter items
      portfolioItems.forEach((item) => {
        if (filter === "all" || item.getAttribute("data-category") === filter) {
          item.classList.remove("hidden");
        } else {
          item.classList.add("hidden");
        }
      });
    });
  });

  // Project modal functionality
  portfolioItems.forEach((item) => {
    const viewBtn = item.querySelector(".view-project");
    if (viewBtn) {
      viewBtn.addEventListener("click", function () {
        const projectId = this.getAttribute("data-project");
        const modal = document.getElementById(`modal-${projectId}`);

        if (modal) {
          modal.classList.add("active");
          document.body.style.overflow = "hidden";
        }
      });
    }
  });

  // Close modal functionality
  projectModals.forEach((modal) => {
    const closeBtn = modal.querySelector(".modal-close");
    const overlay = modal.querySelector(".modal-overlay");
    const closeModalBtn = modal.querySelector(".close-modal");

    const closeModal = () => {
      modal.classList.remove("active");
      document.body.style.overflow = "";
    };

    if (closeBtn) closeBtn.addEventListener("click", closeModal);
    if (overlay) overlay.addEventListener("click", closeModal);
    if (closeModalBtn) closeModalBtn.addEventListener("click", closeModal);

    // Close on escape key
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && modal.classList.contains("active")) {
        closeModal();
      }
    });
  });

  // Load more functionality (simulated)
  if (loadMoreBtn) {
    loadMoreBtn.addEventListener("click", function () {
      this.textContent = "Carregando...";
      this.disabled = true;

      // Simulate loading
      setTimeout(() => {
        // In a real scenario, you would fetch more projects from the server
        this.textContent = "Não há mais projetos";
        this.style.opacity = "0.5";
      }, 1500);
    });
  }

  // Handle URL hash for direct project access
  const hash = window.location.hash.replace("#project-", "");
  if (hash) {
    const modal = document.getElementById(`modal-${hash}`);
    if (modal) {
      setTimeout(() => {
        modal.classList.add("active");
        document.body.style.overflow = "hidden";
      }, 500);
    }
  }
}

// Add to main initialization
document.addEventListener("DOMContentLoaded", function () {
  // ... existing code ...
  initPortfolioPage(); // Add this line
});

// Portfolio Filter
document.addEventListener("DOMContentLoaded", function () {
  const filterButtons = document.querySelectorAll(".filter-btn");
  const portfolioItems = document.querySelectorAll(".portfolio-item");

  filterButtons.forEach((button) => {
    button.addEventListener("click", function () {
      // Remove active class from all buttons
      filterButtons.forEach((btn) => btn.classList.remove("active"));

      // Add active class to clicked button
      this.classList.add("active");

      const filterValue = this.getAttribute("data-filter");

      portfolioItems.forEach((item) => {
        if (
          filterValue === "all" ||
          item.getAttribute("data-category") === filterValue
        ) {
          item.style.display = "block";
          item.style.animation = "fadeInUp 0.6s ease";
        } else {
          item.style.display = "none";
        }
      });
    });
  });
});
