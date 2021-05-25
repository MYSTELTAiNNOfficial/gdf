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
    <?php

    ?>
</body>
</html>