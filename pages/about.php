<?php
$page_title = "Sobre Nós";
$page_description = "Conheça a BDZ DIGITAL TEC - nossa missão, valores e a equipa que faz a diferença no mundo digital.";
include_once '../includes/header.php';
?>

<!-- Hero Section -->
<section class="about-hero">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Sobre a <span class="highlight">BDZ DIGITAL TEC</span></h1>
            <p class="hero-description">
                Há 5 anos transformamos ideias em soluções digitais inovadoras.
                Somos a ponte entre a tecnologia e o sucesso do seu negócio.
            </p>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="mission-section">
    <div class="container">
        <div class="mission-grid">
            <div class="mission-card">
                <div class="mission-icon">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3>Missão</h3>
                <p>Potencializar o crescimento de negócios através de soluções digitais inovadoras,
                    oferecendo serviços de excelência em marketing e tecnologia.</p>
            </div>

            <div class="mission-card">
                <div class="mission-icon">
                    <i class="fas fa-eye"></i>
                </div>
                <h3>Visão</h3>
                <p>Ser referência em Angola em soluções digitais integradas,
                    reconhecida pela qualidade, inovação e resultados dos nossos clientes.</p>
            </div>

            <div class="mission-card">
                <div class="mission-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Valores</h3>
                <p>Inovação, Qualidade, Transparência, Parceria e Resultados.
                    São estes os pilares que guiam o nosso trabalho diário.</p>
            </div>
        </div>
    </div>
</section>

<!-- Company Story -->
<section class="story-section">
    <div class="container">
        <div class="story-content">
            <div class="story-text">
                <h2>Nossa História</h2>
                <p>
                    Fundada em 2025, a BDZ DIGITAL TEC nasceu da paixão por tecnologia
                    e da visão de que todas as empresas, independentemente do tamanho,
                    merecem ter presença digital de excelência.
                </p>
                <p>
                    Começámos como uma pequena equipa de 3 pessoas e hoje contamos com
                    50 profissionais especializados, entregando mais de 150 projetos
                    de sucesso em todo o país.
                </p>
                <div class="story-stats">
                    <div class="story-stat">
                        <div class="stat-number" data-count="1">0</div>
                        <div class="stat-label">Anos de Experiência</div>
                    </div>
                    <div class="story-stat">
                        <div class="stat-number" data-count="15">0</div>
                        <div class="stat-label">Profissionais</div>
                    </div>
                    <div class="story-stat">
                        <div class="stat-number" data-count="150">0</div>
                        <div class="stat-label">Projetos</div>
                    </div>
                </div>
            </div>
            <div class="story-image">
                <img src="<?php echo asset('img/about-story.webp'); ?>" alt="Nossa Equipa">
            </div>
        </div>
    </div>
</section>

<!-- Team Overview -->
<section class="team-overview">
    <div class="container">
        <div class="section-header">
            <h2>Nossa Equipa</h2>
            <p>50 profissionais dedicados, unidos pela paixão por tecnologia e resultados.</p>
        </div>

        <div class="team-stats">
            <div class="team-stat">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number" data-count="8">0</div>
                    <div class="stat-label">Departamentos</div>
                </div>
            </div>

            <div class="team-stat">
                <div class="stat-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number" data-count="85%"></div>
                    <div class="stat-label">Mestrados/Pós-graduações</div>
                </div>
            </div>

            <div class="team-stat">
                <div class="stat-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number" data-count="5">0</div>
                    <div class="stat-label">Línguas Faladas</div>
                </div>
            </div>

            <div class="team-stat">
                <div class="stat-icon">
                    <i class="fas fa-award"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number" data-count="25">0</div>
                    <div class="stat-label">Certificações</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Departments -->
<section class="departments-section">
    <div class="container">
        <div class="section-header">
            <h2>Nossos Departamentos</h2>
            <p>Equipas especializadas trabalhando em sinergia para o seu sucesso.</p>
        </div>

        <div class="departments-grid">
            <div class="department-card">
                <div class="department-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Desenvolvimento</h3>
                <p>15 especialistas em tecnologias web e mobile</p>
                <div class="department-tech">
                    <span>React</span>
                    <span>Node.js</span>
                    <span>PHP</span>
                </div>
            </div>

            <div class="department-card">
                <div class="department-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Marketing Digital</h3>
                <p>12 estrategistas de crescimento digital</p>
                <div class="department-tech">
                    <span>SEO</span>
                    <span>Google Ads</span>
                    <span>Analytics</span>
                </div>
            </div>

            <div class="department-card">
                <div class="department-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3>Design & UX/UI</h3>
                <p>8 designers focados em experiência do usuário</p>
                <div class="department-tech">
                    <span>Figma</span>
                    <span>Adobe CC</span>
                    <span>Prototyping</span>
                </div>
            </div>

            <div class="department-card">
                <div class="department-icon">
                    <i class="fas fa-share-alt"></i>
                </div>
                <h3>Redes Sociais</h3>
                <p>6 especialistas em conteúdo e comunidade</p>
                <div class="department-tech">
                    <span>Instagram</span>
                    <span>LinkedIn</span>
                    <span>Facebook</span>
                </div>
            </div>

            <div class="department-card">
                <div class="department-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3>SEO & SEM</h3>
                <p>5 analistas de performance e posicionamento</p>
                <div class="department-tech">
                    <span>Google SEO</span>
                    <span>Keyword Research</span>
                    <span>Analytics</span>
                </div>
            </div>

            <div class="department-card">
                <div class="department-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Consultoria</h3>
                <p>4 consultores estratégicos em tecnologia</p>
                <div class="department-tech">
                    <span>Estratégia</span>
                    <span>Planejamento</span>
                    <span>Análise</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Team -->
<section class="leadership-section">
    <div class="container">
        <div class="section-header">
            <h2>Liderança</h2>
            <p>Conheça a equipa que guia a BDZ DIGITAL TEC</p>
        </div>

        <div class="leadership-grid">
            <div class="leader-card">
                <div class="leader-avatar">
                    <div class="avatar-initials">MJ</div>
                </div>
                <h3>Jão Baptista D. de Novais</h3>
                <p class="leader-role">CEO & Fundador</p>
                <p class="leader-bio">&hellip;</p>
            </div>

            <div class="leader-card">
                <div class="leader-avatar">
                    <div class="avatar-initials">LZC</div>
                </div>
                <h3>Laurindo Zindula Capitão</h3>
                <p class="leader-role">CFO</p>
                <p class="leader-bio">&hellip;</p>
            </div>

            <div class="leader-card">
                <div class="leader-avatar">
                    <div class="avatar-initials">VM</div>
                </div>
                <h3>Vivaldo Massanda</h3>
                <p class="leader-role">CTO</p>
                <p class="leader-bio">&hellip;</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="about-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Vamos Trabalhar Juntos?</h2>
            <p>
                Estamos prontos para entender o seu projeto e mostrar como podemos
                ajudar o seu negócio a crescer no mundo digital.
            </p>
            <div class="cta-buttons">
                <a href="<?php echo url('pages/contact.php'); ?>" class="btn btn-primary">
                    Falar Connosco
                </a>
                <a href="<?php echo url('pages/portfolio.php'); ?>" class="btn btn-outline">
                    Ver Nosso Trabalho
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once '../includes/footer.php' ?>