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
        foreach ($result as $i) {
            $id = $i['id'];
            $username = $i['user'];
            $email = $i['email'];
            $password = $i['pass'];
            $birthday = $i['birth'];
            $hobby = $i['hobby'];
            $title = $i['title'];
            if ($uname === $username) {
                if ($pass === $password) {
                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['birthday'] = $birthday;
                    $_SESSION['hobby'] = $hobby;
                    $_SESSION['title'] = $title;
                    header("Location: index.php");
                    exit();
                } else {
                    header("Location: login.php?error=Incorect password!");
                    exit();
                }
            } else {
                header("Location: login.php?error=Incorect username!");
                exit();
            }
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>