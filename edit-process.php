<?php
session_start();

$id = isset($_POST['id']) ? $_POST['id'] : '';
$package_name = isset($_POST['package-name']) ? trim($_POST['package-name']) : '';
$category = isset($_POST['category']) ? trim($_POST['category']) : '';
$source = isset($_POST['source']) ? trim($_POST['source']) : '';
$notes = isset($_POST['notes']) ? trim($_POST['notes']) : '';

if ($package_name === '' || $source === '') {
    header("Location: /edit.php?id={$id}&error=missing_fields");
    exit;
}

foreach ($_SESSION['packages'] as $k => $package) {
    if ($package['id'] === $id) {
        $_SESSION['packages'][$k]['package-name'] = htmlspecialchars($package_name);
        $_SESSION['packages'][$k]['category'] = htmlspecialchars($category);
        $_SESSION['packages'][$k]['source'] = htmlspecialchars($source);
        $_SESSION['packages'][$k]['notes'] = htmlspecialchars($notes);
        break;
    }
}

header('Location: /index.php');
exit;
