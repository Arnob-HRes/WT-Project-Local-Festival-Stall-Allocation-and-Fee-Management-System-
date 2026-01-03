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
        $sql="SELECT * FROM user WHERE Username='".$user."' AND Password='".$pass."'";
        $result=$conn->query($sql);
        $row=$result->num_rows;
        if($row==1){
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