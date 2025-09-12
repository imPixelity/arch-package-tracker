<?php
session_start();

foreach ($_SESSION['packages'] as &$package) {
    if ($package['id'] === $_POST['id']) {
        $package['package-name'] = $_POST['package-name'];
        $package['category'] = $_POST['category'];
        $package['source'] = $_POST['source'];
        $package['notes'] = $_POST['notes'];
        break;
    }
}

header('Location: /index.php');
