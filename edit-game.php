<?php include_once("headnavi.php");
if ($_SESSION['title'] != "admin") {
    header("Location: index.php?error=you dont have permission, Login first");
    exit();
} ?>?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="game.css?v=<?php echo time(); ?>">
    <title>Update Info Game | GDF</title>
</head>

<body>
    <?php
    if (isset($_GET["updateID"])) {
        $data_to_be_updated = $_GET["updateID"];
        $data = getGamelist($data_to_be_updated);
    ?>
        <div id="formEdit">
            <h1>Edit Gamelist Data ID No <?= $data_to_be_updated ?></h1>

            <form action="editgameprocess.php" method="POST" enctype="multipart/form-data">
                <label for="gameid"><b>Game ID</b></label>
                <br>
                <input type="text" name="id" value="<?= $data['id'] ?>" readonly>
                <br>
                <label for="gametitle"><b>Game Title</b></label>
                <br>
                <input type="text" placeholder="Enter Title" name="name" value="<?= $data['name'] ?>" required>
                <br>
                <label for="image"><b>Game Cover Image</b></label>
                <br>
                <input type="file" name="img" accept="img/*" value="<?= $data['img'] ?>" required>
                <br><br>
                <input type="submit" value="Upload">
            </form>
        </div>
    <?php
    }else{
        header("Location: admin-edit.php?error=Please Select the game first");
        exit();
    }?>
</body>

</html>