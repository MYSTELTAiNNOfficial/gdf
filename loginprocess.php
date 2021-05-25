<?php
include_once("headnavi.php");

//check user already log in
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);
    if (empty($uname)) {
        header("Location: login.php?error=Username is required");
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $result = getProfilebyUserandPass($uname, $pass);
        if (mysqli_num_rows($result) === 1) {
            $i = mysqli_fetch_assoc($result);
            if ($uname === $i['username'] && $pass === $i['password']) {
                $_SESSION['id'] = $i['id'];
                $_SESSION['username'] = $i['username'];
                $_SESSION['email'] = $i['email'];
                $_SESSION['password'] = $i['password'];
                $_SESSION['birthday'] = $i['birthday'];
                $_SESSION['hobby'] = $i['hobby'];
                $_SESSION['title'] = $i['title'];
                header("Location: index.php");
                exit();
            } else {
                header("Location: login.php?error=Incorect username or password!");
                exit();
            }
        } else {
            header("Location: login.php?Incorect username or password!");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
