<?php
include("../Controller Logic/session_and_cookie_check.php");
include("../Stylesheets/update_info_css.php");
include("../JavaScript Files/update_info_js.php");
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            Update Information
        </title>
        <meta name="description" content="This is a Web site for Local Festival Stall Allocation & Fee Management System" >
        <meta name="author" content="Arnob Sarker Supta and Hridrita Saha Moon">
        <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1800">
    </head>
    <body>
        <center>
            <p id="HT">UPDATE INFORMATION</p>
            <img src="" alt="Profile" id="Profile">
        </center>
        <div id="InfoDiv">
            <p class="in"><?php echo $_SESSION["fullname"] ?></p><br>
            <p class="in"><?php echo $_SESSION["number"] ?></p><br>
        </div>
        <div id="INF1">
            <p class="in"><?php echo $_SESSION["email"] ?></p><br>
            <p class="in"><?php echo $_SESSION["address"] ?></p><br>
        </div>
        <button onclick="window.location.href='Profile_Page.php'" id="pp">< Profile Page</button>
        <center>
                <fieldset id="f1">
                    <legend>Provide Valid Information</legend>
                    <label for="name">New Full Name:</label><br>
                    <input type="text" name="name" id="name"><br>
                    <label for="phone">New Phone Number:</label><br>
                    <input type="text" name="phone" id="phone"><br>
                    <label for="email">New Email:</label><br>
                    <input type="email" name="email" id="phone"><br>
                    <label for="address">New Address:</label><br>
                    <input type="text" name="address" id="address"><br>
                    <input type="submit" value="Update" id="sub" onclick=updateajax()>
                </fieldset>
        </center>
        <div id="show">Status</div>
    </body>
</html>