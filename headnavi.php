<?php
include_once "admin-controller.php";
include_once "game-controller.php";
include_once "user-controller.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="headnavi.css">
</head>

<body>
    <?php
    $folder = "image" . chr(92);
    $destination_path = getcwd() . DIRECTORY_SEPARATOR . $folder;
    ?>
    <div id="header">
        <?php echo '<img id="logo" src="' . $folder . "G.D-Logo.png" . '"></img>'; ?>
        <p class="welc">Welcome, Guest!</p>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h2 href="#">About</h2>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>
    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()">open</span>

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