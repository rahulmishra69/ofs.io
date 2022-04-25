<?php
    require('connection.inc.php');
    require('function.inc.php');
    $msg ='';
    if(isset($_POST['submit']))
  {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
    $sql = "SELECT * from admin where email='$email'";
    $query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($query);

    if($count > 0)
    {
      $msg = "Email already exist ";
    }
    else 
    {
        
      $insert = "INSERT INTO admin (name, email, password)values('$name','$email','$password')";
      $iquery = mysqli_query($con, $insert);

      if($iquery)
      {
        header('location:login.php');
      }
      else 
      {

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
    <title>Register</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body >

   <div class="center">
    <div style="width: 104%;" class="header">Register</div>
    <form action="" method="post">
        <input type="text" name="name"  placeholder="Enter Name" required>
        <i class="fas fa-user" style="color: #eebf00;" ></i>
        <input type="email" style="margin-top: 1rem;" name="email"  placeholder="Enter your email" required>
        <i class="far fa-envelope"  style="margin-top:2rem; color:#eebf00; " ></i>
        <input type="password" id="pswrd" name="password" placeholder="Create your password" required>
        <i class="fas fa-lock" style="color: #eebf00;"  onclick="show()"></i>
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











