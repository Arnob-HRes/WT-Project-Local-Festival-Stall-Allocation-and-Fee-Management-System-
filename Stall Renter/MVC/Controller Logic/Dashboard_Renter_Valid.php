<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $topic=strtoupper($_POST["searchT"]);
    $error="";
    $v=true;

    if($topic==""){
        $error="Fill Topic Box";
        $v=false;
    }

    if($v){
        if($topic=="INFORMATION"){
            header("Location:../View Files/Dashboard_Renter.php#h3");
        }
        else if($topic=="CATAGORY"){
            header("Location:../View Files/Dashboard_Renter.php#h1");
        }
        else if($topic=="HOME" || $topic=="HOME PAGE"){
            header("Location:../View Files/HOME_PAGE.php");
        }
        else if($topic=="BOOKING" || $topic=="BOOKING PAGE"){
            header("Location:../View Files/Booking_Page.php");
        }
        else if($topic=="PROFILE" || $topic=="PROFILE PAGE"){
            header("Location:../View Files/Profile_Page.php");
        }
        else if($topic=="TOP"){
            header("Location:../View Files/Dashboard_Renter.php");
        }
    }
}
?>