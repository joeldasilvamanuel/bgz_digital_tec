<?php
// includes/config.php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Configurações do site
define('SITE_NAME', 'BDZ DIGITAL TEC');
define('SITE_DESCRIPTION', 'Especialistas em Marketing Digital e Soluções em Tecnologia');

// Caminho
define('BASE_URL', 'http://localhost/bdz-site/');

// Configurações da base de dados (não tem mas fica só já assim por agora)
define('BD_HOST', '');
define('BD_NAME', '');
define('BD_USER', '');
define('BDPASS', '');

// Timezone
date_default_timezone_set('Africa/Luanda');

// Funções para URLs e Assets
function url($path = '') {
    return BASE_URL . ltrim($path, '/');
}

function asset($path) {
    return BASE_URL . 'assets/' . ltrim($path, '/');
}
