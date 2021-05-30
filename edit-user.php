<?php
include_once("headnavi.php");
if($_SESSION['id'] == null){
    header("Location: index.php?error=You dont have permission, Login first");
    exit();
}
?>
!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myprofile.css?v=<?php echo time(); ?>">
    <title>Edit Profile</title>
</head>
<body>
<div id="editprofile">
    <p>ID User:&emsp;&nbsp;<?=$_SESSION['id']?></p>
    <p>Username:&nbsp;<?= $_SESSION['username'] ?></p>
    <p>Email:&emsp;&emsp;<?= $_SESSION['email'] ?></p>
    <p>Hobby:&emsp;&ensp;&nbsp;<?= $_SESSION['hobby'] ?></p>
    <p>Birthday:&emsp;<?= $_SESSION['birthday'] ?></p>
</div>
</body>

</html>