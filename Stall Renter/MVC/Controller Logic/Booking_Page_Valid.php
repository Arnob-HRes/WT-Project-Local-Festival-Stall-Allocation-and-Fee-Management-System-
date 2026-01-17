<?php
header('Content-Type: application/json');
include("../Controller Logic/session_and_cookie_check.php");
include('../Database or Model Files/DataBase.php');

date_default_timezone_set('Asia/Dhaka');
$current_date = date('Y-m-d');
$data=json_decode($_POST['BookingINFO'],true);
$con=connectsql();
$result=getBook($con,$_SESSION["username"]);
if($data['username']=="" && $data['phonenumber']=="" && $data['email']=="" && $data['stallcetagory']=="" && $data['location']=="" && $data['paymentmethod']==""){
    echo json_encode(['error' => 'Need Every Box']);
}
else if($data['username']==""){
    echo json_encode(['error' => 'Need to Fill username']);
}
else if($data['phonenumber']==""){
    echo json_encode(['error' => 'Need to Fill Phone Number']);
}
else if($data['email']==""){
    echo json_encode(['error' => 'Need to Fill Email']);
}
else if($data['stallcetagory']==""){
    echo json_encode(['error' => 'Need to Fill Cetagory']);
}
else if($data['location']==""){
    echo json_encode(['error' => 'Need to Fill Location Box']);
}
else if($data['bookfor']<=$current_date){
    echo json_encode(['error' => 'Need to Give Farther Date']);
}
else if($data['paymentmethod']==""){
    echo json_encode(['error' => 'Choose a valid Payment Method']);
}
if($data['username']!=$_SESSION["username"]){
    echo json_encode(['error' => 'Invalid Username']);
}
else{
    $R=inBookingandPayment($con,$data);
    if($R != 2){
        echo json_encode(['error' => 'Database Error']);
    }
    else{
        echo json_encode(['successful' => '<b>Your Booking is Succesfull <br> (You can check your status in your profile)<\b>']);
    }
}
?>