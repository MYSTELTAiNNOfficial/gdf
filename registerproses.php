<?php include_once("profile-controller.php");


if (isset($_POST['username'])) {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = md5(md5($_POST['password']));
    $pass2 = md5(md5($_POST['password2']));
    $birth = $_POST['birthday'];
    $hobby = $_POST['hobby'];
    $title = "user";

    if ($user && $email && $pass && $birth && $hobby) {
        $check = checkUsedUserEmail($user, $email);
        if ($check == false) {
            if ($pass == $pass2) {
                createProfile($user, $email, $birth, $pass, $hobby, $title);
                header("Location:login.php");
            } else {
                header("Location:register.php?error=Password is not same..");
            }
        } else {
            header("Location:register.php?error=Username or Email has been used");
        }
    } else {
        echo "error";
    }
}
?>