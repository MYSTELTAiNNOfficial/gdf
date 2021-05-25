<?php
include_once("headnavi.php");
if($_SESSION['id'] == null){
    header("Location: index.php?error=You dont have permission, Login first");
    exit();
}
?>