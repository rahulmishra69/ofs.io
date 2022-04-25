<?php
  require('connection.inc.php');
  $msg = '';
  $message='';
  if(isset($_POST['submit']))
  {
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $email_search ="SELECT * FROM users WHERE email='$email' and password='$password'";
    $query=mysqli_query($con, $email_search);
    $count =mysqli_num_rows($query);

    if($count)
    {
      $email_pass = mysqli_fetch_assoc($query);

      $db_pass =$email_pass['password'];
      $_SESSION['name'] = $email_pass['name'];
      $_SESSION['email'] = $email_pass['email'];
      header('location:indexx.php');
      
    
    }
      else 
      {
       $message = "invalid email and password";
      }
    }
  
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="rahul.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="./images/coffee.jpg" alt="">
        <div class="text">
        
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="images/backImg.jpg" alt="">
        <div class="text">
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Enter your email">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Enter your password">
              </div>
              <div class="text"><a href="forgot-password.php">Forgot password?</a></div>
              <div class="button input-box">
                <input id="button" type="submit" name="submit" value="Sumbit">
              </div>
              <div style="color: red; margin: top 2.5rem; padding:1rem;"> <?php echo $message ?></div>
              <div style="color: red; margin: top 2.5rem; padding:1rem;"> <?php echo $msg ?></div>
            
            </div>
        </form>
      </div>
        
    </div>
    </div>
  </div>
</body>
</html>
