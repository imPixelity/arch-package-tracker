<?php
session_start();

if (!isset($_SESSION['packages'])) {
    $_SESSION['packages'] = [];
}
?>

<a href="add.php">Add data</a>

<table>
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