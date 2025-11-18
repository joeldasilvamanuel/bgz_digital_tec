<?php
$page_title = "Nossos Serviços";
$page_description = "Descubra nossa gama completa de serviços em marketing digital e desenvolvimento tecnológico.";
include_once '../includes/header.php';
?>

<!-- Hero Section -->
<section class="services-hero">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Serviços <span class="highlight">Especializados</span></h1>
            <p class="hero-description">
                Oferecemos soluções completas em marketing digital e tecnologia para impulsionar
                o seu negócio no mundo digital.
            </p>
            <div class="hero-stats">
                <div class="stat">
                    <div class="stat-number" data-count="6">0</div>
                    <div class="stat-label">Áreas de Especialização</div>
                </div>
                <div class="stat">
                    <div class="stat-number" data-count="5">0</div>
                    <div class="stat-label">Projetos Entregues</div>
                </div>
                <div class="stat">
                    <div class="stat-number" data-count="5">0</div>
                    <div class="stat-label">Clientes Satisfeitos</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Navigation -->
<!-- <section class="services-nav">
    <div class="container">
        <div class="services-nav-container">
            <a href="#marketing" class="nav-item active" data-service="marketing">
                <i class="fas fa-chart-line"></i>
                <span>Marketing Digital</span>
            </a>
            <a href="#development" class="nav-item" data-service="development">
                <i class="fas fa-code"></i>
                <span>Desenvolvimento</span>
            </a>
            <a href="#seo" class="nav-item" data-service="seo">
                <i class="fas fa-search"></i>
                <span>SEO & SEM</span>
            </a>
            <a href="#social" class="nav-item" data-service="social">
                <i class="fas fa-share-alt"></i>
                <span>Redes Sociais</span>
            </a>
            <a href="#design" class="nav-item" data-service="design">
                <i class="fas fa-paint-brush"></i>
                <span>Design & Branding</span>
            </a>
            <a href="#consulting" class="nav-item" data-service="consulting">
                <i class="fas fa-headset"></i>
                <span>Consultoria TI</span>
            </a>
        </div>
    </div>
</section> -->

<!-- Marketing Digital Service -->
<section id="marketing" class="service-detail active">
    <div class="container">
        <div class="service-header">
            <div class="service-icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="service-info">
                <h2>Marketing Digital</h2>
                <p class="service-tagline">Estratégias inteligentes para crescimento online</p>
            </div>
        </div>

        <div class="service-content">
            <div class="service-overview">
                <h3>Visão Geral</h3>
                <p>
                    Desenvolvemos estratégias de marketing digital personalizadas que conectam sua marca
                    ao público certo, gerando leads qualificados e aumentando suas vendas.
                </p>
            </div>

            <div class="service-features">
                <h3>O que Oferecemos</h3>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h4>Publicidade Online</h4>
                        <p>Campanhas no Google Ads, Facebook Ads e Instagram Ads com segmentação precisa.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4>Email Marketing</h4>
                        <p>Automação de emails e newsletters para nutrir leads e fidelizar clientes.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h4>Análise de Dados</h4>
                        <p>Relatórios detalhados e análise de performance para otimização contínua.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-funnel-dollar"></i>
                        </div>
                        <h4>Conversão & CRO</h4>
                        <p>Otimização de taxas de conversão e experiência do usuário.</p>
                    </div>
                </div>
            </div>

            <div class="service-process">
                <h3>Como Trabalhamos</h3>
                <div class="process-steps">
                    <div class="process-step">
                        <div class="step-number">01</div>
                        <div class="step-content">
                            <h4>Análise & Diagnóstico</h4>
                            <p>Avaliamos seu negócio, concorrência e objetivos para criar uma estratégia personalizada.
                            </p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">02</div>
                        <div class="step-content">
                            <h4>Plano Estratégico</h4>
                            <p>Desenvolvemos um roadmap detalhado com metas, prazos e métricas de sucesso.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">03</div>
                        <div class="step-content">
                            <h4>Implementação</h4>
                            <p>Executamos as campanhas e estratégias definidas no plano.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">04</div>
                        <div class="step-content">
                            <h4>Otimização Contínua</h4>
                            <p>Monitoramos resultados e ajustamos estratégias para maximizar ROI.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-cta">
                <div class="cta-content">
                    <h3>Pronto para Transformar seu Marketing Digital?</h3>
                    <p>Vamos conversar sobre como podemos ajudar seu negócio a crescer.</p>
                    <div class="cta-buttons">
                        <a href="<?php echo url('pages/contact.php?service=marketing'); ?>" class="btn btn-primary">
                            Solicitar Orçamento
                        </a>
                        <a href="<?php echo url('pages/portfolio.php#marketing'); ?>" class="btn btn-outline">
                            Ver Cases de Sucesso
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Desenvolvimento Web Service -->
<section id="development" class="service-detail">
    <div class="container">
        <div class="service-header">
            <div class="service-icon">
                <i class="fas fa-code"></i>
            </div>
            <div class="service-info">
                <h2>Desenvolvimento Web</h2>
                <p class="service-tagline">Soluções tecnológicas sob medida para seu negócio</p>
            </div>
        </div>

        <div class="service-content">
            <div class="service-overview">
                <h3>Visão Geral</h3>
                <p>
                    Criamos websites e aplicações web modernas, responsivas e de alto desempenho
                    que proporcionam a melhor experiência ao usuário.
                </p>
            </div>

            <div class="service-features">
                <h3>Nossas Soluções</h3>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h4>Websites Responsivos</h4>
                        <p>Sites adaptáveis a todos os dispositivos com design moderno e intuitivo.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h4>E-commerce</h4>
                        <p>Lojas online completas com sistemas de pagamento e gestão de inventário.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4>Aplicações Web</h4>
                        <p>Sistemas web personalizados para gestão de negócios e processos.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4>Manutenção & Suporte</h4>
                        <p>Atualizações, correções e suporte técnico contínuo.</p>
                    </div>
                </div>
            </div>

            <div class="technology-stack">
                <h3>Tecnologias que Utilizamos</h3>
                <div class="tech-grid">
                    <div class="tech-item">
                        <img src="<?php echo asset('img/tech/html5.svg'); ?>" alt="HTML5">
                        <span>HTML5</span>
                    </div>
                    <div class="tech-item">
                        <img src="<?php echo asset('img/tech/css3.svg'); ?>" alt="CSS3">
                        <span>CSS3</span>
                    </div>
                    <div class="tech-item">
                        <img src="<?php echo asset('img/tech/javascript.svg'); ?>" alt="JavaScript">
                        <span>JavaScript</span>
                    </div>
                    <div class="tech-item">
                        <img src="<?php echo asset('img/tech/php.svg'); ?>" alt="PHP">
                        <span>PHP</span>
                    </div>
                    <div class="tech-item">
                        <img src="<?php echo asset('img/tech/react.svg'); ?>" alt="React">
                        <span>React</span>
                    </div>
                    <div class="tech-item">
                        <img src="<?php echo asset('img/tech/nodejs.svg'); ?>" alt="Node.js">
                        <span>Node.js</span>
                    </div>
                </div>
            </div>

            <div class="service-cta">
                <div class="cta-content">
                    <h3>Precisa de uma Solução Web?</h3>
                    <p>Vamos desenvolver a plataforma perfeita para suas necessidades.</p>
                    <div class="cta-buttons">
                        <a href="<?php echo url('pages/contact.php?service=development'); ?>" class="btn btn-primary">
                            Falar com Especialista
                        </a>
                        <a href="<?php echo url('pages/portfolio.php#development'); ?>" class="btn btn-outline">
                            Ver Projetos Web
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SEO & SEM Service -->
<section id="seo" class="service-detail">
    <div class="container">
        <div class="service-header">
            <div class="service-icon">
                <i class="fas fa-search"></i>
            </div>
            <div class="service-info">
                <h2>SEO & SEM</h2>
                <p class="service-tagline">Aumente sua visibilidade nos motores de busca</p>
            </div>
        </div>

        <div class="service-content">
            <div class="service-overview">
                <h3>Visão Geral</h3>
                <p>
                    Combinamos estratégias de SEO orgânico e SEM pago para posicionar seu site
                    no topo dos resultados de pesquisa e atrair tráfego qualificado.
                </p>
            </div>

            <div class="seo-sem-comparison">
                <div class="comparison-grid">
                    <div class="comparison-item seo">
                        <h4>SEO (Orgânico)</h4>
                        <ul>
                            <li>Otimização técnica do website</li>
                            <li>Pesquisa de palavras-chave</li>
                            <li>Link building estratégico</li>
                            <li>Conteúdo otimizado</li>
                            <li>Resultados de longo prazo</li>
                        </ul>
                    </div>
                    <div class="comparison-item sem">
                        <h4>SEM (Pago)</h4>
                        <ul>
                            <li>Google Ads campaigns</li>
                            <li>Anúncios display</li>
                            <li>Remarketing</li>
                            <li>Resultados imediatos</li>
                            <li>Métricas em tempo real</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="service-cta">
                <div class="cta-content">
                    <h3>Quer Aparecer no Google?</h3>
                    <p>Vamos aumentar sua visibilidade e atrair mais clientes.</p>
                    <div class="cta-buttons">
                        <a href="<?php echo url('pages/contact.php?service=seo'); ?>" class="btn btn-primary">
                            Análise Gratuita
                        </a>
                        <a href="<?php echo url('pages/portfolio.php#seo'); ?>" class="btn btn-outline">
                            Cases de SEO
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional services would follow the same structure -->
<!-- For brevity, I'm showing 3 complete services -->

<!-- CTA Section -->
<section class="services-final-cta">
    <div class="container">
        <div class="final-cta-content">
            <h2>Não Encontrou o que Procurava?</h2>
            <p>
                Temos soluções personalizadas para cada necessidade. Entre em contacto
                e vamos desenvolver a estratégia perfeita para o seu negócio.
            </p>
            <div class="cta-buttons">
                <a href="<?php echo url('pages/contact.php'); ?>" class="btn btn-primary btn-large">
                    Falar com Consultor
                </a>
                <a href="<?php echo url('pages/portfolio.php'); ?>" class="btn btn-outline btn-large">
                    Ver Todos os Projetos
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once '../includes/footer.php'; ?>