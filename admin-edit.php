<?php include_once("headnavi.php");
if($_SESSION['title'] != "admin"){
    header("Location: index.php?error=you dont have permission, Login first");
    exit();
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="game.css?v=<?php echo time(); ?>">
    <title>Admin Control | GDF</title>
</head>

<body>
    <h1>Admin Control</h1>
    <br>
    <button onclick="location.href='add-game.php'">Add new game</button>
    <br>
<div id="gamelist">
    <table>
        <?php
        $result = readGamelist();
        foreach ($result as $row) {
        ?>
            <tr>
                <td colspan="2">ID.<?= $row['id'] ?> <?= $row['name'] ?></td>
                <tr>
                    <td colspan="2"><img src="<?= $row['img'] ?>"></td>
                </tr>
            </tr>
            <tr>
            <td><a href="delete-game.php?deleteID=<?=$row['id']?>">Delete</a></td>
                <td><a href="edit-game.php?updateID=<?=$row['id']?>">Update</a></td>
            </tr>
        <?php
        }
        ?>
        <br>
    </table>
</div>
</body>

</html>