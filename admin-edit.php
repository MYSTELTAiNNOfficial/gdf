<?php include_once("headnavi.php"); 
if(!$_SESSION == "admin"){
    header("Location: index.php?error=Fuck off! you dont have permission, Login first you bitch");
    exit();
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="game.css?v=<?php echo time(); ?>">
    <title>Admin Control</title>
</head>

<body>
<div id="gamelist">
    <h1>Admin Control</h1>
    <table border="1" cellspacing="0">
        <?php
        $result = readGamelist();
        foreach ($result as $row) {
        ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><img src="<?= $row['img'] ?>"></td>
                <td><a href="delete-game.php?deleteID= <?= $row['id'] ?>">Delete</a></td>
                <td><a href="edit-game.php?updateID=<?= $row['id'] ?>">Update</a></td>
            </tr>
            <br>
            
        <?php
        }
        ?>
    </table>
    <button onclick="location.href='add-game.php'">Add new game</button>
</div>
</body>

</html>