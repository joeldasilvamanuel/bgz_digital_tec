<?php
// index.php
include_once 'includes/config.php';
include_once 'includes/header.php';

// Página dinâmica
$page = $_GET['page'] ?? 'home';
$file = "pages/$page.php";

if(file_exists($file)) {
    include $file;
} else {
    include 'pages/404.php';
}

include_once 'includes/footer.php';