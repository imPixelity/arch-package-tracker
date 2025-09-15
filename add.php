<?php
// catch err
if (isset($_GET['error'])) {
    $err = htmlspecialchars($_GET['error']);
    echo "<script>alert('error, $err');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/add.css">
    <title>Arch Package Tracker</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <h1>Add Package</h1>
            <form action="add-process.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label for="package-name" class="required">Package Name</label>
                        </td>
                        <td>
                            <input type="text" name="package-name" id="package-name" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="category">Category</label>
                        </td>
                        <td>
                            <input type="text" name="category" id="category">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="source" class="required">Source</label>
                        </td>
                        <td>
                            <input type="text" name="source" id="source" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="notes">Notes</label>
                        </td>
                        <td>
                            <input type="text" name="notes" id="notes">
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