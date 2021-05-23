<?php include_once("headnavi.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamelist</title>
</head>
<body>
    <h1>Gamelist</h1>
    <table border="1" cellspacing="0">
    <?php
    $result = readGamelist();
    foreach ($result as $barisdata) {
    ?>
    <tr>
        <td><?=$barisdata["id"]?></td>
        <td><?=$barisdata["name_game"]?></td>
        <td><?=$barisdata["img_link"]?></td>
        <td><a href="delete-game.php?deleteID=<?=$barisdata['id']?>">Delete</a></td>
        <td><a href="edit-game.php?updateID=<?=$barisdata['id']?>">Update</a></td>        
    </tr>
    <?php    
    }
    ?>
    </table>
</body>
</html>