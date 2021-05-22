<?php include_once("headnavi.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data</title>
</head>
<body>
<?php
if (isset($_GET["updateID"]))
{
    $data_to_be_updated = $_GET["updateID"];
    $data = getGamelist($data_to_be_updated);
?>
 
<h1>Edit Gamelist Data with ID <?=$data_to_be_updated?></h1>
 
<form action="add-game.php" method="POST" enctype = "multipart/form-data">
    <p>Name: <input type="text" name="nama" /></p>
    <p>Image: <input type="file" name="img" accept="image/jpg, image/png"/></p>
    <p><input type="submit" name="submit" /></p>
</form>

<?php
} 

if (isset($_POST["update_submit"])){
    // penyimpanan data yang dikirim melalui form
    $id = $_POST["update_id"];
    $name_game = $_POST["nama"];
    $img_link = $_POST["img"];

    $result = updateGamelist($id, $name_game, $img_link);

    if ($result==1){
?>
        <h1>Update Gamelist Data with ID <?=$id?> SUCCESS</h1>
        <p>Game Name : <?=$nama_game?></p>
        <p>Image : <?=$img_link?></p>
<?php
    }
}
?>



</body>
</html>