<?php
include_once "profile-controller.php";
include_once "game-controller.php";
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
        <h2>Game Discussion Forum</h2>
        <p>Welcome, Guest!</p>
    </div>

    <button onclick="openNav()">open</button>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">HOME</a>
        <a href="gamelist.php">GAMES</a>
        <a href="#">REVIEW</a>
        <a href="#">ABOUT</a>
        <a href="#">CONTACT US</a>
        <a href="admin-edit.php">Admin Control</a>
    </div>


    <script>
        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
        function openNav() {
            document.getElementById("mySidenav").style.width = "25%";
            if(screen.availWidth <= 700){
                document.getElementById("mySidenav").style.width = "30%";
            }
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("mySidenav").style.paddingRight = "0";
        }
    </script>
</body>

</html>