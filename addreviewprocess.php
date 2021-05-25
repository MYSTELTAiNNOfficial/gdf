<?php
session_start();
include_once "review-controller.php";

if (isset($_POST['comment'])){
    $id_game = (int)$_POST['id_game'];
    $name_game = $_POST['name_game'];
    $comment = $_POST['comment'];
    $name_user = $_SESSION['username'];
    $id_user = $_SESSION['id'];
    createReview($id_game, $id_user,$name_game, $name_user, $comment);
    header("Location: reviewlist.php?id_game=$id_game");
}
