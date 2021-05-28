<?php
include_once "profile-controller.php";
include_once "game-controller.php";
include_once "review-controller.php";
session_start();
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
        <?php
        if (!$_SESSION['username'] == null) { ?>
            <p>Welcome, <?= $_SESSION['username'] ?>!</p>
        <?php
        } else { ?>
            <p>Welcome, Guest!</p>
        <?php
        }
        ?>
    </div>

    <button onclick="openNav()">open</button>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">HOME</a>
        <a href="gamelist.php">GAMES</a>
        <a href="reviewlist.php">REVIEW</a>
        <a href="#">ABOUT</a>
        <a href="#">CONTACT US</a>
        <?php
        if ($_SESSION['title'] == "admin") { ?>
            <a href="myprofile.php">My Profile</a>
            <a href="admin-edit.php">Admin Control</a>
            <a href="logout.php">Logout</a>
        <?php
        } else if ($_SESSION['title'] == "user") { ?>
            <a href="myprofile.php">My Profile</a>
            <a href="logout.php">Logout</a>
        <?php
        } else if ($_SESSION['title'] == null) { ?>
            <a href="login.php">Login</a>
        <?php
        } ?>
    </div>


    <script>
        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
        function openNav() {
            document.getElementById("mySidenav").style.width = "25vw";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("mySidenav").style.paddingRight = "0";
        }
    </script>

</body>

</html>