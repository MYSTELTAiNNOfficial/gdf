<?php include_once("headnavi.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css?v=<?php echo time(); ?>">
    <title>REGISTER</title>
</head>
<body>
    <div id="register">
    <form action="profile-controller.php" method="POST" enctype="multipart/form-data">
            <label for="Username"><b>Username</b></label>
            <br>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br>
            <label for="email"><b>Email</b></label>
            <br>
            <input type="text" placeholder="Enter Email" name="email" required>
            <br>
            <label for="password"><b>Password</b></label>
            <br>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br>
            <label for="password2"><b>Confirm your Password</b></label>
            <br>
            <input type="password" placeholder="Confirm your Password" name="password2" required>
            <br>
            <label for="Hobby"><b>Hobby</b></label>
            <br>
            <input type="text" placeholder="Enter your Hobby" name="hobby">
            <br>
            <label for="birthday"><b>Birthday</b></label>
            <br>
            <input type="date" placeholder="Enter your Birthday" name="birthday">
            <br><br>
            <input type="submit" value="SUBMIT">
    </form>
    </div>
</body>
</html>


