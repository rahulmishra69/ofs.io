<?php
require('connection.inc.php');
require('functtion.inc.php');
$msg='';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body >

   <div class="center">
    <div style="width: 108%;" class="header">My Account</div>
    <form action="" method="post">
       <div style="margin-bottom: 1rem;"><p style="font-weight:bold; margin-bottom:0.5rem;">Name:-</p> <?php echo $_SESSION['name']; ?></div>
       <div><p style="font-weight: bold; margin-bottom:0.7rem; ">Email:-</p><?php echo $_SESSION['email'] ?></div>
       <br>
       <div style="margin-top:2rem; margin-bottom:3rem;"><a href="sub.php" style="text-decoration: none; " class="btn btn-primary">subscription</a></div>
        <div style="margin-top:2rem; margin-left:5rem;"><a href="history.php" style="text-decoration: none;" class="btn btn-primary">History</a></div>
        <div style="margin-top:-1.3rem; margin-left:15rem; "><a style=" color:white; text-decoration:none; " class="btn btn-primary" href="indexx.php">Home</a></div>
       
        <div style="color: red; margin: top 2.5rem; padding:1rem;"> <?php echo $msg ?></div>
    </form>
    
   </div>

</body>
</html>











