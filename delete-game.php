<?php include_once("game-controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Data</title>
</head>
<body>
<h1>Delete Gamelist Data</h1>
<?php
    $data_to_be_deleted = $_GET["deleteID"];
    $resultDelete = deleteGamelist($data_to_be_deleted);
    echo $resultDelete;
?>
</body>
</html>