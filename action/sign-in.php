<?php

require_once('../config/database.php');
global $database;
$key = $_POST['key'];
$password = $_POST['password'];
$otp = $_POST['otp'];

if(isset($_POST['submit'])){

 $sql = "SELECT username,mobile,email,password,otp from users WHERE (username= ? or mobile=? or email =?) and password= ? and otp=?";

 $query = $database->prepare($sql);
 $query->execute([$key,$key,$key,$password,$otp]);
 $result = $query->fetchAll(PDO::FETCH_ASSOC);
 
 if($result)
 {
     echo "<script>alert('موفقیت آمیز بود ورود')</script>";
     header('Location:../index.php?logined=ok');
 }
 else {
     echo "<script>alert('اطلاعات وارد شده صیحیح نیست')</script>";
     header('Location:../index.php?notuser=ok');
 }
}
?>