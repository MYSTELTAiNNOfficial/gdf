<?php include_once("headnavi.php");


if(isset($_POST['register'])){
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pass2 = $_POST['password2'];
    $birth = $_POST['birthday'];
    $hobby = $_POST['hobby'];
    $title = "user";

    

    if($username && $email && $password && $birthday && $hobby){
        if(eregi("^[0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,3}$", $email)){
            if($pass == $pass2){
                createProfile( $user, $email, $birth, $pass, $hobby, $title);
                header("Location : login.php");
            }else{
                $message = "Password is not the same..";
                header("Location: register.php?error=$message");
            }
        }
    }
}

?>