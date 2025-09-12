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
                <a href="add.php" class="add-button">Add data</a>
            </div>

            <table>
                <tr>
                    <th>PACKAGE NAME</th>
                    <th>CATEGORY</th>
                    <th>SOURCE</th>
                    <th>NOTES</th>
                    <th colspan="2">ACTIONS</th>
                </tr>
                <?php foreach ($_SESSION['packages'] as $package) { ?>
                    <tr>
                        <td><?= $package['package-name'] ?></td>
                        <td><?= $package['category'] ?></td>
                        <td><?= $package['source'] ?></td>
                        <td><?= $package['notes'] ?></td>
                        <td><a href="edit.php?id=<?= $package['id'] ?>">edit</a></td>
                        <td><a href="delete.php?id=<?= $package['id'] ?>">delete</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>