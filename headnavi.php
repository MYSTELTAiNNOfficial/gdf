<?php
include_once "admin-controller.php";
include_once "game-controller.php";
include_once "user-controller.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="headnavi.css?v=<?php echo time(); ?>">
</head>
<?php
$folder = "image" . chr(92);
$destination_path = getcwd() . DIRECTORY_SEPARATOR . $folder;
?>

<body>
    <div id="header">
        <?php echo '<img src="' . $folder . "G.D-Logo.png" . '"></img>'; ?>
        <p>Welcome, Guest!</p>
        <h2>Game Discussion Forum</h2>
    </div>

    <button onclick="openNav()">open</button>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>
    <!-- Use any element to open the sidenav -->


    <script>
        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>
</body>

</html>