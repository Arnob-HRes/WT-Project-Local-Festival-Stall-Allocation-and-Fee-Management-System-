<?php
include("../Controller Logic/toys_accessories_page_Valid.php");
include("../Controller Logic/session_and_cookie_check.php");
include("../Stylesheets/toys_accessories_page_css.php");
include("../JavaScript Files/toys_accessories_page_js.php");
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Toys and Accessories Stall Information
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
        <p id="TT1">TOYS & ACCESSORIES STALL</p>
        <div id="d1">
            Information
        </div>
        <div id="TT2">
            <p id="Info">The Toys and Accessories Stall section is designed to attract visitors of all ages by offering a wide range of toys, fashion accessories, and novelty items. To ensure proper organization and variety, only a limited number of stalls are allocated for this category. This controlled availability helps prevent overcrowding and allows each vendor to receive fair visibility while maintaining an enjoyable shopping environment for visitors.

                        These stalls operate during the fixed festival hours from 10:00 AM to 4:00 PM, and stall renters must strictly follow the assigned time schedule. Vendors are expected to display products neatly, maintain cleanliness, and comply with all festival rules and safety guidelines. Any misuse of space or violation of regulations may result in stall cancellation.

                        For smooth and secure transactions, multiple payment methods are supported for stall booking, including bKash, Nagad, bank transfer, and card payment. Once the payment is successfully completed and verified, the admin confirms the stall allocation along with the designated location and operating time. This organized system ensures transparency, efficiency, and a pleasant experience for both vendors and festival visitors.</p>
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