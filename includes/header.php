<?php
include_once(__DIR__ . '/config.php');
?>
<!DOCTYPE html>
<html lang="pt-ao">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> - <?php echo SITE_DESCRIPTION; ?></title>

    <!-- Meta tags SEO -->
    <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">
    <meta name="keywords"
        content="marketing digital, desenvolvimento web, TI, soluções tecnológicas, SEO, redes sociais">
    <meta name="author" content="<?php echo SITE_NAME; ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo asset('img/BDZ-LOGO.jpg'); ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- CSS Principal -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
    <!-- CSS Serviços -->
    <link rel="stylesheet" href="<?php echo asset('css/servicos.css'); ?>">
    <!-- CSS Portfólio -->
    <link rel="stylesheet" href="<?php echo asset('css/portfolio.css'); ?>">
    <!-- CSS Contactos -->
    <link rel="stylesheet" href="<?php echo asset('css/contact.css'); ?>">
    <!-- CSS Sobre Nós -->
    <link rel="stylesheet" href="<?php echo asset('css/about.css'); ?>">
    <!-- CSS Blog -->
    <link rel="stylesheet" href="<?php echo asset('css/blog.css'); ?>">
    <!-- CSS Nossa Equipa -->
    <link rel="stylesheet" href="<?php echo asset('css/team.css'); ?>">
    <!-- CSS Politica de Privacidade & Termos -->
    <link rel="stylesheet" href="<?php echo asset('css/privacy_terms.css'); ?>">
</head>

<body>
    <!-- Navigation -->
    <nav class="main-nav">
        <div class="nav-container">
            <a href="<?php echo BASE_URL; ?>" class="logo">
                <img src="<?php echo asset('img/BDZ-LOGO.jpg'); ?>" alt="<?php echo SITE_NAME; ?>" class="logo-img">
                <span class="logo-text"><?php echo SITE_NAME; ?></span>
            </a>

            <!-- Hamburger Menu -->
            <div class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="nav-menu" id="navMenu">
                <ul class="nav-links">
                    <li><a href="<?php echo BASE_URL; ?>" class="nav-link">Home</a></li>
                    <li><a href="<?php echo url('pages/services.php'); ?>" class="nav-link">Serviços</a></li>
                    <li><a href="<?php echo url('pages/portfolio.php'); ?>" class="nav-link">Portfólio</a></li>
                    <li><a href="<?php echo url('pages/about.php'); ?>" class="nav-link">Sobre Nós</a></li>
                    <li><a href="<?php echo url('pages/blog.php'); ?>" class="nav-link">Blog</a></li>
                    <li><a href="<?php echo url('pages/contact.php'); ?>" class="nav-link">Contactos</a></li>

                    <!-- WhatsApp Button no lugar do Login -->
                    <li class="whatsapp-item">
                        <a href="https://wa.me/244937486436" class="nav-link whatsapp-btn" target="_blank">
                            <span class="whatsapp-icon"></span>
                            WhatsApp
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>