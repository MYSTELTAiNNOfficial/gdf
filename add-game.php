<?php include_once("headnavi.php");
if($_SESSION['title'] != "admin"){
    header("Location: index.php?error=you dont have permission, Login first");
    exit();
}?>?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="game.css?v=<?php echo time(); ?>">
    <title>Add Game | GDF</title>
</head>

<body>
    <div id="formCreate">
        <h1>Create New Gamelist Data</h1>
            <form action="addgameprocess.php" method="POST" enctype="multipart/form-data">
                <label for="gametitle"><b>Game Title</b></label>
                <br>
                <input type="text" placeholder="Enter Title" name="name" required>
                <br>
                <label for="image"><b>Game Cover Image</b></label>
                <br>
                <input type="file" name="img" accept="img/*" required>
                <br><br>
                <input type="submit" value="Upload">
            </form>
        <button onclick="location.href='admin-edit.php'">Back to admin control</button>
    </div>
</body>

</html>