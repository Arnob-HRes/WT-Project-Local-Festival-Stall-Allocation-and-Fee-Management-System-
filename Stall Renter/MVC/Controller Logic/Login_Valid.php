<?php
include('../Database or Model Files/DataBase.php');
session_start();
if(isset($_SESSION["username"])){
    header("Location:Dashboard_Renter.php");
    exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user=$_POST["username"];
    $pass=$_POST["password"];


    if($user=="" && $pass==""){
        $error="Fill every box !";
    }
    else if($user==""){
        $error="Fill username !";
    }
    else if($pass==""){
        $error="Fill password !";
    }
    else{
        $conn=connectsql();
        $result=getuser($conn,$user,$pass);
        $row=$result->num_rows;
        if($row==1){
            foreach($result as $R){
            $_SESSION["username"]=$R["Username"];
            $_SESSION["fullname"]=$R["FullName"];
            $_SESSION["number"]=$R["ContectNumber"];
            $_SESSION["email"]=$R["Email"];
            $_SESSION["address"]=$R["Address"];
            }
            header("Location:Dashboard_Renter.php");
            exit();
        }
        else{
         $error="Invalide Username or Password !";
       }
    }
}
?>