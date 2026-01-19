<?php
include("../Controller Logic/session_and_cookie_check.php");
include("../Stylesheets/Booking_Page_css.php");
include("../JavaScript Files/Booking_Page_js.php");
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Booking Page
        </title>
        <meta name="description" content="This is a Web site for Local Festival Stall Allocation & Fee Management System" >
        <meta name="author" content="Arnob Sarker Supta and Hridrita Saha Moon">
        <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1800">
    </head>
    <body>
        <img src="../Images/BookingSide.gif" alt="Booking" id="IMG1">
        <img src="../Images/booking.gif" alt="BookingTop" id=IMG2>
        <img src="../Upload/<?php echo $_SESSION["photo"]?>" alt="profile" id="profilepic">
        <h2 id="t1">You are Booking as</h2>
        <p id="bookingT">BOOKING PAGE</p>
        <h3 id="n1"><?php echo $_SESSION["fullname"]?></h3>
        <h3 id="n2"><?php echo $_SESSION["number"]?></h3>
        <h3 id="n3"><?php echo $_SESSION["email"]?></h3>
        <h3 id="n4"><?php echo $_SESSION["address"]?></h3>
        <button id="dashboard" onclick="window.location.href='Dashboard_Renter.php'">Go to Dashboard</button>
        <button id="logout" onclick="window.location.href='../Controller Logic/Logout.php'">Logout</button>

        <div id="MD">
            <center>
            <div  id="f1">
                <b>Username:</b> <br>
                <input type="text" name="name" id="I1" class="II" placeholder="Give your username"><br>
                <b>Phone Number:</b> <br>
                <input type="text" name="phone" id="I2" class="II" placeholder="Give any available phone number"><br>
                <b>Email:</b> <br>
                <input type="email" name="email" id="I3" class="II" placeholder="Give a valid available email"><br>
                <b>Stall Cetagory:</b> <br>
                <select name="stall" id="I4" class="II" required>
                <option value="" disabled selected hidden>Select a Stall</option>
                <option value="TandA">Toys and Accessories Stall</option>
                <option value="Food">Food Stall</option>
                <option value="Art">Art Stall</option>
                <option value="Hand">Hand Craft Stall</option>
                <option value="Arcade">Arcade</option>
                </select>
                <br>
                <b>Location:</b> <br>
                <input type="text" name="location" id="I5" class="II" placeholder="Which Location"><br>
                <b>Book for:</b> <br>
                <input type="date" name="date" id="I6" class="II"><br>
                <b>Payment Method:</b> <br>
                <select name="pay" id="I7" class="II" required><
                <option value="" disabled selected hidden>Select a Payment Method</option>
                <option value="bkash">Bkash</option>
                <option value="nagad">Nagad</option>
                <option value="bank">Bank</option>
                <option value="card">Card</option>
                </select>
                <br>
                <input type="submit" name="submit" id="submit" class="II" value="Book" onclick=bookingajax()><br>
            </div>
            </center>
            <div id="Info">
                You entered:
            </div>
            <div id="InfoS">
                Your status:
            </div>
        </div>
    </body>
</html>