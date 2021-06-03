<?php include_once("headnavi.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <link rel="stylesheet" href="review.css?v=<?php echo time(); ?>">
    <title>Home | GDF</title>
</head>

<body>
    <h1><b>All Popular Review</h1></b>
    <?php
    $test = getReviewByLikes();
    echo "<div id='allreview'>
    ";
    foreach ($test as $row) {
    ?>
       <div id='review'>
            <table id="reviewuser">
                <tr>
                    <td>
                        <div class="user">
                        <p><?= $row['name_user'] ?></p>
                        </div>
                    </td>
                </tr>
            </table>
            <table id="reviewcontent">
                <tr>
                    <td>
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
                    </td>
                </tr>
            </table>
            </div>
    <?php
    }
    ?>
    </div>
</body>

</html>