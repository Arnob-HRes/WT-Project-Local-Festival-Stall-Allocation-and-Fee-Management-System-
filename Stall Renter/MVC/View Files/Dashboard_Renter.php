<?php
include("../Controller Logic/Dashboard_Renter_Valid.php");
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
        <link rel="stylesheet" href="../Stylesheets/Dashboard_Renter.css">
    </head>
    <body>

        <img src="../Images/Dashboard_background.jpg" alt="Dashborad Background" id="mainimg">
        <img src="../Images/LOGO.png" alt="Logo" id="logo">
        <p id="wu"><b>Welcome, <?php if(isset($FullName)){echo $FullName;}?></b></p>
        <a href="" id="inf">Information</a>
        <a href="" id="cat">Catagories</a>
        <a href="" id="sett">Settings</a>
        <img src="" alt="Profile" id="PP">
        <a href="../Controller Logic/Logout.php" id="logout">
            <center>
                Logout
            </center>
        </a>

        
        <script src="../JavaScript Files/Dashboard_Renter.js"></script>
    </body>
</html>