<?php
session_start();
$page = $_GET['p'] ?? 'home';
$page = strip_tags($page);

checkPageExist(sprintf(__DIR__ . '/../%s.php', strtolower($page)));

function checkPageExist(string$pageName) {
    require file_exists($pageName) ? $pageName : __DIR__ . '/../404.php';
}

