<?php
require('connection.inc.php');
$msg ='';
if(isset($_POST['submit']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $sql = "SELECT * FROM users where email='$email'";
    $query = mysqli_query($con, $sql);
    $emailcount = mysqli_num_rows($query);
    if($emailcount > 0)
    {
       header('location:reset_password.php');
    }
    else 
    {
        $msg ="no email found";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="forgot.css">
</head>
<body style="background-color: #eebf00;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form method="POST">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email</p>
                    <div class="form-group">
                        <input class="form-control" type="text" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="submit" value="Verify">
                    </div>
                    <p style="color: red;"><?php echo $msg ?></p>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/jquery.js"></script>
</body>
</html>