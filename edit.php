<?php
session_start();

// if user try to find id via url
if (!isset($_GET['id']) || $_GET['id'] === '') {
    header('Location: /index.php?error=invalid_id');
}

$found = false;
foreach ($_SESSION['packages'] as $package) {
    if ($package['id'] === $_GET['id']) {
        $package_name = $package['package-name'];
        $category = $package['category'];
        $source = $package['source'];
        $notes = $package['notes'];
        $found = true;
        break;
    }
}

// package not found
if (!$found) {
    header('Location: /index.php?error=package_not_found');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/edit.css">
    <title>Arch Package Tracker</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <h1>Edit Package</h1>
            <form action="edit-process.php" method="post">
                <input type="hidden" name="id" value="<?= htmlspecialchars($_GET['id']) ?>">
                <table>
                    <tr>
                        <td>
                            <label for="package-name" class="required">Package Name</label>
                        </td>
                        <td>
                            <input type="text" name="package-name" id="package-name" required value="<?= htmlspecialchars($package_name) ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="category">Category</label>
                        </td>
                        <td>
                            <input type="text" name="category" id="category" value="<?= htmlspecialchars($category) ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="source" class="required">Source</label>
                        </td>
                        <td>
                            <input type="text" name="source" id="source" required value="<?= htmlspecialchars($source) ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="notes">Notes</label>
                        </td>
                        <td>
                            <input type="text" name="notes" id="notes" value="<?= htmlspecialchars($notes) ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><a href="index.php" class="back-button">&larr; Back</a></td>
                        <td>
                            <input type="submit" value="Submit" class="submit-button">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>

</html>