<?php
session_start();

if (!isset($_GET['id']) || $_GET['id'] === '') {
    header('Location: /index.php?error=invalid_id');
    exit;
}

foreach ($_SESSION['packages'] as $k => $package) {
    if ($package['id'] === $_GET['id']) {
        unset($_SESSION['packages'][$k]);
        break;
    }
}

// avoid gaps
$_SESSION['packages'] = array_values($_SESSION['packages']);
header('Location: /index.php');
exit;
