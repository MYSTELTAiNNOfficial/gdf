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
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td><img src='" . $row['img'] . "'></td>";
            echo "<td><a href='delete-game.php?deleteID=" . $row['id'] . "'>Delete</a></td>";
            echo "<td><a href='edit-game.php?updateID=" . $row['id'] . "'>Update</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>