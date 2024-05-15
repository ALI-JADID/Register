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
 <!-- sign up  -->
  <div class="container" id="container">
    <div class="form-container sign-up">
      <form method="post" action="./action/sign-up.php">
        <h1>Create Account</h1>
        <div class="social-icons">
          <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>or use your email to registration</span>
        <input type="text" name ="username" placeholder="UserName">
        <input type="email" name = "email" placeholder="Email">
        <input type="text" name="mobile" placeholder = "mobilenumber">
        <input type="password" name ="password" placeholder="Password">
        <button type="submit" name="submit">Sign Up</button>
      </form>
    </div>
    <!-- sign in  -->
    <div class="form-container sign-in">
      <form method = "post" action="./action/sign-in.php">
        <h1>Sign In</h1>
        <div class="social-icons">
          <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>or use your email/password</span>
        <input type="text"  name="key" placeholder="Mobile / UserName / Email">
        <input type="password" name="password" placeholder="Password">
        <input typee="text" name="otp" placeholder="OTP" >
        <a href="#">Forget your Password?</a>
        <div style="display=inline;">
        <button type="submit" name="submit">Sign In</button>
        <a style="marrgin-left:15px;"  href="OTP.php"> Send OTP </a>
        </div>
        <?php if(isset($_GET['notuser'])) { ?>

          <p style="width:100%" class="alert alert-danger">user not found</p>

        <?php } else if(isset($_GET['logined'])){ ?>

          <p style="width:100%" class="alert alert-success">loginned</p>

        <?php  } ?>
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