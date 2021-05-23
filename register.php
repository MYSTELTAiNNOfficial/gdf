<?php
include_once("headnavi.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <div class = "container">
    <h2>Create Your Profile </h2>
    <hr>
    <label for="Username"><b>Username</b></label>
    <input type = "text" placeholder = "Username" name = "username" id= "username" required>
    <label for="Birthday"><b>Birthday</b></label>
    <input type = "date" name = "birthday" id= "birthday" required>
    <label for="Hobby"><b>Hobby</b></label>
    <input type = "text" placeholder = "Hobby" name = "hobby" id= "hobby">
    <label for="Email"><b>Email</b></label>
    <input type = "text" placeholder = "Email" name = "email" id= "email" required>
    <label for="Password"><b>Password</b></label>
    <input type = "password" placeholder = "Password" name = "password" id= "password" minlength = "10" required>
    <button type = "submit" class = "registerbtn">Register</button>
    </div>
    
    </form>
</body>
</html>