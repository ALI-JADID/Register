<?php

require_once('../config/database.php');

global $database;
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['mobile'];
$password = $_POST['password'];

if(isset($_POST['submit']))
{
  if(empty( $username && $email && $phone && $password ))
  {
    echo "<script>alert ('لطفا فیلدها را تکمیل کنید')</script>";
    header("Location:./index.php");
  } 
  else{

    if(!$database){
        echo "cannot connect databse";
    }else{
    $sql = "INSERT INTO `users` (`username`,`email`,`mobile`,`password`) VALUES 
    (?,?,?,?) ";

    $query = $database->prepare($sql);
    $result = $query->execute([$username,$email,$phone,$password]);

    if($result){

      echo "<script>alert('اطلاعات با موفقیت ثبت شد')</script>" ; 
     header("Location: ../index.php");
    }
    else echo "<script>alert('خطا در ثبت اطلاعات')</script>" ; 
  }
  }
}