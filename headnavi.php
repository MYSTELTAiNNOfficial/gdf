<?php 
include_once "admin-controller.php";
include_once "game-controller.php";
include_once "user-controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="headnavi.css">
</head>
<body>
<?php
$folder = "image" . chr(92);
$destination_path = getcwd() . DIRECTORY_SEPARATOR . $folder;
?>
<div id="header">
<?php echo '<img id="logo" src="' .$folder."G.D-Logo.png". '"></img>'; ?>
<h4 id="">Welcome, Guest!</h4>
</div>
<div>
<h3>NAVIGATION</h3> 
<a href="index.php">READ</a>&nbsp;-&nbsp;
<a href="adddb.php">CREATE</a>&nbsp;-&nbsp;
<a href="deletedb.php">DELETE</a>&nbsp;-&nbsp;
</div>
</body>
</html>