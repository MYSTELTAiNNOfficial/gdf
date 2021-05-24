<?php
include_once "game-controller.php";
    $img_name = $_FILES['img']['name'];
    $img_size = $_FILES['img']['size'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $error = $_FILES['img']['error'];

    if($error === 0){
        if($img_size > 2097152){
            $message = "Sorry your file is too large, file must be under 2 MB.";
            header("Location: add-game.php?error=$message");
        }else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if(in_array($img_ex_lc, $allowed_exs)){
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'game_img/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                //Insert into Database
                $name_game = $_POST['name'];
                $img_link = $img_upload_path;

                createGamelist($name_game, $img_link); 
                header("Location: gamelist.php");
            }else{
                $message = "You can't this upload files of this type";
                header("Location: add-game.php?error=$message");
            }
        }
    }else{
        $message = "Unknown error occurred!";
        header("Location: add-game.php?error=$message");
    }
?>