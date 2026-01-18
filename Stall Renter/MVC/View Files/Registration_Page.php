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

            <form method="POST" enctype="multipart/form-data">
 
                <div class="c3">
                    <label> Full Name </label>
                    <input type="text" name="fullname" placeholder="Enter Full Name">
                </div>

                <div class="c3">
                    <label> Address </label>
                    <input type="text" name="address" placeholder="Enter Present Address">
                </div>

                <div class="c3">
                    <label> Contact Number</label>
                    <input type="number" name="number" placeholder="Enter Valid number">
                </div>
                
                    <div class="c3">
                    <label> Email Address</label>
                    <input type="email" name="email" placeholder="Enter Valid Email">
                </div>

                <div class="c3">
                    <label> Upload Your Photo </label>
                    <input type="file" name="file" placeholder="">
                </div>

                <div class="c3">
                    <label> Password </label>
                    <input type="password" name="password" placeholder="Create Password">
                </div>

                
                <div class="c3">
                    <label> Confirm Password </label>
                    <input type="password" name="confirm_password" placeholder="Confirm Password">
                </div>

                <button type="submit" id="b1"> Register </button>

                <p class="c4"> 
                    Already have an account? <a href="LOGIN_PAGE.php">Login</a>
                </p>
            </form>
        </div>
        <div id="show">
                Status: <br>
                <?php if(isset($error)){echo $error;}?>
            </div>
    </body>
</html>