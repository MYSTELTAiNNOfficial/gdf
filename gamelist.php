<?php include_once("headnavi.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="game.css?v=<?php echo time(); ?>">
    <title>Gamelist</title>
</head>

<body>
<div id="gamelist">
    <h1>Gamelist</h1>
    <table border="1" cellspacing="0">
        <?php
        $result = readGamelist();
        foreach ($result as $row) {
        ?>
            <tr>
                <td><?= $row['name'] ?></td>
                <td><img src="<?= $row['img'] ?>"></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
</body>

</html>