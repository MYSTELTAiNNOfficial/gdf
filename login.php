<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
    <title>LOGIN</title>
</head>

<body>
    <div id="login">
        <form action="login.php" method="POST" enctype="multipart/form-data">
            <label for="email"><b>Email</b></label>
            <br>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br>
            <label for="password"><b>Password</b></label>
            <br>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br><br>
            <input type="submit" value="SUBMIT">
        </form>
        <br>
        <br>
        <br>
        <p>Don't have an account yet? <a href="register.php">Register Here!</a></p>
    </div>
</body>

</html>