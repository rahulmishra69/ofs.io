<?php
  require('connection.inc.php');
  $msg = '';
  $message='';
  if(isset($_POST['submit']))
  {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $added_on =date('y-m-d h-m-s');
    
    $sql = "SELECT * from users where email='$email'";
    $query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($query);

    if($count > 0)
    {
      $msg = "Email already exist ";
    }
    else 
    {
        
      $insert = "INSERT INTO users (name, email, password, added_on)values('$name','$email','$password','$added_on')";
      $iquery = mysqli_query($con, $insert);

      if($iquery)
      {
        ?>
        <script>
          alert('Thankyou For Registration');
        </script>
        <?php 
        header('location:user-login.php');
      }
      else 
      {
        ?>
        <script>
          alert('not be sussesfull');
          </script>
          <?php
      }

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
    <meta password="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="./images/donut.jpg" alt="">
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

        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="name" id="name" placeholder="Enter your name" >
                
                </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Enter your email" >
                
            </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Enter your password" >
                
            </div>
         
              <div class="button input-box">
                <input type="submit" id="button" name="submit" value="Sumbit">
              </div>
              <div style="color: red; margin: top 2.5rem; padding:1rem;"> <?php echo $message ?></div>
              <div style="color: red; margin: top 2.5rem; padding:1rem;"> <?php echo $msg ?></div>
            </div>
      </form>
    </div>
        
    </div>
    </div>
  </div>
  
  <script src="./js/main.js"></script>
  <script src="./js/jquery.js"></script>
  
</body>
</html>
