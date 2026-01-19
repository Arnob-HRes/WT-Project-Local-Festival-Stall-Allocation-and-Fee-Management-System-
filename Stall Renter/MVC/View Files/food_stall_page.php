<?php
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
        <p id="TT1">FOOD STALL</p>
        <div id="d1">
            Information
        </div>
        <div id="TT2">
            <p id="Info">The Food Stall section is designed to offer a vibrant and well-organized space for vendors and visitors during the festival. A limited number of food stalls are available to ensure quality control, proper hygiene, and smooth crowd management. This limited allocation helps maintain a balanced variety of food options while avoiding congestion and unfair competition among vendors. Stall availability is managed on a first-come, first-served basis, subject to administrative approval.

                        The food stalls operate at fixed hours from 10:00 AM to 4:00 PM, allowing visitors to enjoy fresh meals and snacks throughout the main festival period. Vendors are required to strictly follow the assigned time schedule and comply with festival regulations, including cleanliness, food safety standards, and stall layout guidelines. Any violation may result in cancellation of stall allocation.

                        To make the booking process convenient and accessible, multiple payment methods are supported. Stall renters can complete payments using bKash, Nagad, bank transfer, or card payment, ensuring flexibility for all users. Once payment is successfully completed and verified, stall allocation details such as location and operating time are confirmed by the admin. This structured system ensures transparency, efficiency, and a smooth experience for both food vendors and festival organizers.</p>
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