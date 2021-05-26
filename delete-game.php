<?php include_once("headnavi.php");
if ($_SESSION['title'] != "admin") {
    header("Location: index.php?error=you dont have permission, Login first");
    exit();
} ?>?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Game | GDF</title>
</head>

<body>
    <h1>Delete Gamelist Data</h1>
    <?php
    if (isset($_GET["deleteID"])) {
        $data_to_be_deleted = $_GET["deleteID"];
        $resultDelete = deleteGamelist($data_to_be_deleted);
        header("Location: admin-edit.php?message=Delete game complete");
    }else{
        header("Location: admin-edit.php?error=Please Select the game first");
        exit();
    }

    ?>
</body>

</html>