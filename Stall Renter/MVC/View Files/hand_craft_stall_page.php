<?php
include("../Controller Logic/hand_craft_stall_page_Valid.php");
include("../Controller Logic/session_and_cookie_check.php");
include("../Stylesheets/hand_craft_stall_page_css.php");
include("../JavaScript Files/hand_craft_stall_page_js.php");
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Hand Craft Stall Information
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
            <p id="Info">The Hand Craft Stall section highlights traditional and handmade products, providing skilled artisans with an opportunity to showcase unique items such as handmade décor, textiles, pottery, and cultural crafts. To maintain quality and ensure fair participation, a limited number of hand craft stalls are available. This controlled allocation helps preserve the authenticity of handmade products while offering visitors a rich cultural shopping experience.

                        Hand craft stalls operate during fixed festival hours from 10:00 AM to 4:00 PM, and stall renters must strictly adhere to the assigned schedule. Artisans are expected to maintain proper product display, ensure stall cleanliness, and follow all festival rules and guidelines. The admin has the authority to monitor compliance and take necessary action if any regulations are violated.

                        For booking convenience, multiple payment options are supported, including bKash, Nagad, bank transfer, and card payment. Once the payment is completed and verified, the admin confirms the stall allocation along with the specific location and operating time. This structured and transparent system ensures a smooth experience for artisans, organizers, and visitors alike.</p>
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