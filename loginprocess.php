<?php
include_once("headnavi.php");

//check user already log in
if(isset($_POST['username']) && isset($_POST['password'])){
    function validate($data){
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
    }else if(empty($pass)){
        header("Location: login.php?error=Password is required");
        exit();
    }else{

        $sql = "SELECT * FROM 'profile' WHERE 'username'='$uname' AND 'password'='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['birthday'] = $row['birthday'];
                $_SESSION['hobby'] = $row['hobby'];
                $_SESSION['title'] = $row['title'];
                header("Location: index.php");
                exit();
            }else{
                header("Location: login.php?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location: login.php?error=Incorect User name or password");
            exit();
        }
    }
}else{
header("Location: index.php");
exit();
}
?>