<?php
include_once("headnavi.php");
if ($_SESSION['username'] == null) {
    header("Location: index.php?error=you dont have permission, Login first");
    exit();
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myprofile.css?v=<?php echo time(); ?>">
    <title>My Profile | GDF</title>
</head>
<body>
<div id="profile">
    <p>ID User:&emsp;&nbsp;<?=$_SESSION['id']?></p>
    <p>Username:&nbsp;<?= $_SESSION['username'] ?></p>
    <p>Email:&emsp;&emsp;<?= $_SESSION['email'] ?></p>
    <p>Hobby:&emsp;&ensp;&nbsp;<?= $_SESSION['hobby'] ?></p>
    <p>Birthday:&emsp;<?= $_SESSION['birthday'] ?></p>
</div>
<button class="edit" onclick="location.href='edit-user.php'">Edit Profile</button>
</body>

</html>