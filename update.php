<?php
session_start();
include('common/db.php');
include('common/logedin.php');



    $employeeid        = $_POST["employeeid"];
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
    
    
    $query = "UPDATE employee SET 
           employeeid='$employeeid', username ='$username', fathersname ='$fathersname', mothersname ='$mothersname', 
           phone='$phone', dob='$dob', localaddress='$localaddress',permanentaddress='$permanentaddress', 
           gender='$gender',department='$department',email='$email',password='$password' 
           WHERE
          employeeid ='$employeeid' ";
    $result = mysqli_query($connect,$query);
  
  

  header("Location: allemployee.php");
  

    ?>