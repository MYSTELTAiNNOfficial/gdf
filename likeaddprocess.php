<?php include_once "review-controller.php";

if (isset($_GET['id_comment'])){
    $id =$_GET['id_comment'];
    $id_game = $_GET['id_game'];
    addLike($id);
    header("Location: reviewlist.php?id_game=$id_game");
}