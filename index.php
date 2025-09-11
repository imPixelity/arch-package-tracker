<?php
session_start();

if (!isset($_SESSION['packages'])) {
    $_SESSION['packages'] = [];
}
?>

<a href="add.php">Add data</a>
<a href="delete.php">Delete session</a>

<table>
    <?php foreach ($_SESSION['packages'] as $package) { ?>
        <tr>
            <td><?= $package['package-name'] ?></td>
            <td><?= $package['category'] ?></td>
            <td><?= $package['source'] ?></td>
            <td><?= $package['notes'] ?></td>
        </tr>
    <?php } ?>
</table>