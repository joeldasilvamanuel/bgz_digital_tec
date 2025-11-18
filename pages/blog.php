<?php
include_once(__DIR__ . '/../includes/config.php');
include_once(__DIR__ . '/../includes/header.php');
?>

<!-- Blog Header -->
<section class="blog-header">
    <div class="container">
        <div class="blog-header-content">
            <h1>Blog BDZ Digital</h1>
            <p>Fique por dentro das últimas tendências em marketing digital, desenvolvimento web e tecnologia</p>
        </div>
    </div>
</section>

<!-- Blog Content -->
<section class="blog-main">
    <div class="container">
        <div class="blog-filters">
            <button class="filter-btn active" data-filter="all">Todos</button>
            <button class="filter-btn" data-filter="marketing">Marketing</button>
            <button class="filter-btn" data-filter="seo">SEO</button>
            <button class="filter-btn" data-filter="desenvolvimento">Desenvolvimento</button>
            <button class="filter-btn" data-filter="redes-sociais">Redes Sociais</button>
        </div>

        <div class="blog-grid" id="blogGrid">
            <!-- Artigo 1 -->
            <article class="blog-card" data-category="marketing">
                <div class="blog-card-image">
                    <img src="<?php echo BASE_URL; ?>assets/img/blog/marketing-digital.jpeg"
                        alt="Marketing Digital 2024"
                        onerror="this.src='<?php echo BASE_URL; ?>assets/img/placeholder.jpeg'">
                    <div class="blog-card-category">Marketing Digital</div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-date"><i class="fas fa-calendar"></i> 15 Jan 2024</span>
                        <span class="blog-read-time"><i class="fas fa-clock"></i> 5 min</span>
                    </div>
                    <h3 class="blog-card-title">Tendências de Marketing Digital para 2024</h3>
                    <p class="blog-card-excerpt">Descubra as estratégias que vão dominar o marketing digital este ano e
                        como preparar sua empresa para o sucesso.</p>
                    <div class="blog-card-footer">
                        <a href="<?php echo url('pages/services.php'); ?>#marketing" class="blog-read-more">
                            Ver Serviços Marketing <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Artigo 2 -->
            <article class="blog-card" data-category="seo">
                <div class="blog-card-image">
                    <img src="<?php echo BASE_URL; ?>assets/img/blog/seo-otimizacao.webp" alt="SEO e Otimização"
                        onerror="this.src='<?php echo BASE_URL; ?>assets/img/placeholder.jpg'">
                    <div class="blog-card-category">SEO</div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-date"><i class="fas fa-calendar"></i> 10 Jan 2024</span>
                        <span class="blog-read-time"><i class="fas fa-clock"></i> 7 min</span>
                    </div>
                    <h3 class="blog-card-title">Como Melhorar o SEO do Seu Site em 2024</h3>
                    <p class="blog-card-excerpt">Estratégias comprovadas para aumentar sua visibilidade nos motores de
                        busca e atrair mais tráfego qualificado.</p>
                    <div class="blog-card-footer">
                        <a href="<?php echo url('pages/services.php'); ?>#seo" class="blog-read-more">
                            Otimizar Meu SEO <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Artigo 3 -->
            <article class="blog-card" data-category="redes-sociais">
                <div class="blog-card-image">
                    <img src="<?php echo BASE_URL; ?>assets/img/blog/redes-sociais.jpg" alt="Redes Sociais"
                        onerror="this.src='<?php echo BASE_URL; ?>assets/img/placeholder.jpg'">
                    <div class="blog-card-category">Redes Sociais</div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-date"><i class="fas fa-calendar"></i> 5 Jan 2024</span>
                        <span class="blog-read-time"><i class="fas fa-clock"></i> 6 min</span>
                    </div>
                    <h3 class="blog-card-title">Estratégias de Conteúdo para Redes Sociais</h3>
                    <p class="blog-card-excerpt">Aprenda a criar conteúdo envolvente que converte seguidores em clientes
                        nas principais plataformas sociais.</p>
                    <div class="blog-card-footer">
                        <a href="<?php echo url('pages/services.php'); ?>#social" class="blog-read-more">
                            Potencializar Redes Sociais <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Artigo 4 -->
            <article class="blog-card" data-category="desenvolvimento">
                <div class="blog-card-image">
                    <img src="<?php echo BASE_URL; ?>assets/img/blog/desenvolvimento-web.jpeg" alt="Desenvolvimento Web"
                        onerror="this.src='<?php echo BASE_URL; ?>assets/img/placeholder.jpg'">
                    <div class="blog-card-category">Desenvolvimento</div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-date"><i class="fas fa-calendar"></i> 2 Jan 2024</span>
                        <span class="blog-read-time"><i class="fas fa-clock"></i> 8 min</span>
                    </div>
                    <h3 class="blog-card-title">Tecnologias Web que Você Precisa Conhecer</h3>
                    <p class="blog-card-excerpt">Um overview das tecnologias mais modernas e eficientes para
                        desenvolvimento web em 2024.</p>
                    <div class="blog-card-footer">
                        <a href="<?php echo url('pages/services.php'); ?>#development" class="blog-read-more">
                            Desenvolver Meu Projeto <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Artigo 5 -->
            <article class="blog-card" data-category="marketing">
                <div class="blog-card-image">
                    <img src="<?php echo BASE_URL; ?>assets/img/blog/ecommerce.jpeg" alt="E-commerce"
                        onerror="this.src='<?php echo BASE_URL; ?>assets/img/placeholder.jpg'">
                    <div class="blog-card-category">E-commerce</div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-date"><i class="fas fa-calendar"></i> 28 Dez 2023</span>
                        <span class="blog-read-time"><i class="fas fa-clock"></i> 5 min</span>
                    </div>
                    <h3 class="blog-card-title">Como Aumentar as Vendas do Seu E-commerce</h3>
                    <p class="blog-card-excerpt">Técnicas avançadas de conversão e experiência do usuário para
                        impulsionar suas vendas online.</p>
                    <div class="blog-card-footer">
                        <a href="<?php echo url('pages/services.php'); ?>#development" class="blog-read-more">
                            Criar Minha Loja Online <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Artigo 6 -->
            <article class="blog-card" data-category="desenvolvimento">
                <div class="blog-card-image">
                    <img src="<?php echo BASE_URL; ?>assets/img/blog/consultoria-ti.jpeg" alt="Consultoria TI"
                        onerror="this.src='<?php echo BASE_URL; ?>assets/img/placeholder.jpg'">
                    <div class="blog-card-category">Consultoria</div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-date"><i class="fas fa-calendar"></i> 20 Dez 2023</span>
                        <span class="blog-read-time"><i class="fas fa-clock"></i> 6 min</span>
                    </div>
                    <h3 class="blog-card-title">Por que Sua Empresa Precisa de Consultoria em TI</h3>
                    <p class="blog-card-excerpt">Entenda como a consultoria em tecnologia pode transformar os resultados
                        do seu negócio.</p>
                    <div class="blog-card-footer">
                        <a href="<?php echo url('pages/services.php'); ?>#consulting" class="blog-read-more">
                            Agendar Consultoria <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="blog-newsletter">
    <div class="container">
        <div class="newsletter-container">
            <div class="newsletter-content">
                <h3>Fique por Dentro das Novidades</h3>
                <p>Receba os melhores conteúdos sobre marketing digital e tecnologia directamente no seu email.</p>
                <form class="newsletter-form" id="newsletterForm">
                    <div class="input-group">
                        <input type="email" placeholder="Seu melhor email" required>
                        <button type="submit" class="btn btn-primary">
                            <span class="btn-text">Subscrever</span>
                            <span class="btn-loading">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include_once(__DIR__ . '/../includes/footer.php'); ?>