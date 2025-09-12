<?php
session_start();

if (!isset($_SESSION['packages'])) {
    $_SESSION['packages'] = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Arch Package Tracker</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <header>
                <img src="assets/img/logo.png" alt="">
                <h1>Package Tracker</h1>
            </header>

            <div class="section-add-button">
                <a href="add.php" class="add-button">Add Package</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Package Name</th>
                        <th>Category</th>
                        <th>Source</th>
                        <th>Notes</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($_SESSION['packages'] as $package) { ?>
                        <tr>
                            <td><?= $package['package-name'] ?></td>
                            <td><?= $package['category'] ?></td>
                            <td><?= $package['source'] ?></td>
                            <td><?= $package['notes'] ?></td>
                            <td class="edit-box"><a href="edit.php?id=<?= $package['id'] ?>" class="edit-button">Edit</a></td>
                            <td class="delete-box"><a href="delete.php?id=<?= $package['id'] ?>" class="delete-button">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>