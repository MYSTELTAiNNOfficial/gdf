<?php
//connect database
function my_connectDB(){
    $host = "localhost";
    $user = "root";
    $pwd  = "";
    $db   = "uas";
    
    $conn = mysqli_connect($host, $user, $pwd, $db) or die("Error connect to database");
    return $conn;
}

// function untuk close connection
function my_closeDB($conn){
    mysqli_close($conn);
}

function timeDB(){
    $now = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $created = $now->format('Y-m-s H:i:s');
    return $created;
}

?>