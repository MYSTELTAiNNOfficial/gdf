<?php
session_start();
if($_SESSION['username'] == null){
    header("Location: index.php?error=You dont have permission, Login first");
    exit();
}
session_start();

session_unset();
session_destroy();

header("Location: index.php");
?>