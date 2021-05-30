<?php include_once("headnavi.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="game.css?v=<?php echo time(); ?>">
    <title>All Game List | GDF</title>
</head>

<body>
<div id="gamelist">
    <h1>Gamelist</h1>
    <div>
        <?php
        $result = readGamelist();
        foreach ($result as $row) {
        ?>
        <table id="content">
            <tr>
                <td id="name"><a href="reviewlist.php?id_game=<?= $row['id'] ?>"><?= $row['name'] ?>
                    <tr>
                        <td><img src="<?= $row['img'] ?>"></td>
                    </tr>
                </td>
            </tr>
        </table>
        <?php
        }
        ?>
    </div>
</div>
</body>

</html>