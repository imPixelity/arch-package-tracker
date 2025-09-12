<?php
session_start();

foreach ($_SESSION['packages'] as $key => $package) {
    if ($package['id'] === $_GET['id']) {
        unset($_SESSION['packages'][$key]);
    }
}

header('Location: /index.php');
