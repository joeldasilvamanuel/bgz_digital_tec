// Contact Page Functionality
document.addEventListener("DOMContentLoaded", function () {
  initializeContactPage();
});

function initializeContactPage() {
  // Modal functionality
  const modal = document.getElementById("simpleModal");
  const closeBtn = document.querySelector(".close");

  if (closeBtn) {
    closeBtn.addEventListener("click", closeModal);
  }

  // Close modal when clicking outside
  window.addEventListener("click", function (event) {
    if (event.target === modal) {
      closeModal();
    }
  });
}

// WhatsApp Functions
function openWhatsAppDirect() {
  const message =
    "Olá BDZ DIGITAL TEC! Gostaria de saber mais sobre os vossos serviços.";
  openWhatsApp(message);
}

function sendQuickMessage(predefinedMessage) {
  openWhatsApp(predefinedMessage);
}

function sendCustomMessage() {
  const customMessage = document.getElementById("customMessage").value.trim();
  if (customMessage) {
    openWhatsApp(customMessage);
  } else {
    showModal("Por favor, escreva uma mensagem antes de enviar.");
  }
}

function openWhatsApp(message) {
  const whatsappNumber = "244923394109";
  const encodedMessage = encodeURIComponent(message);

  // Check if user is on mobile
  const isMobile =
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
      navigator.userAgent
    );

  let whatsappUrl;

  if (isMobile) {
    // Mobile - use standard WhatsApp link
    whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
  } else {
    // Desktop - use web.whatsapp.com with instructions
    whatsappUrl = `https://web.whatsapp.com/send?phone=${whatsappNumber}&text=${encodedMessage}`;

    // Show instructions for desktop users
    showDesktopInstructions(message);
    return;
  }

  // Open WhatsApp
  window.open(whatsappUrl, "_blank");

  // Show success message
  showModal("WhatsApp aberto! A sua mensagem está pronta para enviar.");
}

function showDesktopInstructions(message) {
  const instructions = `
        <h3>📱 Como Enviar no WhatsApp Web</h3>
        <p><strong>Passo 1:</strong> Abra o <a href="https://web.whatsapp.com" target="_blank">WhatsApp Web</a></p>
        <p><strong>Passo 2:</strong> Adicione este número à sua agenda: <strong>+244 937 486 436</strong></p>
        <p><strong>Passo 3:</strong> Inicie uma conversa e cole esta mensagem:</p>
        <div style="background: #f8f9fa; padding: 1rem; border-radius: 8px; margin: 1rem 0; border-left: 4px solid #25D366;">
            ${message}
        </div>
        <button onclick="copyToClipboard('${message.replace(
          /'/g,
          "\\'"
        )}')" class="btn btn-whatsapp" style="margin-top: 1rem;">
            📋 Copiar Mensagem
        </button>
    `;

  showModal(instructions);
}

// Utility Functions
function copyNumber(number) {
  copyToClipboard("+244 937 486 436");
  showModal("Número copiado: +244 937 486 436");
}

function copyEmail() {
  copyToClipboard("tecinovation0001@gmail.com");
  showModal("Email copiado: tecinovation0001@gmail.com");
}

function copyToClipboard(text) {
  navigator.clipboard
    .writeText(text)
    .then(() => {
      console.log("Texto copiado: " + text);
    })
    .catch((err) => {
      // Fallback for older browsers
      const textArea = document.createElement("textarea");
      textArea.value = text;
      document.body.appendChild(textArea);
      textArea.select();
      document.execCommand("copy");
      document.body.removeChild(textArea);
    });
}

// Modal Functions
function showModal(content) {
  const modal = document.getElementById("simpleModal");
  const modalMessage = document.getElementById("modalMessage");

  if (modal && modalMessage) {
    modalMessage.innerHTML = content;
    modal.style.display = "block";
    document.body.style.overflow = "hidden";
  }
}

function closeModal() {
  const modal = document.getElementById("simpleModal");
  if (modal) {
    modal.style.display = "none";
    document.body.style.overflow = "auto";
  }
}

// Add to main.js initialization
function initContactPage() {
  if (document.querySelector(".contact-hero")) {
    initializeContactPage();
  }
}

// Initialize when page loads
document.addEventListener("DOMContentLoaded", function () {
  initContactPage();
});
