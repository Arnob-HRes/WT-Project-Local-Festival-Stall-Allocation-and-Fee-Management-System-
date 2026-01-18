<?php
function connectsql(){
$host ="localhost";
$user="root";
$pass="";
$dbname="WebTechProject";
 
$conn = new mysqli($host,$user,$pass,$dbname);

if ($conn->connect_error)
{
    die("Connection Fail: ". $conn->connect_error);
}
return $conn;
}

function getuser($C,$user,$pass){
    $sql="SELECT * FROM user WHERE Username='".$user."' AND Password='".$pass."'";
    return $C->query($sql);
}

function getadmin($C,$user,$pass){
    $sql="SELECT * FROM admin WHERE username='".$user."' AND pass='".$pass."'";
    return $C->query($sql);
}

function getBook($C,$user){
    $sql="SELECT * FROM booking WHERE Username='".$user."'";
    return $C->query($sql);
}

function inBookingandPayment($C,$detail){
    date_default_timezone_set('Asia/Dhaka');
    $current_date = date('Y-m-d');
    $num=0;
    $sql="INSERT INTO booking(Username,amount,phonenumber,email,location,stall,date) VALUES('".$detail['username']."',1000,'".$detail['phonenumber']."','".$detail['email']."','".$detail['location']."','".$detail['stallcetagory']."','".$detail['bookfor']."')";
    $sql2="INSERT INTO payment(Username,amount,status,date) VALUES('".$detail['username']."',1000,'Pending','".$current_date."')";
    if($C->query($sql)){
        $num += 1;
    }
    if($C->query($sql2)){
        $num += 1;
    }
    return $num;
}

function getPay($C,$user){
    $sql="SELECT * FROM payment WHERE Username='".$user."'";
    return $C->query($sql);
}

function updateuser($C,$user,$name){
    $sql="UPDATE user SET FullName='".$user["fullname"]."', ContactNumber='".$user["phone"]."',Email='".$user["email"]."',Address='".$user["address"]."' WHERE Username='".$name."'";
    return $C->query($sql);
}

function register($C,$user){
    $sql="INSERT INTO user(Username, FullName, ContactNumber, Email, Password, Address, ProfilePicture) VALUES('".$user["username"]."', '".$user["fullname"]."','".$user["number"]."','".$user["email"]."','".$user["cpass"]."','".$user["address"]."','".$user["image"]."')";
    return $C->query($sql);
}
?>