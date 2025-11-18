<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-slider" id="heroSlider">
        <!-- Slide 1 -->
        <div class="slide active">
            <div class="slide-content">
                <div class="container">
                    <div class="hero-text">
                        <h1 class="hero-title">Transformamos Ideias em <span class="highlight">Soluções Digitais</span>
                        </h1>
                        <p class="hero-description">
                            Especialistas em marketing digital e desenvolvimento tecnológico.
                            Potencializamos o seu negócio com estratégias inovadoras.
                        </p>
                        <div class="hero-buttons">
                            <a href="<?php echo url('pages/services.php'); ?>" class="btn btn-primary">Nossos
                                Serviços</a>
                            <a href="<?php echo url('pages/contact.php'); ?>" class="btn btn-secondary">Fale
                                Connosco</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-bg" style="background-image: url('<?= BASE_URL ?>assets/img/hero-bg1.jpeg');"></div>
        </div>

        <!-- Slide 2 -->
        <div class="slide">
            <div class="slide-content">
                <div class="container">
                    <div class="hero-text">
                        <h1 class="hero-title">Inovação em <span class="highlight">Tecnologia</span></h1>
                        <p class="hero-description">
                            Desenvolvemos soluções personalizadas que impulsionam
                            o crescimento do seu negócio no mundo digital.
                        </p>
                        <div class="hero-buttons">
                            <a href="<?php echo url('pages/portfoli.php'); ?>" class="btn btn-primary">Ver Portfólio</a>
                            <a href="<?php echo url('pages/about.php'); ?>" class="btn btn-secondary">Conheça-nos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-bg" style="background-image: url('<?= BASE_URL ?>assets/img/hero-bg2.jpg');"></div>
        </div>

        <!-- Slide 3 -->
        <div class="slide">
            <div class="slide-content">
                <div class="container">
                    <div class="hero-text">
                        <h1 class="hero-title">Resultados que <span class="highlight">Impressionam</span></h1>
                        <p class="hero-description">
                            Mais de 150 projetos entregues com excelência.
                            Junte-se aos nossos clientes satisfeitos.
                        </p>
                        <div class="hero-buttons">
                            <a href="<?php echo url('pages/contact.php'); ?>" class="btn btn-primary">Solicitar
                                Orçamento</a>
                            <a href="<?php echo url('pages/blog.php'); ?>" class="btn btn-secondary">Ler Blog</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-bg" style="background-image: url('<?= BASE_URL ?>assets/img/hero-bg3.jpg');"></div>
        </div>
    </div>

    <div class="slider-controls">
        <button class="slider-prev" id="sliderPrev">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="slider-next" id="sliderNext">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    <div class="slider-dots" id="sliderDots"></div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number" data-count="1">0</div>
                    <div class="stat-label">Projetos Concluídos</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number" data-count="15">0</div>
                    <div class="stat-label">Profissionais</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-smile"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number" data-count="5">0</div>
                    <div class="stat-label">Clientes Satisfeitos</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number" data-count="1">0</div>
                    <div class="stat-label">Anos de Experiência</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Nossos Serviços</h2>
            <p class="section-description">
                Oferecemos soluções completas em marketing digital e tecnologia
                para impulsionar o seu negócio.
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="service-title">Marketing Digital</h3>
                <p class="service-description">
                    Estratégias personalizadas para aumentar sua visibilidade online
                    e converter visitantes em clientes.
                </p>
                <ul class="service-features">
                    <li>SEO & SEM</li>
                    <li>Email Marketing</li>
                    <li>Análise de Dados</li>
                </ul>
                <a href="/pages/services.php#marketing" class="service-link">Saber Mais</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="service-title">Desenvolvimento Web</h3>
                <p class="service-description">
                    Sites e aplicações web modernas, responsivas e otimizadas
                    para melhor performance.
                </p>
                <ul class="service-features">
                    <li>Websites Responsivos</li>
                    <li>E-commerce</li>
                    <li>Aplicações Web</li>
                </ul>
                <a href="/pages/services.php#development" class="service-link">Saber Mais</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="service-title">SEO & SEM</h3>
                <p class="service-description">
                    Otimização para motores de busca e campanhas de publicidade
                    para maximizar seu ROI.
                </p>
                <ul class="service-features">
                    <li>Otimização SEO</li>
                    <li>Google Ads</li>
                    <li>Analytics</li>
                </ul>
                <a href="/pages/services.php#seo" class="service-link">Saber Mais</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-share-alt"></i>
                </div>
                <h3 class="service-title">Redes Sociais</h3>
                <p class="service-description">
                    Gestão completa das suas redes sociais com conteúdo estratégico
                    para engajar sua audiência.
                </p>
                <ul class="service-features">
                    <li>Gestão de Redes</li>
                    <li>Conteúdo Visual</li>
                    <li>Community Management</li>
                </ul>
                <a href="/pages/services.php#social" class="service-link">Saber Mais</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3 class="service-title">Design & Branding</h3>
                <p class="service-description">
                    Identidade visual marcante e designs que comunicam
                    a essência da sua marca.
                </p>
                <ul class="service-features">
                    <li>Identidade Visual</li>
                    <li>UI/UX Design</li>
                    <li>Materiais Gráficos</li>
                </ul>
                <a href="/pages/services.php#design" class="service-link">Saber Mais</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="service-title">Consultoria TI</h3>
                <p class="service-description">
                    Assessoria especializada em tecnologia para modernizar
                    e otimizar seus processos.
                </p>
                <ul class="service-features">
                    <li>Auditoria Digital</li>
                    <li>Plano Estratégico</li>
                    <li>Implementação</li>
                </ul>
                <a href="/pages/services.php#consulting" class="service-link">Saber Mais</a>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Preview -->
<section class="portfolio-preview">
    <!-- <img src="/assets/img/portfolio1.jpg" alt="Website Corporativo"> -->
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Trabalhos em Destaque</h2>
            <p class="section-description">
                Conheça alguns dos nossos projetos mais recentes e bem-sucedidos.
            </p>
        </div>

        <div class="portfolio-carousel" id="portfolioCarousel">
            <div class="portfolio-item">
                <div class="portfolio-image">
                    <img src="<?= BASE_URL ?>assets/img/loja.jpeg" alt="Projeto E-commerce">
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <h3>Loja Online Fashion</h3>
                            <p>E-commerce completo com integração de pagamentos</p>
                            <a href="/pages/portfolio.php#project1" class="portfolio-link">Ver Projeto</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="portfolio-image">
                    <img src="<?= BASE_URL ?>assets/img/fitness.jpeg" alt="App Mobile">
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <h3>App Fitness</h3>
                            <p>Aplicação mobile com tracking de exercícios</p>
                            <a href="/pages/portfolio.php#project2" class="portfolio-link">Ver Projeto</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="portfolio-image">
                    <img src="<?= BASE_URL ?>assets/img/portal-corp.jpeg" alt="Website Corporativo">
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <h3>Portal Corporativo</h3>
                            <p>Website institucional com CMS personalizado</p>
                            <a href="/pages/portfolio.php#project3" class="portfolio-link">Ver Projeto</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="portfolio-image">
                    <img src="<?= BASE_URL ?>assets/img/campanhas-digitais.jpeg" alt="Campanha Marketing">
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <h3>Campanha Digital</h3>
                            <p>Estratégia completa de marketing digital</p>
                            <a href="/pages/portfolio.php#project4" class="portfolio-link">Ver Projeto</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="portfolio-image">
                    <img src="<?= BASE_URL ?>assets/img/branding.jpeg" alt="Identidade Visual e Branding">
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <h3>Identidade Visual & Branding</h3>
                            <p>Criação de logótipos, guias de marca e design corporativo que refletem a essência da sua
                                empresa.</p>
                            <a href="/pages/portfolio.php#project5" class="portfolio-link">Ver Projeto</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="portfolio-image">
                    <img src="<?= BASE_URL ?>assets/img/gta-6.jpeg" alt="Identidade Visual e Branding">
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <h3>Actividades Gamers</h3>
                            <p>Momentos de diversão e muita emoção.</p>
                            <a href="/pages/portfolio.php#project5" class="portfolio-link">Ver Projeto</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="port">
            <a href="<?php echo url('pages/portfolio.php'); ?>" class="btn btn-outline">Ver Todos os Projetos</a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">O que Dizem os Nossos Clientes</h2>
            <p class="section-description">
                Feedback de alguns dos nossos clientes satisfeitos.
            </p>
        </div>

        <div class="testimonials-carousel" id="testimonialsCarousel">
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <div class="testimonial-text">
                        "A BDZ DIGITAL TEC transformou completamente a nossa presença online.
                        Os resultados superaram todas as expectativas!"
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <!-- <img src="/assets/img/client1.jpg" alt="Maria Silva"> -->
                            <img src="<?= BASE_URL ?>assets/img/maria.jpeg" alt=" Maria Silva">
                        </div>
                        <div class="author-info">
                            <h4>Maria Silva</h4>
                            <p>CEO, FashionStore</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-content">
                    <div class="testimonial-text">
                        "Profissionalismo excecional e entrega além do combinado.
                        Recomendo a todos que procuram resultados reais."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="<?= BASE_URL ?>assets/img/joão.jpeg" alt="João Santos">
                        </div>
                        <div class="author-info">
                            <h4>João Santos</h4>
                            <p>Director, TechSolutions</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-item">
                <div class="testimonial-content">
                    <div class="testimonial-text">
                        "A equipa da BDZ é incrível! Entregaram um projeto complexo
                        dentro do prazo e com qualidade superior."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="<?= BASE_URL ?>assets/img/ana.jpeg" alt="Ana Costa">
                        </div>
                        <div class="author-info">
                            <h4>Ana Costa</h4>
                            <p>Fundadora, GreenLife</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Pronto para Transformar o Seu Negócio?</h2>
            <p class="cta-description">
                Vamos conversar sobre como podemos ajudar a alcançar os seus objetivos digitais.
            </p>
            <div class="cta-buttons">
                <a href="<?php echo url('pages/contact.php'); ?>" class="btn btn-primary">Solicitar Orçamento</a>
                <a href="<?php echo url('pages/services.php'); ?>" class="btn btn-outline">Conhecer Serviços</a>
            </div>
        </div>
    </div>
</section>