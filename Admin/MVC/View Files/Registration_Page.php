a<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title> 
    <link rel="stylesheet" href="../Stylesheets/Registration.css">
</head>
<body>
    <div class="c1">
        <h2>Create Account</h2>
        <p class="c2">Register as Admin or stall Renter</p>

        <form id="registrationForm">
            <div class="c3">
                <label>Register as *</label>
                <select name="user_type" id="userType" required>
                    <option value="">-- Select User type --</option>
                    <option value="admin">Admin</option>
                    <option value="renter">Stall Renter</option>
                </select>
            </div>

            <div class="c3">
                <label>Username *</label>
                <input type="text" name="username" id="username" placeholder="Enter Username" required>
            </div>

            <div class="c3">
                <label>Full Name *</label>
                <input type="text" name="fullname" id="fullname" placeholder="Enter Full Name" required>
            </div>

            <div class="c3">
                <label>Address</label>
                <input type="text" name="address" id="address" placeholder="Enter Present Address">
            </div>

            <div class="c3">
                <label>Contact Number *</label>
                <input type="tel" name="phone" id="phone" placeholder="01xxxxxxxxx" required>
            </div>

            <div class="c3">
                <label>Email Address *</label>
                <input type="email" name="email" id="email" placeholder="your@email.com" required>
            </div>

            <div class="c3">
                <label>Password *</label>
                <input type="password" name="password" id="password" placeholder="Create Password" required minlength="6">
            </div>

            <div class="c3">
                <label>Confirm Password *</label>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
            </div>

            <button type="submit" id="registerBtn">
                <span class="btn-text"><a href="Dashboard.php">Register</a></span>
                <span class="loading" style="display:none;">Creating Account...</span>
            </button>

            <div id="message" class="message"></div>

            <p class="c4"> 
                Already have an account? <a href="login.html">Login</a>
            </p>
        </form>
    </div>

    <script src="registration.js"></script>
</body>
</html>
