<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN Page</title>
    <meta name="description" content="This is a Web site for Local Festival Stall Allocation & Fee Management System">
    <meta name="author" content="Arnob Sarker Supta and Hridrita Saha Moon">
    <meta name="keywords" content="Project, WT, JS, CSS, HTML, AIUB, CSE, Web Technology">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1800">
    <link rel="stylesheet" href="../Stylesheets/LOGIN_PAGE.css">
</head>
<body>
    <img src="../Images/LOGIN_PAGE_BACKGROUND.jpg" alt="LOGIN PAGE BACKGROUND" id="Background">

    <button id="B1" onclick="window.location.href='HOME_PAGE.php'">< Home Page</button>
    
    <?php
session_start();
$error = '';

if (isset($_POST['loginButton'])) {
    
    require_once('Admin/MVC/Database_or_Model_Files/Database.php'); 
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if (!empty($username) && !empty($password)) {
        
        
        if ($username === 'moon' && $password === 'moon1') {
            $_SESSION['is_loggedin'] = true;
            $_SESSION['username'] = 'moon';
            $_SESSION['role'] = 'admin';
            
            header('Location: Admin/MVC/View Files/Dashboard.php');
            exit;
        } 
        
        
        elseif ($username === 'arnob' && $password === 'arnob1') {
            $_SESSION['is_loggedin'] = true;
            $_SESSION['username'] = 'arnob';
            $_SESSION['role'] = 'renter';
            
            header('Location: Stall Renter/MVC/View Files/Dashboard_Renter.php'); 
            exit;
        }
        
        
        else {
            $result = getuser(connectsql(), $username, $password);
            if ($result && $row = $result->fetch_assoc()) {
                $_SESSION['is_loggedin'] = true;
                $_SESSION['username'] = $row['Username'];
                $_SESSION['role'] = strtolower($row['Role']);
                
                if ($_SESSION['role'] === 'admin') {
                    header('Location: Admin/MVC/View Files/Dashboard.php');
                } else {
                    header('Location: renter_dashboard.php');
                }
                exit;
            } else {
                $error = '❌ Invalid Username or Password!';
            }
        }
    } else {
        $error = '❌ Please fill all fields!';
    }
}
?>

    <form method="post" id="f1">
        <center>
            <h2 id="T1">Login</h2>
            <?php if ($error): ?>
                <div style="color: #ff4444; background: rgba(255,68,68,0.1); padding: 10px; border-radius: 5px; margin: 10px 0;">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>
        </center>
        <input type="text" id="I1" class="Input" name="username" placeholder="Username" required 
               value="<?= htmlspecialchars($_POST['username'] ?? '') ?>">
        <input type="password" id="I2" class="Input" name="password" placeholder="Password" required>
        <input type="submit" id="S1" name="loginButton" value="Login">
        
        <a href="../View Files/Forgot_Password_Page.php" id="FP">Forgot Password?</a>
        <center>
            <p id="p1">Don't have an account? <a href="../View Files/Registration_Page.php" id="Reg"><b>Register</b></a></p>
        </center>
    </form>

    <script src="../JavaScript Files/LOGIN_PAGE.js"></script>
</body>
</html>
