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
    <h1 id="titleAdmin">Admin Control</h1>
<div id="gamelist">
    <br>
    <button id="addgame" onclick="location.href='add-game.php'">Add new game</button>
    <br>
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
<div id="userlist">
        <?php
        $result = readProfile();
        foreach ($result as $row){
        ?>
            <table>
                <tr>
                    <td>
                        <p>ID User: <?=$row['id']?></p>
                        <p>Username: <?= $row['username'] ?></p>
                        <p>Email: <?= $row['email'] ?></p>
                        <p>Hobby: <?= $row['hobby'] ?></p>
                        <p>Birthday: <?= $row['birthday'] ?></p>
                        <p>Title: <?= $row['title']?></p>
                        <p id="deleteuser"><a href="delete-user.php?deleteID=<?=$row['id']?>">Delete</a></p>
                    </td>
                </tr>
            </table>
        <?php
        }
        ?>
</div>
</body>

</html>