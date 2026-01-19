<?php
include("../Controller Logic/session_and_cookie_check.php");
include("../Stylesheets/art_stall_page_css.php");
include("../JavaScript Files/art_stall_page_js.php");
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Art Stall Information
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
        <p id="TT1">ART STALL</p>
        <div id="d1">
            Information
        </div>
        <div id="TT2">
            <p id="Info">The Art Stall section is dedicated to showcasing creativity and craftsmanship, providing artists with a platform to display and sell paintings, handmade crafts, sculptures, and other artistic works. To maintain a high standard and ensure equal opportunity, only a limited number of art stalls are available. This controlled allocation helps preserve the artistic atmosphere of the festival while giving visitors a curated and enjoyable experience.

                        Art stalls operate during fixed festival hours from 10:00 AM to 4:00 PM, and stall renters are required to adhere strictly to the assigned schedule. Artists must ensure proper presentation of their work, maintain stall cleanliness, and follow all festival guidelines. The admin reserves the right to approve or reject stall requests based on availability and compliance with festival policies.

                        For convenience and transparency, multiple payment options are supported for art stall booking. Renters can make payments through bKash, Nagad, bank transfer, or card payment. After successful payment verification, the admin confirms the stall allocation along with location and time details. This structured process ensures a smooth, fair, and professional environment for artists to promote their work and engage with festival visitors.</p>
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