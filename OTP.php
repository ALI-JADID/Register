<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css"> 
  <title>Login</title>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up">
      <form method="post">
        <h1>Create Account</h1>
        
        <span>or use your email to registration</span>
        <input type="text" placeholder="UserName">
        <input type="email" placeholder="Email">
        <input type="text" placeholder = "mobilenumber">
        <input type="password" placeholder="Password">
        <button>Sign Up</button>
      </form>
    </div>
    <div class="form-container sign-in">
      <form method="post">
        <h1>OTP</h1>
        <!-- <div class="social-icons">
          <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
        </div> -->
       <br>
        <!-- <input type="number" placeholder="enter OTP"> -->
        <input type ="text" name='mobile' placeholder="enter your Mobile / Email" >
        <br>
        <a href="#">Forget your Password?</a>
        
        <div>
        <button type="submit" name="send-mobile">Send To Mobile</button>
        <a href="OTP.php" style="margin-left:15px;" > To Email </a>
        </div>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
          <p>Enter your Personal details to use all of site features</p>
          <button class="hidden" id="login">Sign In</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Hello, Friend!</h1>
          <p>Register with your Personal details to use all of site features</p>
          <button class="hidden" id="register">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="./assets/script/script.js"></script>
</html>


<?php
include('config/database.php');
global $database;
if (isset($_POST['send-mobile'])) {
 //echo 'ali';
 $mobile = $_POST['mobile'];
 $otp = rand(1000,9999);
 // $url = '';
// $sms = file_get_contents();

 $sql = "SELECT mobile from users WHERE (mobile =?)";

$query = $database->prepare($sql);
$result = $query->execute([$mobile]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
//$hasUser = $result->rowCount()>=1;

if(!$result)
{
  header('Location: ./index.php?error=notUser');

}
else{

  $sql = "UPDATE users SET otp=? WHERE mobile=?";
  $query = $database->prepare($sql);
  $result = $query->execute([$otp,$mobile]);
  
  if($result){
    echo "<script>alert('otp change')</script>";
  }
}
}

?>