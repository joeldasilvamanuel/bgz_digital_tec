<!-- Footer Simplificado e Profissional -->
<footer class="main-footer">
    <div class="footer-container">
        <div class="footer-content">
            <!-- Logo e Descrição -->
            <div class="footer-section">
                <div class="footer-brand">
                    <img src="<?= BASE_URL ?>assets/img/BDZ-LOGO01.png" alt="BDZ DIGITAL TEC" class="footer-logo-img">
                    <div class="footer-logo-text">BDZ DIGITAL TEC</div>
                </div>
                <p class="footer-description">
                    Transformamos ideias em soluções digitais inovadoras.
                </p>

                <!-- Contactos Principais -->
                <div class="footer-contact-main">
                    <a href="tel:+244934402678" class="contact-link">
                        <i class="fas fa-phone"></i>
                        +244 934 402 678
                    </a>
                    <a href="mailto:tecinovation0001@gmail.com" class="contact-link">
                        <i class="fas fa-envelope"></i>
                        tecinovation0001@gmail.com
                    </a>
                </div>

                <!-- Redes Sociais -->
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

            <!-- Links Rápidos Combinados -->
            <div class="footer-section">
                <h3 class="footer-title">Links Rápidos</h3>
                <div class="footer-links-grid">
                    <div class="links-column">
                        <h4>Serviços</h4>
                        <ul class="footer-links">
                            <li><a href="<?php echo url('pages/services.php#marketing'); ?>">Marketing Digital</a></li>
                            <li><a href="<?php echo url('pages/services.php#development'); ?>">Desenvolvimento Web</a></li>
                            <li><a href="<?php echo url('pages/services.php#seo'); ?>">SEO & SEM</a></li>
                            <li><a href="<?php echo url('pages/services.php#social'); ?>">Redes Sociais</a></li>
                            <li><a href="<?php echo url('pages/services.php#consulting'); ?>">Consultoria TI</a></li>
                        </ul>
                    </div>
                    <div class="links-column">
                        <h4>Empresa</h4>
                        <ul class="footer-links">
                            <li><a href="<?php echo url('pages/about.php'); ?>">Sobre Nós</a></li>
                            <li><a href="<?php echo url('pages/portfolio.php'); ?>">Portfólio</a></li>
                            <li><a href="<?php echo url('pages/blog.php'); ?>">Blog</a></li>
                            <li><a href="<?php echo url('pages/contact.php'); ?>">Contactos</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CTA e Localização -->
            <div class="footer-section">
                <div class="footer-cta">
                    <h3>Pronto para Iniciar?</h3>
                    <p>Vamos discutir o seu projecto.</p>
                    <a href="<?php echo url('pages/contact.php'); ?>" class="btn btn-primary btn-small">Contactar Agora</a>
                </div>

                <div class="footer-location">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Bairro Capolo II, Kin Ribeiro<br>Luanda, Angola</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <p class="copyright">&copy; 2025 BDZ DIGITAL TEC. Todos os direitos reservados.</p>
                <div class="footer-legal">
                    <a href="<?php echo url('pages/privacy.php'); ?>" class="nav-link">Privacidade</a>
                    <a href="<?php echo url('pages/terms.php'); ?>" class="nav-link">Termos</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="<?= BASE_URL ?>assets/js/main.js" defer></script>
<script src="<?= BASE_URL ?>assets/js/servicos.js" defer></script>
<script src="<?= BASE_URL ?>assets/js/portfolio.js" defer></script>
<script src="<?= BASE_URL ?>assets/js/contact.js" defer></script>
<script src="<?= BASE_URL ?>assets/js/about.js" defer></script>
<script src="<?= BASE_URL ?>assets/js/blog.js" defer></script>
</body>

</html>