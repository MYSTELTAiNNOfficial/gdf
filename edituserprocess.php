<?php include_once "profile-controller.php";

if (isset($_POST['SUBMIT'])) {
    $id = $_SESSION['id'];
    $title = $_SESSION['title'];
    if ($_POST['username'] == "") {
        $user = $_SESSION['username'];
    } else {
        $user = $_POST['username'];
    }
    if ($_POST['email'] == "") {
        $email = $_SESSION['email'];
    } else {
        $email = $_POST['email'];
    }
    if ($_POST['password'] == "") {
        $pass = $_SESSION['password'];
    } else {
        $pass = md5(md5($_POST['password']));
    }
    if ($_POST['hobby'] == "") {
        $hobby = $_SESSION['hobby'];
    } else {
        $hobby = $_POST['hobby'];
    }
    if ($_POST['birthday'] == "") {
        $birth = $_SESSION['birthday'];
    } else {
        $birth = $_POST['birthday'];
    }

    updateProfile($id, $user, $email, $birth, $pass, $hobby, $title);
    header("Location:myprofile.php");
}else{
    echo "Error";
}
?>