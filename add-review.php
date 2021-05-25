<?php include_once "headnavi.php";
if ($_SESSION['title'] == null) {
    header("Location: index.php?error=you dont have permission, Login first");
    exit();
} else if (!isset($_GET["id_game"])){
    header("Location: gamelist.php?error=Choose game first before adding a review");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Review | GDF</title>
</head>
<body>
    
</body>
</html>