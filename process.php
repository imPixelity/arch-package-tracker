<?php
session_start();

$package_name = $_POST['package-name'];
$category = $_POST['category'];
$source = $_POST['source'];
$notes = $_POST['notes'];

$_SESSION['packages'][] = ['package-name' => $package_name, 'category' => $category, 'source' => $source, 'notes' => $notes];
header('Location: /index.php');
