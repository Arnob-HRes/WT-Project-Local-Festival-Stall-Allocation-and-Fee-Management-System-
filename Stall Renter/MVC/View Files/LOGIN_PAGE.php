<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>
            LOGIN Page
        </title>
        <meta name="description" content="This is a Web site for Local Festival Stall Allocation & Fee Management System" >
        <meta name="author" content="Arnob Sarker Supta and Hridrita Saha Moon">
        <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1800">
        <link rel="stylesheet" href="../Stylesheets/LOGIN_PAGE.css">
    </head>
    <body>
        <img src="../Images/LOGIN_PAGE_BACKGROUND.jpg" alt="LOGIN PAGE BACKGROUND" id="Background">

        <button id="B1" onclick="window.location.href='HOME_PAGE.php'">Home Page</button>
        <form method="post" id="f1">
            <center>
                <h2 id="T1">Login</h2>
            </center>
            <input type="text" id="I1" class="Input" name="username" value="username">
            <input type="text" id="I2" class="Input" name="password" value="password">
            <input type="submit" id="S1" name="loginButton" value="Login">
            <a href="../View Files/Forgot_Password_Page.php" id="FP">Forgot Password?</a>
            <center>
                <p id="p1">Don't have an account? <a href="../View Files/Registration_Page.php" id="Reg"><b>Registe</b>r</a></p>
            </center>
            
        </form>

        <script src="../JavaScript Files/LOGIN_PAGE.js"></script>
    </body>
</html>