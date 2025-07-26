<?php
session_start();
$notice ="";
if($_SERVER["REQUEST_METHOD"] =="POST"){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $valid_user = "admin";
  $valid_password ="123456";
  if($username === $valid_user && $password === $valid_password){
    $_SESSION['username'] = $username;
    header("Location: welcome.php");
    exit();
  }
  else{
    $notice = 'Wrong username or password! Please try again';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style1.css">
    <title>Log in to website</title>
  </head>
  <body>
    <div class="home">
      <nav>
        <a href="index.html" class="btn">Home</a>
        <a href="about.html" class="btn">About</a>
        <a href="jobs.html" class="btn">Job</a>
        <!-- <a href="apply.html" class="btn">Apply</a> -->
        <!-- <a href="enhancements.html" class="btn">Enhancement</a> -->
        <div class="line top"></div>
        <div class="line bottom"></div>
      </nav>
    </div>
    <div class="input">
      <h2 style="color: white; font-style: bold">Log in to Website</h2>
      <form method="POST" action="">
      <label style="color:white" >Username</label>  <br> 
      <input type="text" placeholder="Username/E-mail/Phone" name="username" required class="username"> <br> <br>
      <label style = color:white >Password</label>  <br>
      <input type="text" placeholder="Password" name="password" required class="password"> <br> <br>
        <input type="submit" value="Đăng nhập" class="submit"> <br> <br>
        <a href="forget.php" class="forget"> Forgot your Password or Username?</a>
      </form>
    </div>
      <p style="color: red;"><?php echo $notice ?></p>
  </body>
</html>
