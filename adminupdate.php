<?php
session_start();
include('common/db.php');
include('common/logedin.php');

    $adminid           = $_POST["adminid"];
    $username          = $_POST["username"];
    $fathersname       = $_POST["fathersname"];
    $mothersname       = $_POST["mothersname"];
    $phone             = $_POST["phone"];
    $dob               = $_POST["dob"];
    $localaddress      = $_POST["localaddress"];
    $permanentaddress  = $_POST["permanentaddress"];
    $gender            = $_POST["gender"];
    $department        = $_POST["department"];
    $email             = $_POST["email"];
    $password          = $_POST["password"];    
    
    
    $query = "UPDATE administrator SET 
           adminid='$adminid', username = '$username', fathersname ='$fathersname', mothersname = '$mothersname', 
           phone = '$phone', dob = '$dob', localaddress = '$localaddress', permanentaddress ='$permanentaddress' , 
           gender = '$gender',department='$department',email='$email',password='$password' 
           WHERE
          adminid = '$adminid' ";
    $result = mysqli_query($connect,$query);
  
  

  header("Location: profile.php");
  

    ?>