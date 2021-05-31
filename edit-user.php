<?php
include_once("headnavi.php");
if ($_SESSION['id'] == null) {
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
        <form action="edituserprocess.php" method="POST" enctype="multipart/form-data">
            <label for="id"><b>ID User: </b></label>
            <input class="input" type="text" placeholder="<?= $_SESSION['id'] ?>" name="id" readonly>
            <br>
            <label for="Username"><b>Username: </b></label>
            <input class="input" type="text" placeholder="<?= $_SESSION['username'] ?>" name="username">
            <br>
            <label for="email"><b>Email: </b></label>
            <input class="input" type="text" placeholder="<?= $_SESSION['email'] ?>" name="email">
            <br>
            <label for="password"><b>Password: </b></label>
            <input class="input" type="password" placeholder="Enter Password" name="password">
            <br>
            <label for="Hobby"><b>Hobby</b></label>
            <input class="input" type="text" placeholder="<?= $_SESSION['hobby'] ?>" name="hobby">
            <br>
            <label for="birthday"><b>Birthday</b></label>
            <input class="input" type="date" placeholder="<?= $_SESSION['birthday'] ?>" name="birthday">
            <br>
            <input type="submit" value="Submit" name="SUBMIT">
        </form>
    </div>
    <!-- <div id="editprofile">
    <p>ID User:&emsp;&nbsp;<?= $_SESSION['id'] ?></p>
    <p>Username:&nbsp;<?= $_SESSION['username'] ?></p>
    <p>Email:&emsp;&emsp;<?= $_SESSION['email'] ?></p>
    <p>Hobby:&emsp;&ensp;&nbsp;<?= $_SESSION['hobby'] ?></p>
    <p>Birthday:&emsp;<?= $_SESSION['birthday'] ?></p>
</div> -->
</body>

</html>