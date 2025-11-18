<?php
include_once(__DIR__ . '/../includes/config.php');
include_once(__DIR__ . '/../includes/header.php');
?>

<!-- Portfolio Header -->
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <h1>Nosso Portfólio</h1>
            <p>Descubra os projectos incríveis que desenvolvemos para os nossos clientes</p>
        </div>
    </div>
</section>

<!-- Portfolio Filter -->
<section class="portfolio-filter-section">
    <div class="container">
        <div class="portfolio-filters">
            <button class="filter-btn active" data-filter="all">Todos</button>
            <button class="filter-btn" data-filter="web">Websites</button>
            <button class="filter-btn" data-filter="ecommerce">E-commerce</button>
            <button class="filter-btn" data-filter="branding">Branding</button>
            <button class="filter-btn" data-filter="marketing">Marketing</button>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="portfolio-section">
    <div class="container">
        <div class="portfolio-grid">
            <!-- Project 1 -->
            <div class="portfolio-item" data-category="web">
                <div class="portfolio-image">
                    <img src="<?php echo asset('img/portfolio/website-empresarial.png'); ?>" alt="Website Empresarial"
                        loading="lazy">
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <h3>Website Empresarial Moderno</h3>
                            <p>Design responsivo e moderno para empresa de consultoria</p>
                            <div class="portfolio-tech">
                                <span>HTML5</span>
                                <span>CSS3</span>
                                <span>JavaScript</span>
                            </div>
                            <a href="#" class="portfolio-link">Ver Projecto</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="portfolio-item" data-category="ecommerce">
                <div class="portfolio-image">
                    <img src="<?php echo asset('img/portfolio/ecommerce-fashion.jpeg'); ?>" alt="E-commerce Fashion"
                        loading="lazy">
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <h3>Loja Online de Moda</h3>
                            <p>E-commerce completo com sistema de pagamentos integrado</p>
                            <div class="portfolio-tech">
                                <span>WordPress</span>
                                <span>WooCommerce</span>
                                <span>PHP</span>
                            </div>
                            <a href="#" class="portfolio-link">Ver Projecto</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="portfolio-item" data-category="branding">
                <div class="portfolio-image">
                    <img src="<?php echo asset('img/portfolio/identidade-visual.jpeg'); ?>" alt="Identidade Visual"
                        loading="lazy">
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <h3>Identidade Visual Corporativa</h3>
                            <p>Branding completo para startup de tecnologia</p>
                            <div class="portfolio-tech">
                                <span>Adobe Illustrator</span>
                                <span>Photoshop</span>
                            </div>
                            <a href="#" class="portfolio-link">Ver Projecto</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="portfolio-item" data-category="marketing">
                <div class="portfolio-image">
                    <img src="<?php echo asset('img/portfolio/campanha-social.jpeg'); ?>" alt="Campanha Social Media"
                        loading="lazy">
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <h3>Campanha Redes Sociais</h3>
                            <p>Estratégia de conteúdo e gestão de redes sociais</p>
                            <div class="portfolio-tech">
                                <span>Social Media</span>
                                <span>Content Marketing</span>
                            </div>
                            <a href="#" class="portfolio-link">Ver Projecto</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="portfolio-item" data-category="web">
                <div class="portfolio-image">
                    <img src="<?php echo asset('img/portfolio/aplicacao-web.jpeg'); ?>" alt="Aplicação Web"
                        loading="lazy">
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <h3>Aplicação Web Dashboard</h3>
                            <p>Sistema de gestão com painel administrativo</p>
                            <div class="portfolio-tech">
                                <span>React</span>
                                <span>Node.js</span>
                                <span>MongoDB</span>
                            </div>
                            <a href="#" class="portfolio-link">Ver Projecto</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="portfolio-item" data-category="ecommerce">
                <div class="portfolio-image">
                    <img src="<?php echo asset('img/portfolio/loja-electronica.jpeg'); ?>" alt="Loja Electrónica"
                        loading="lazy">
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <h3>E-commerce Electrónica</h3>
                            <p>Loja online com catálogo complexo e filtros avançados</p>
                            <div class="portfolio-tech">
                                <span>Magento</span>
                                <span>MySQL</span>
                                <span>jQuery</span>
                            </div>
                            <a href="#" class="portfolio-link">Ver Projecto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio CTA -->
<section class="portfolio-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Pronto para Transformar o Seu Projecto?</h2>
            <p>Vamos criar algo extraordinário juntos</p>
            <a href="<?php echo url('pages/contact.php'); ?>" class="btn btn-primary btn-large">Iniciar Projecto</a>
        </div>
    </div>
</section>

<?php include_once(__DIR__ . '/../includes/footer.php'); ?>