<?php include_once("headnavi.php");
if($_SESSION['username'] != null){
    header("Location: index.php?error=You has been login-ed, please logout first");
    exit();
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
    <title>Login | GDF</title>
</head>

<body>
    <div id="login">
    <h1><b>LOGIN</b></h1>
        <form action="loginprocess.php" method="POST" enctype="multipart/form-data">
            <label for="username"><b>Username</b></label>
            <br>
            <input class="input" type="text" placeholder="Enter Username" name="username" required>
            <br>
            <label for="password"><b>Password</b></label>
            <br>
            <input class="input" type="password" placeholder="Enter Password" name="password" required>
            <br><br>
            <input type="submit" value="Login">
        </form>
        <br>
        <br>
        <br>
        <p>Don't have an account yet? <a href="register.php">Register Here!</a></p>
    </div>
</body>

</html>