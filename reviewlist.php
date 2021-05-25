<?php include_once "headnavi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review | GDF</title>
</head>

<body>
    <?php
    if (isset($_GET["id_game"])) {
        $id = $_GET['id_game'];
        $test = getReviewByGameID($id_game);
        echo "<h1>". $test['name_game'] ."Review</h1>
            <table border='1' cellspacing='0'>";
        foreach ($test as $row) {
    ?>
            <tr>
                <td><?= $row['name_user'] ?></td>
                <td><?= $row['name_game'] ?></td>
                <td><?= $row['comment'] ?></td>
                <td><?= $row['likes_count'] ?></td>
                <td><?= $row['created'] ?></td>
            </tr>
        <?php
        }
        echo "</table>";
    }else{
        $test = getReviewByNewerDate();
        echo "<div id='tablereview'>
        <h1>". $test['name_game'] ."Review</h1>
            <table border='1' cellspacing='0'>";
        foreach ($test as $row) {
    ?>
            <tr>
                <td><?= $row['name_user'] ?></td>
                <td><?= $row['name_game'] ?></td>
                <td><?= $row['comment'] ?></td>
                <td><?= $row['likes_count'] ?></td>
                <td><?= $row['created'] ?></td>
            </tr>
        <?php
        }
        echo "</table></div>";
    }
    if ($_SESSION['id_user'] != null && isset($_GET["id_game"])) { ?>
        <?= $temp = $_GET["id_game"]; ?>
        <a href="add-review.php?id_game=<?=$temp?>"><button>ADD REVIEW</button></a>
    <?php
    }
    ?>
    </table>
</body>

</html>