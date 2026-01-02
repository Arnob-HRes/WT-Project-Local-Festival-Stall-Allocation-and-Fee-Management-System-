<?php
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
        if($user=="Arnob" && $pass=="1234"){
        $_SESSION["username"]=$user;
        header("Location:Dashboard_Renter.php");
        exit();
       }
       else{
        $error="Invalide Username or Password !";
      }
    }
}
?>