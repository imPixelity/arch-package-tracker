<?php
session_start();

foreach ($_SESSION['packages'] as $package) {
    if ($package['id'] === $_GET['id']) {
        $package_name = $package['package-name'];
        $category = $package['category'];
        $source = $package['source'];
        $notes = $package['notes'];
        break;
    }
}
?>

<form action="edit-process.php" method="post">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <label>Package Name:
        <input type="text" name="package-name" value="<?= $package_name ?>">
    </label>
    <br>
    <label>Category:
        <input type="text" name="category" value="<?= $category ?>">
    </label>
    <br>
    <label>Source:
        <input type="text" name="source" value="<?= $source ?>">
    </label>
    <br>
    <label>Notes:
        <input type="text" name="notes" value="<?= $notes ?>">
    </label>
    <br>
    <input type="submit" value="Submit">
</form>