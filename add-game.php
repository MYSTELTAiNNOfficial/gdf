<?php include_once("game-controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data</title>
</head>
<body>
<h1>Create New Gamelist Data</h1>

<form action="add-game.php" method="POST" enctype = "multipart/form-data">
    <p>Game Name: <input type="text" name="nama" /></p>
    <p>Image: <input type="file" name="img" accept="image/jpg, image/png"/></p>
    <p><input type="submit" name="submit" /></p>
</form>

<?php

$image = $_FILES["img"]["name"];
if (isset($_POST["submit"]) && $image != ""){
    $folder = "image" . chr(92);
    $destination_path = getcwd() . DIRECTORY_SEPARATOR . $folder;
    //$target_path = $destination_path . basename( $_FILES["img"]["name"]);
    $target_path = $destination_path . "namaBaru.jpg";
    echo $target_path;
    @move_uploaded_file($_FILES["img"]["tmp_name"], $target_path);
    //echo '<img src="' .$folder."namaBaru.jpg". '"><p>';

    // penyimpanan data yang dikirim melalui form
    $name_game = $_POST["nama"];
    $img_link = $_POST["img"];

    createGamelist($name_game, $img_link);
}
?>
</body>
</html>