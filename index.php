<?php
session_start();

// init packages if not exist
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
                            <td><?= htmlspecialchars($package['package-name']) ?></td>
                            <td><?= htmlspecialchars($package['category']) ?></td>
                            <td><?= htmlspecialchars($package['source']) ?></td>
                            <td><?= htmlspecialchars($package['notes']) ?></td>
                            <td class="edit-box">
                                <a href="edit.php?id=<?= htmlspecialchars($package['id']) ?>" class="edit-button">Edit</a>
                            </td>
                            <td class="delete-box">
                                <a href="delete.php?id=<?= htmlspecialchars($package['id']) ?>" class="delete-button" onclick="return confirm('Confirm to delete package');">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>