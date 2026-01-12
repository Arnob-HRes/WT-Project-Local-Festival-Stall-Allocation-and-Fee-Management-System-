<?php
include("../Controller Logic/arcade_Valid.php");
include("../Controller Logic/session_and_cookie_check.php");
include("../Stylesheets/arcade_css.php");
include("../JavaScript Files/arcade_js.php");
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Arcade
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
        <p id="TT1">ARCADE</p>
        <div id="d1">
            Information
        </div>
        <div id="TT2">
            <p id="Info">The Arcade Stall section is designed to add excitement and entertainment to the festival by offering interactive games and fun activities for visitors of all ages. To ensure safety, smooth operation, and proper space management, only a limited number of arcade stalls are available. This controlled allocation helps maintain crowd flow and ensures each arcade operator can provide a high-quality gaming experience.

                        Arcade stalls operate during fixed festival hours from 10:00 AM to 4:00 PM, and stall renters must strictly follow the assigned time schedule. Operators are responsible for maintaining their gaming equipment, ensuring user safety, and keeping the stall area organized and secure. Any violation of safety or operational guidelines may result in cancellation of stall allocation.

                        For convenient and secure booking, multiple payment methods are supported, including bKash, Nagad, bank transfer, and card payment. After successful payment verification, the admin confirms the stall allocation along with the assigned location and operating time. This organized system ensures transparency, efficiency, and an enjoyable entertainment experience for both arcade operators and festival visitors.</p>
        </div>
        <button id="move" onclick="window.location.href='Booking_Page.php'">Booking Page</button>
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