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
    <?php
    $test = getReviewByLikes();
    echo "<div id='tablereview'><h1>Review</h1>
        <table border='1' cellspacing='0'>";
    foreach ($test as $row) {
    ?>
        <tr>
            <td><?= $row['name_user'] ?></td>
            <td><?= $row['name_game'] ?></td>
            <td><?= $row['comment'] ?></td>
            <?php if (!$_SESSION['id'] != null) { ?>
                <td><a href="likeaddprocess.php?id_comment=<?= $row['id'] ?>&id_game=<?= $row['id_game'] ?>"><?= $row['likes_count'] ?></td>
            <?php } else { ?>
                <td><?= $row['likes_count'] ?></td>
            <?php } ?>
            <td><a href="likeaddprocess.php?id_comment=<?= $row['id'] ?>&id_game=<?= $row['id_game'] ?>"><?= $row['likes_count'] ?></td>
            <td><?= $row['created'] ?></td>
        </tr>
    <?php
    }
    ?>
</body>

</html>