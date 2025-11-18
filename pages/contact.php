<?php
include_once(__DIR__ . '/../includes/config.php');
include_once(__DIR__ . '/../includes/header.php');

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    // Destinatário
    $to = "tecinovation0001@gmail.com";
    $subject = "Novo Contacto de $name - BDZ Digital Tec";

    // Corpo do email
    $email_body = "
    Nome: $name\n
    Email: $email\n
    Telefone: $phone\n
    Serviço Interessado: $service\n
    Mensagem:\n$message\n\n
    Enviado através do site BDZ Digital Tec
    ";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar email
    if (mail($to, $subject, $email_body, $headers)) {
        $success_message = "Mensagem enviada com sucesso! Entraremos em contacto em breve.";
    } else {
        $error_message = "Erro ao enviar mensagem. Tente novamente ou contacte-nos directamente.";
    }
}
?>

<!-- Contact Header -->
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <h1>Contacte-Nos</h1>
            <p>Pronto para transformar a sua presença digital? Estamos aqui para ajudar.</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-info">
                <h2>Vamos Conversar</h2>
                <p>Tem um projecto em mente? Entre em contacto e vamos discutir como podemos ajudar o seu negócio a
                    crescer.</p>

                <div class="contact-methods">
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>tecinovation0001@gmail.com</p>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Telefone</h4>
                            <p>+244 937 486 436</p>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Localização</h4>
                            <p>Bairro Capolo II, Kin Ribeiro<br>Luanda, Angola</p>
                        </div>
                    </div>
                </div>

                <div class="social-contact">
                    <h4>Siga-nos</h4>
                    <div class="social-links">
                    <a href="https://facebook.com/bdzdigitaltec" class="social-link" target="_blank" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://instagram.com/bdzdigitaltec" class="social-link" target="_blank" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://linkedin.com/company/bdz-digital-tec" class="social-link" target="_blank" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://wa.me/244937486436" class="social-link whatsapp" target="_blank" aria-label="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-container">
                <form class="contact-form" method="POST" action="">
                    <?php if (isset($success_message)): ?>
                    <div class="alert alert-success">
                        <?php echo $success_message; ?>
                    </div>
                    <?php endif; ?>

                    <?php if (isset($error_message)): ?>
                    <div class="alert alert-error">
                        <?php echo $error_message; ?>
                    </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="name">Nome Completo *</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="service">Serviço de Interesse</label>
                        <select id="service" name="service">
                            <option value="">Seleccione um serviço</option>
                            <option value="marketing">Marketing Digital</option>
                            <option value="development">Desenvolvimento Web</option>
                            <option value="seo">SEO & SEM</option>
                            <option value="social">Redes Sociais</option>
                            <option value="consulting">Consultoria TI</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Mensagem *</label>
                        <textarea id="message" name="message" rows="6" required
                            placeholder="Conte-nos sobre o seu projecto..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-full">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- WhatsApp Float -->
<div class="whatsapp-float">
    <a href="https://wa.me/244937486436" target="_blank" class="whatsapp-btn-float">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

<?php include_once(__DIR__ . '/../includes/footer.php'); ?>