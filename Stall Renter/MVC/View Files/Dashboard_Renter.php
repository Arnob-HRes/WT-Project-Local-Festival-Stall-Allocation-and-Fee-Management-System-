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
        <button id="home" onclick="window.location.href='HOME_PAGE.php'">Go to Home Page</button>
        <img src="" alt="Profile" id="PP">
        <a href="../Controller Logic/Logout.php" id="logout">
                Logout
        </a>
        <h1 id="h11"><b>Welcome,</b></h1>
        <h1 id="h12"><b>To Your Personal </b></h1>
        <h1 id="h13"><b>Local Festival Stall Renting Profile. </b></h1>
        <h3 id="h33">For more information scroll down ↓ or search on the tab ⌕</h3>

        <div id="stiky1">
            <div id="d1">
            <input type="text" id="ST" placeholder="⌕ Search for a topic" name="searchT">
            <input type="submit" value="Search" id="Submi">
            </div>
        </div>
        <hr id="h1">
        <center>
            <h2 id="f1">Stall Catagories</h2>
        </center>
        <hr id="h2">

        <div id="MDIV-1">
            <center>
                <h2>Food Stall</h2>
            </center>
            <img src="../Images/Food_Stall.jpg" alt="Food Stall" id="Food">
            <input type="submit" value="Learn more >" id="FS" class="IS" onclick="window.location.href='Booking_Page.php'">
        </div>

        <div id="MDIV-2">
            <center>
                <h2>Toys and Accessories Stall</h2>
            </center>
            <img src="../Images/Toys ans Accessories_Stall.png" alt="TandA Stall" id="TA">
            <input type="submit" value="Learn more >" id="FS" class="IS" onclick="window.location.href='Booking_Page.php'">
        </div>
        
        <script src="../JavaScript Files/Dashboard_Renter.js"></script>
    </body>
</html>