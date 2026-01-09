<?php
include("../Controller Logic/Dashboard_Renter_Valid.php");
include("../Controller Logic/session_and_cookie_check.php");
include("../Stylesheets/Dashboard_Renter_css.php");
include("../JavaScript Files/Dashboard_Renter_js.php");
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

        <img src="../Images/Dashboard_background.jpg" alt="Dashborad Background" id="mainimg">
        <img src="../Images/LOGO.png" alt="Logo" id="logo">
        <p id="wu"><b>Welcome, <?php if(isset($_SESSION["fullname"])){echo $_SESSION["fullname"];}?></b></p>
        <a href="" id="inf">Information</a>
        <a href="" id="cat">Catagories</a>
        <a href="" id="sett">Settings</a>
        <button id="home" onclick="window.location.href='HOME_PAGE.php'">Go to Home Page</button>
        <img src="" alt="Profile" id="PP">
        <a href="../Controller Logic/Logout.php" id="logout">
                Logout
        </a>
        <h1 id="h11" class="ani"><b>Welcome,</b></h1>
        <h1 id="h12" class="ani"><b>To Your Personal </b></h1>
        <h1 id="h13" class="ani"><b>Local Festival Stall Renting Profile. </b></h1>
        <h3 id="h33" >For more information scroll down ↓ or search on the tab ⌕</h3>

        <div id="stiky1">
            <div id="d1">
            <input type="text" id="ST" placeholder="⌕ Search for a topic" name="searchT">
            <input type="submit" value="Search" id="Submi">
            <input type="submit" value="Book a stall" id="Submi2">
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
            <img src="../Images/Food_Stall.jpg" alt="Food Stall" class="DIVpic">
            <input type="submit" value="Learn more >" id="FS1" class="IS" onclick="window.location.href='food_stall_page.php'">
        </div>

        <div id="MDIV-2">
            <center>
                <h2>Toys and Accessories Stall</h2>
            </center>
            <img src="../Images/Toys ans Accessories_Stall.png" alt="TandA Stall" class="DIVpic">
            <input type="submit" value="Learn more >" id="FS2" class="IS" onclick="window.location.href='Booking_Page.php'">
        </div>

        <div id="MDIV-3">
            <center>
                <h2>Art Stall</h2>
            </center>
            <img src="../Images/Arts_stall.png" alt="Art Stall" class="DIVpic">
            <input type="submit" value="Learn more >" id="FS3" class="IS" onclick="window.location.href='Booking_Page.php'">
        </div>

        <div id="MDIV-4">
            <center>
                <h2>Toys and Accessories Stall</h2>
            </center>
            <img src="../Images/Hand Craft_Stall.png" alt="HC Stall" class="DIVpic">
            <input type="submit" value="Learn more >" id="FS4" class="IS" onclick="window.location.href='Booking_Page.php'">
        </div>

        <div id="MDIV-5">
            <center>
                <h2>Arcade</h2>
            </center>
            <img src="../Images/Arcade_Stall.png" alt="Arcade Stall" class="DIVpic">
            <input type="submit" value="Learn more >" id="FS5" class="IS" onclick="window.location.href='Booking_Page.php'">
        </div>

        <hr id="h3">
        <center>
            <h2 id="f2">Information About Booking</h2>
        </center>
        <hr id="h4">
        <p id="deel1" class="detail1">1. You have to choose the stall Categories (Food, Art, Toys, Accessories, Hand Craft, Arcade)</p>
        <p id="deel2" class="detail1">2. You need to Choose the Location</p>
        <p id="deel3" class="detail1">3. You need to Choose the Time and Date</p>
        <p id="deel4" class="detail1">4. You need to Choose the Payment Method (Bkash, Nagad, Bank, Card)</p>
        <a href="#mainimg" id="top">TOP</a>
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