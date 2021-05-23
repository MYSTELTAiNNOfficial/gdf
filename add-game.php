<?php include_once("headnavi.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="game.css?v=<?php echo time(); ?>">
    <title>Create Data</title>
</head>
<body>
<div id="formCreate">
    <h1>Create New Gamelist Data</h1>

    <form action="add-game.php" method="POST" enctype = "multipart/form-data">
        <label for="gametitle"><b>Game Title</b></label>
            <br>
            <input type="text" placeholder="Enter Title" name="name" required>
            <br>
            <label for="image"><b>Game Cover Image</b></label>
            <br>
            <input type="file"  name="img" accept="img/*" required>
            <br><br>
            <input type="submit" value="Upload">
    </form>
</div>
<?php

if (isset($_POST["submit"]) && isset($_FILES['img'])){

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
                $name_game = $_POST["nama"];
                $img_link = $new_img_name;

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
}
?>
</body>
</html>