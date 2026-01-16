<?php
include("../Controller Logic/Profile_Page_Valid.php");
include("../Controller Logic/session_and_cookie_check.php");
include("../Stylesheets/Profile_Page_css.php");
include("../JavaScript Files/Profile_Page_js.php");
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Ranter Dashboard
        </title>
        <meta name="description" content="This is a Web site for Local Festival Stall Allocation & Fee Management System" >
        <meta name="author" content="Arnob Sarker Supta and Hridrita Saha Moon">
        <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1800">
    </head>
    <body>
        <img src="../Images/Profile_Page.gif" alt="Profile Page" id="PPMIMG">
        <div id="PD">
            <center>
            <img src="" alt="Profile Picture" id="PPP">
            <p class="pt"><?php echo $_SESSION["fullname"]?></p>
            <p class="pt"><?php echo $_SESSION["number"]?></p>
            <p class="pt"><?php echo $_SESSION["email"]?></p>
            <p class="pt"><?php echo $_SESSION["address"]?></p>
            </center>
        </div>
        <button id="dash" onclick="window.location.href='Dashboard_Renter.php'">Dashboard</button>
        <a href="../Controller Logic/Logout.php" id="log">Logout</a>
        <a href="HOME_PAGE.php" id="Hom">Home</a>
        <button onclick="window.location.href=''" id="change">Update Information</button>






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