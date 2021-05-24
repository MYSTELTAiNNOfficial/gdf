<?php include_once("headnavi.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="game.css?v=<?php echo time(); ?>">
    <title>Update Data</title>
</head>
<body>
<?php
if (isset($_GET["updateID"]))
{
    $data_to_be_updated = $_GET["updateID"];
    $data = getGamelist($data_to_be_updated);
?>

<div id="formEdit">
    <h1>Edit Gamelist Data with ID<?=$data_to_be_updated?></h1>

    <form action="editgameprocess.php" method="POST" enctype = "multipart/form-data">
            <label for="gametitle"><b>Game Title</b></label>
            <br>
            <input type="text" name="id" value="<?=$data['id']?>"readonly>
            <br>
            <label for="gametitle"><b>Game Title</b></label>
            <br>
            <input type="text" placeholder="Enter Title" name="name" value="<?=$data['name_game']?>" required>
            <br>
            <label for="image"><b>Game Cover Image</b></label>
            <br>
            <input type="file"  name="img" accept="img/*" value="<?=$data['img_link']?>" required>
            <br><br>
            <input type="submit" value="Upload">
    </form>
</div>
<?php
}?>
</body>
</html>