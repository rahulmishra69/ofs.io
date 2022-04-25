<?php
  require('connection.inc.php');
  require('functtion.inc.php');
  $msg = '';
  $message='';

  if(isset($_POST['submit']))
  {
    $email =  $_POST['email'];
    $email_search ="SELECT * FROM users where email='$email'";
    $query=mysqli_query($con, $email_search);
    $count =mysqli_num_rows($query);

    if($count)
    {
      $email_pass = mysqli_fetch_assoc($query);
      $db_pass =$email_pass['email'];

      header('location:congrats2.php');
    
    }
      else 
      {
       $msg = "please create account";
      }
    }
    

    if(isset($_REQUEST['submit']))
    {
      if(($_REQUEST['name']=="")||($_REQUEST['email']=="")||($_REQUEST['state']=="")||($_REQUEST['city']=="")||($_REQUEST['address']=="")||($_REQUEST['mode']==""))
      {

      }
      else 
      {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $state = $_REQUEST['state'];
        $city = $_REQUEST['city'];
        $address = $_REQUEST['address'];
        $mode = $_REQUEST['mode'];
        $sql = "INSERT INTO subscribe (name, email, state, city,address, mode, plan) VALUES('$name', '$email','$state','$city','$address','$mode','Premium plan')";

        $res = mysqli_query($con, $sql);
        if($res)
        {

        }
        else
        {
          echo "not to order";
        }
      }
    }
   
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head> 
<body style="overflow-y: scroll;">

   <div style="margin-top:2rem; height:1rem; " class="center">
    <div style="width: 107%;" class="header">Premium Plan</div>
    <form action="" method="post">
        <input type="text" name="name"  placeholder="Enter Your name" required>
        <i style="color: #eebf00;" class="fas fa-user"></i>
        <input style="margin-top:1rem;" type="email"  style="margin-top: 1rem; margin-bottom:1rem;" name="email" placeholder="Enter your Email" required><i  style="color: #eebf00;  top:18%; " class="fas fa-envelope"></i>

        <input type="text" name="state" id="state"  style="margin-top: 0.7rem; margin-bottom:0.7rem;"  placeholder="Enter Your state">
        <i style="color: #eebf00; margin-top:1.2rem; " class="fas fa-map"></i>
        <br>
        <input type="text" name="city" id="city" style="margin-top: 0.7rem; margin-bottom:0.7rem;"  placeholder="Enter Your city">
        <i style="color: #eebf00; margin-top:1.3rem; " class="fas fa-city"></i>
        <br>

        <div class="address" style="margin-bottom: -2.5rem;" ><textarea rows="5" class="address" name="address" cols="34" placeholder="Fill the address"></textarea></div><br>
        <p style="margin-top:1rem;">Payment-mode:</p>
        <input type="radio" style="width:10px; cursor:pointer; " value="Cod" name="mode">Cod
        <input type="radio" style="width:10px;cursor:pointer;" value="Upi" onclick="window.location.href='https://rzp.io/i/yqxcMpK';" name="mode">Upi<br>

        <input type="submit" style="margin-top: 2.5rem;" name="submit"style="margin-top:0.5rem;"   id="submit" value="submit"> 
        <div style="color: red; margin: top 2.5rem; padding:1rem;"><?php echo $msg ?></div>
        <div style="color: red; margin: top 2.5rem; padding:1rem;"><?php echo $message ?></div>
    </form>
    
   </div>

 
 
</body>
</html>