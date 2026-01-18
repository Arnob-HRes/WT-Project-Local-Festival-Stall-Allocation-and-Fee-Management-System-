<?php
include('../Database or Model Files/DataBase.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fullname=$_POST["fullname"];
    $address=$_POST["address"];
    $number=(string)$_POST["number"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $cpass=$_POST["confirm_password"];
    $file_name=$_FILES["file"]["name"];
    $file_size=$_FILES["file"]["size"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    $mimeType = mime_content_type($temp_name);
    $folder="../Upload/".$file_name;
    $valid=true;

    if(empty($fullname) && empty($address) && empty($number) && empty($email) && empty($pass) && empty($cpass)){
        $error="Fill every box carefully";
        $valid=false;
    }
    else if(empty($fullname) || !preg_match('/^[a-zA-Z ]+$/', $fullname)){
        $error="Fill Full Name Box with Proper name carefully";
        $valid=false;
    }
    else if(empty($number) || $number < 0 || strlen($number) !=11){
        $error="Give a valid Phone Number (017xxxxxxxx)";
        $valid=false;
    }
    else if(empty($email)){
        $error="Fill email box";
        $valid=false;
    }
    else if(empty($pass) || strlen($pass) < 8 || !preg_match('/[A-Z]/', $pass) || !preg_match('/[a-z]/', $pass) || !preg_match('/[0-9]/', $pass) || !preg_match('/[\W_]/', $pass) || $pass !== trim($pass)){
        $error="Your Password must be uniqe. <br> 1. It should contain at least 8 characters. <br> 2. Must contain UPERCASE and lowecase.<br> 3. Must Contain a number.<br> 4. Must Contain a special Charactor.<br> 5.Must not cotain any space";
        $valid=false;
    }
    else if(empty($cpass)){
        $error="Fill Confarm Password";
        $valid=false;
    }
    else if($pass != $cpass){
        $error="Conferm Password dose not match";
        $valid=false;
    }
    else if(empty($file_name)){
        $error="Insert an image";
        $valid=false;
    }
    else if($file_size > 5 * 1024 * 1024){
        $error="Image size must be lower than 5MB";
        $valid=false;
    }
    else if ($_FILES["file"]["error"] !== UPLOAD_ERR_OK) {
        $error = "Image upload failed";
        $valid = false;
    }
    else if (!in_array($mimeType, $allowedTypes)) {
        $error = "Only JPG, PNG, GIF, or WEBP images are allowed";
        $valid = false;
    }
    if($valid){
        $len=strlen(trim($fullname));
        $r1=rand(0,($len-1));
        $r2=rand(intdiv($len,2),($len-1));
        $r3=rand(0,9);
        $r4=rand(0,9);
        $r5=rand(0,9);
        $str1=substr($fullname,0,$r1);
        $str2=substr($fullname,1,$r2);
        $username=str_replace(" ", "", $str1.$str2.$r3.$r4.$r5);
        $data=['fullname'=>$fullname,
               'address'=>$address,
               'number'=>$number,
               'email'=>$email,
               'cpass'=>$cpass,
               'image'=>$file_name,
               'username'=>$username];
        $con=connectsql();
        $result=register($con,$data);
        if($result){
            $error="Succesfully Registered.<br> Your username is: <br><b>".$username."</b>";
            move_uploaded_file($temp_name,$folder);
        }
        else{
            $error="Try Again";
        }
    }
    
}
?>