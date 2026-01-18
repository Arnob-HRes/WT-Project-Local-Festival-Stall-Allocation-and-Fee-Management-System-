<?php
include('../Controller Logic/Registration_Page_Valid.php');
include('../Stylesheets/Registration_Page_css.php');
include('../JavaScript Files/Registration_Page_js.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
       <title> User Registration</title> 
    </head>
    <body>
        <div class="c1">
            <h2>Create Account</h2>
            <p class="c2"> Register as a stall Renter</p>

            <form action="REGISTRATION.PHP" method="POST">
 
                <div class="c3">
                    <label> Full Name </label>
                    <input type="text" name="fullname" placeholder="Enter Full Name" required>
                </div>

                <div class="c3">
                    <label> Address </label>
                    <input type="text" name="address" placeholder="Enter Present Address" required>
                </div>

                <div class="c3">
                    <label> Contact Number</label>
                    <input type="number" name="number" placeholder="Enter Valid number" required>
                </div>
                
                    <div class="c3">
                    <label> Email Address</label>
                    <input type="email" name="email" placeholder="Enter Valid Email" required>
                </div>

                <div class="c3">
                    <label> Upload Your Photo </label>
                    <input type="file" name="file" placeholder="" required>
                </div>

                <div class="c3">
                    <label> Password </label>
                    <input type="password" name="password" placeholder="Create Password" required>
                </div>

                
                <div class="c3">
                    <label> Confirm Password </label>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                </div>

                <button type="submit"> Register </button>

                <p class="c4"> 
                    Already have an account? <a href="LOGIN_PAGE.php">Login</a>
                </p>
            </form>
        </div>
    </body>
</html>