<?php
include("../Controller Logic/food_stall_information_Valid.php");
include("../Controller Logic/session_and_cookie_check.php");
include("../Stylesheets/food_stall_information_css.php");
include("../JavaScript Files/food_stall_information_js.php");
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Food Stall Information
        </title>
        <meta name="description" content="This is a Web site for Local Festival Stall Allocation & Fee Management System" >
        <meta name="author" content="Arnob Sarker Supta and Hridrita Saha Moon">
        <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1800">
    </head>
    <body>

        <img src="../Images/Dashboard_background.jpg" alt="Dashborad Background" id="mainimg">
        <img src="../Images/LOGO.png" alt="Logo" id="logo">
        <p id="wu"><b>Welcome, <?php if(isset($_SESSION["fullname"])){echo $_SESSION["fullname"];}?></b></p>
        <button id="home" onclick="window.location.href='Dashboard_Renter.php'">Go to Dashboard</button>
        <img src="" alt="Profile" id="PP">
        <a href="../Controller Logic/Logout.php" id="logout">
                Logout
        </a>
        
        <footer id="footer">
            <img src="../Images/LOGO.png" alt="" id="FooterLogo">
            <a href="https://www.facebook.com/share/1DA2H2WT9q/" id="AF" class="fl">Arnob's Facebook</a>
            <a href="https://www.facebook.com/share/1ASuv8pzxi/" id="HF" class="fl">Hridita's Facebook</a>
            <a href="https://github.com/Arnob-HRes" id="AG" class="fl">Arnob's GitHub</a>
            <a href="https://github.com/Hridrita" id="HG" class="fl">Hridita's GitHub</a>
            <h5 id="T1">© ARNOB SARKER SUPTA & HRIDRITA SAHA MOON 2025</h5>
        </footer>
    </body>
</html>