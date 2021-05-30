<?php include_once "headnavi.php";
if ($_SESSION['title'] == null) {
    header("Location: index.php?error=you dont have permission, Login first");
    exit();
} else if (!isset($_GET["id_game"])){
    header("Location: gamelist.php?error=Choose game first before adding a review");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="review.css?v=<?php echo time(); ?>">
    <title>Add Review | GDF</title>
</head>
<body>
<?php
    if (isset($_GET["id_game"])) {
        $id_game = $_GET["id_game"];
        $data = getGamelist($id_game);
        echo $_SESSION['id'];
        echo $_SESSION['username'];
    ?>
    <h1>Add a new review in Game <?= $data['name'] ?></h1>
        <div id="formaddreview">

            <form action="addreviewprocess.php" method="POST" enctype="multipart/form-data">
                <label for="gameid"><b>Game ID</b></label>
                <br>
                <input type="text" name="id_game" value="<?= $data['id'] ?>" readonly>
                <br>
                <label for="gametitle"><b>Game Title</b></label>
                <br>
                <input type="text" name="name_game" value="<?= $data['name'] ?>" readonly>
                <br>
                <label for="comment"><b>Your Comment about this Game</b></label>
                <br>
                <input type="text" placeholder="Enter your comment" name="comment" required>
                <br><br>
                <input type="submit" value="Upload">
            </form>
        </div>
    <?php
    }else{
        header("Location: reviewlist.php?error=Please Select the game first");
        exit();
    }?>
</body>
</html>