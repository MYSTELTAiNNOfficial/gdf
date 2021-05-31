<?php
include_once("headnavi.php");
if($_SESSION['title'] != "admin"){
    header("Location: index.php?error=you dont have permission, Login first");
    exit();
}?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User | GDF</title>
</head>
<body>
<h1>Delete User Data</h1>
    <?php
    if (isset($_GET["deleteID"])) {
        $data_to_be_deleted = $_GET["deleteID"];
        $resultDelete = deleteProfile($data_to_be_deleted);
        header("Location: admin-edit.php?message=Delete user complete");
    }else{
        header("Location: admin-edit.php?error=Please Select the user first");
        exit();
    }

    ?>
</body>
</html>