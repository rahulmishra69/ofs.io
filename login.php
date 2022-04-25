<?php
    require('connection.inc.php');
    require('function.inc.php');
$msg='';
if(isset($_POST['submit']))
{
  $email =  $_POST['email'];
  $password = $_POST['password'];
  $email_search ="SELECT * FROM admin where email='$email' and password='$password'";
  $query=mysqli_query($con, $email_search);
  $count =mysqli_num_rows($query);

  if($count)
  {
    $email_pass = mysqli_fetch_assoc($query);

    $db_pass =$email_pass['password'];
    $_SESSION['name'] = $email_pass['name'];
    $_SESSION['ADMIN_LOGIN']='yes';
    header('location:admin.php');
    
  
  }
    else 
    {
     $msg = "invalid email and password";
    }
  }


?>
<style>
        @media(max-width:450px)
        {

            .center .header
            {
                position: relative;
                font-size: 5px;
            }
            .center .rahul 
            {
                position: absolute;
                width: 100%;
            }
          
        }

    </style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



</head>
<body >

   <div class="center">
    <div style="width: 103%;" class="header">Login</div>
    <form action="" class="rahul" method="post">
        <input type="email" name="email"  placeholder="Enter email" required>
        <i class="fas fa-envelope" style="color: #eebf00;" ></i>
        <input type="password" id="pswrd" name="password" placeholder="Enter your password" required>
        <i class="fas fa-lock" style="color: #eebf00;" onclick="show()"></i>
        <a href="forgot.php">Forgot Password</a><br>

        <input type="submit" name="submit" id="submit" value="submit">
       
        <div style="color: red; margin: top 2.5rem; padding:1rem;"> <?php echo $msg ?></div>
    </form>
    
   </div>

 
    <script>
        function show()
        {
            let pswrd = document.getElementById('pswrd');
            let icon = document.querySelector('.fas');
            if(pswrd.type === "password")
            {
                pswrd.type = "text";
                pswrd.style.marginTop = "20px";
                icon.style.color = "#eebf00";
            }
            else
            {
                pswrd.type = "password";
                icon.style.color = "#eebf00";
            }
        }

    </script>
</body>
</html>

