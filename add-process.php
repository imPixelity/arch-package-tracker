<?php
session_start();

$id = uniqid();
$package_name = isset($_POST['package-name']) ? trim($_POST['package-name']) : '';
$category = isset($_POST['category']) ? trim($_POST['category']) : '';
$source = isset($_POST['source']) ? trim($_POST['source']) : '';
$notes = isset($_POST['notes']) ? trim($_POST['notes']) : '';

// required input validation
if ($package_name === '' || $source === '') {
    header('Location: /add.php?error=missing_fields');
    exit;
}

$_SESSION['packages'][] = [
    'id' => $id,
    'package-name' => htmlspecialchars($package_name),
    'category' => htmlspecialchars($category),
    'source' => htmlspecialchars($source),
    'notes' => htmlspecialchars($notes)
];

header('Location: /index.php');
exit;
