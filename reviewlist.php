<?php include_once "headnavi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="review.css?v=<?php echo time(); ?>">
    <title>Review | GDF</title>
</head>

<body>
    <?php
    if (isset($_GET["id_game"])) {
        $id_game = $_GET['id_game'];
        $test = getReviewByGameID($id_game);
        echo "<h1><b>Review</h1></b>
        <div id='allreview'>
    ";
        foreach ($test as $row) {
    ?>
            <div id='review'>
                <div class="user">
                    <p><?= $row['name_user'] ?></p>
                </div>
                <div class="game">
                    <h4><?= $row['name_game'] ?></h4>
                </div>
                <div class="comment">
                    <p><?= $row['comment'] ?></p>
                </div>
                <?php if ($_SESSION['id'] != null) { ?>
                    <div class="like">
                        <p><a href="likeaddprocess.php?id_comment=<?= $row['id'] ?>&id_game=<?= $row['id_game'] ?>"><?= $row['likes_count'] ?></a></p>
                    </div>
                <?php } else { ?>
                    <div class="like">
                        <p><?= $row['likes_count'] ?></p>
                    </div>
                <?php } ?>
            </div>
        <?php
        }
        echo "</div>";
    } else {
        $test = getReviewByNewer();
        echo "
        <h1>Review</h1>
        <div id='allreview'>";
        foreach ($test as $row) {
        ?>
            <div id='review'>
                <div class="user">
                    <p><?= $row['name_user'] ?></p>
                </div>
                <div class="game">
                    <h4><?= $row['name_game'] ?></h4>
                </div>
                <div class="comment">
                    <p><?= $row['comment'] ?></p>
                </div>
                <?php if ($_SESSION['id'] != null) { ?>
                    <div class="like">
                        <p><a href="likeaddprocess.php?id_comment=<?= $row['id'] ?>&id_game=<?= $row['id_game'] ?>"><?= $row['likes_count'] ?></a></p>
                    </div>
                <?php } else { ?>
                    <div class="like">
                        <p><?= $row['likes_count'] ?></p>
                    </div>
                <?php } ?>
            </div>
        <?php
        }
        echo "</div>";
    }?>
    </table>
    </div>
    <?php if ($_SESSION['id'] != null && isset($_GET["id_game"])) { ?>
        <a href="add-review.php?id_game=<?= $_GET["id_game"] ?>"><button id="addbutton">ADD REVIEW</button></a>
    <?php
    }
    ?>
</body>

</html>