<?php 
require('connection.inc.php');
$msg='';


if(isset($_POST['submit']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $sql = "SELECT * FROM users where email='$email'";
    $query = mysqli_query($con, $sql);
    $emailcount = mysqli_num_rows($query);
    if($emailcount > 0)
    {
        
    }
    else 
    {
        $msg ="no email found";
    }
}

if(isset($_REQUEST['submit']))
{
    if(($_REQUEST['email']=="")||($_REQUEST['newpass']==""))
    {
        echo "please fill the form";
    }
    else 
    {
        $email = $_REQUEST['email'];
        $newpassword=$_REQUEST['newpass'];
        
        $sql = "UPDATE users set password='$newpassword' where email='$email'";
        $res = mysqli_query($con, $sql);

        if($res)
        {
            header('location:user-login.php');  
        }
        else 
        {
            $msg= "not updated";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="forgot.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form method="POST" autocomplete="off">
                    <h2 class="text-center">Your Password</h2>
                   <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="your email">
                    </div>
                   
                    <div class="form-group">
                        <input class="form-control" type="password" name="newpass" placeholder="your new password">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="submit" value="Change">
                    </div>
                    <div style="color: red; margin: top 2.5rem; padding:1rem;"> <?php echo $msg ?></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>