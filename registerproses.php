<?php include_once("profile-controller.php");


if(isset($_POST['username'])){
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pass2 = $_POST['password2'];
    $birth = $_POST['birthday'];
    $hobby = $_POST['hobby'];
    $title = "user";

    


    if($user && $email && $pass && $birth && $hobby){
            if($pass === $pass2){
                createProfile( $user, $email, $birth, $pass, $hobby, $title);
                header("Location : login.php");
            }else{
                $message = "Password is not the same..";
                header("Location: register.php?error=$message");
            }
    }else{
        echo "error";
    }
}

?>