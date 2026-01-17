<?php
header('Content-Type: application/json');
include("../Controller Logic/session_and_cookie_check.php");
include('../Database or Model Files/DataBase.php');

$data=json_decode($_POST['UpdateINFO'],true);
$con=connectsql();

if($data["fullname"]=="" && $data["phone"]=="" && $data["email"]=="" && $data["address"]==""){
    echo json_encode(['error'=>'Fill Every Box']);
}
else if($data["fullname"]==""){
    echo json_encode(['error'=>'Fill New Full Name']);
}
else if($data["phone"]==""){
    echo json_encode(['error'=>'Fill New Phone Number']);
}
else if($data["email"]==""){
    echo json_encode(['error'=>'Fill New Email']);
}
else if($data["address"]==""){
    echo json_encode(['error'=>'Fill New Address']);
}
else if(!preg_match('/^[a-zA-Z]+$/', $data["fullname"])){
    echo json_encode(['error'=>'Fill new Name correctly']);
}
else if(!ctype_digit($data["phone"]) || strlen($data["phone"])){
    echo json_encode(['error'=>'Fill new Phone with only Number and 11 digit']);
}
else{
    $R=updateuser($con,$data,$_SESSION["username"]);
    if($R){
        echo json_encode(['successful'=>'Your Information is updated']);
        $_SESSION["fullname"]=$data["fullname"];
        $_SESSION["number"]=$data["phone"];
        $_SESSION["email"]=$data["email"];
        $_SESSION["address"]=$data["address"];
    }
    else{
        echo json_encode(['error'=>'Database error']);
    }
}
?>