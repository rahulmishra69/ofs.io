<?php
    require('connection.inc.php');
    require('function.inc.php');
    $message='';
    $rahul='';


    if(isset($_REQUEST['submit']))
    {
        if(($_REQUEST['name']=="")||($_REQUEST['number']=="")||($_REQUEST['address']=="")||($_REQUEST['state']=="")||($_REQUEST['city']=="")||($_REQUEST['mode']==""))
        {
            echo "please fill the form";
        }
        else 
        {
            $name = $_REQUEST['name'];
            $number = $_REQUEST['number'];
            $address = $_REQUEST['address'];
            $state = $_REQUEST['state'];
            $city = $_REQUEST['city'];
            $mode = $_REQUEST['mode'];

            $sql = "INSERT INTO rahul (food,price,username,number,address,state,city,mode)VALUES('Lichi','299','$name','$number','$address','$state','$city','$mode')";
            $res = mysqli_query($con, $sql);
            if($res)
            {
                

            }
            else 
            {
                echo "not filded";
            }
        }
    }


    if(isset($_POST['submit']))
    {
      $state =  $_POST['state'];
      $city = $_POST['city'];
      $email_search ="SELECT * FROM location where state='$state' and city='$city'";
      $query=mysqli_query($con, $email_search);
      $count =mysqli_num_rows($query);
  
      if($count)
      {
        $email_pass = mysqli_fetch_assoc($query);
  
        $db_pass =$email_pass['city'];

        header('location:congrats.php');
        
      
      }
        else 
        {
         $message = "To deliver only for Gujarat";
        }
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osm Food Store</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="./css/style.css">
    <style>
       .product select
        {
            display: block;
            padding: 5px 10px;
       }
       .product input
       {
           width: 50px;
           height: 40px;
           padding-left: 10px;
           font-size: 16px;
           margin-right: 10px;

       }
       .product input:focus
       {
           outline: none;
       }

       section.product 
{
    padding-top: 8rem;
    margin-bottom: 2rem;
}
section.product h6 
{
    margin-top: -6rem;
    margin-bottom: 1rem;
}
section.product h3 
{
    margin-bottom: 0.5rem;
}
section.product p
{    
     margin-bottom: 0.5rem;
}
section.product h4 
{
    margin-bottom: 0.5rem;
}
 
section.product h2 
{
 margin-bottom: 0.5rem;
 padding-top: 0.5rem;
}
section.product span 
{
    line-height: 1.5;
}
    </style>
</head>
<body>
    <div class="main-wrapper">
        <div class="nav-background">
         <div class="mobile-logo">
            <img src="./icons/logo.svg">
         </div>
         <div class="mobile-nav">
            <div class="cart">
                <div class="flex item-center">
                    <img src="./icons/cart-dark.svg">
                    <div><a href="user-login.php">Log in</a></div>
                </div>
            </div>
            
            <div class="nav-top">
                <ul>

                    <li>
                       <div onclick="window.location.href='indexx.php';"><a  onclick="window.location.href='indexx.php';">Home</a></div>
                    </li>
                    <li>
                        <a onclick="window.location.href='offer.php';">Offer</a>
                    </li>
                    <li>
                        <a onclick="window.location.href='subscribe.php';">subscribe</a>
                    </li>
                    <li>
                        <a onclick="window.location.href='products.php';">Products</a>
                    </li>
                    <li>
                        <a onclick="window.location.href='service.php';">services</a>
                    </li>
                    <li>
                        <a onclick="window.location.href='newses.php';">News</a>
                    </li>
                    <li>
                        <a onclick="window.location.href='conntact.php';">contact</a>
                    </li>
                </ul>
            </div>

            <div class="contact flex item-center">
                <img src="./icons/phone.svg">
                <div>
                    <h5>Call US: (+84) 123 456 789</h5>
                    <h6>E mail:rahulmishra3865@gmail.com</h6>
                </div>
            </div>

            <div class="time flex item-center">
                <img src="./icons/clock.svg">
                <div>
                    <h5>Working Hours:</h5>
                    <h6>Mon - Sat (8.00am - 12.00am)</h6>
                </div>
            </div>
         </div>
        </div>

        <div class="site-content-wrapper">
            <div class="nav-trigger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-bar-chart">
                <line x1="12" y1="20" x2="12" y2="10" />
                <line x1="18" y1="20" x2="18" y2="4" />
                <line x1="6" y1="20" x2="6" y2="16" /></svg>

            </div>
            <div class="site-content">

        <section class="checkout">
        <div class="container">
            <div class="form-control">
                <img style="width:200px; margin-top:20%; margin-bottom:1rem; " src="./images/rasberry.png">
                <h3 py-4>Chili</h3>
            <p style="margin-left:2%; margin-top:1.5%; margin-bottom:0.7rem;"><s>&#8377; 598</s></p>
            <h5 style="color: red; margin-left:1.5%;">&#8377; 299 only</h5>
            <button onclick="window.location.href='scroll-product.php';" style="margin-top: 1rem;" class="btn btn-secondary">Cancel Order</button>

            </div>

         </div>

   <div style="margin-top: -32rem;" class="center">
    <div style="width: 108%;" class="header">Please Fill The Details</div>
    <form action="" method="post">
        <input type="text" name="name" style="margin-bottom: 0.7rem;" placeholder="Enter Your name" required>
        <i class="fas fa-user"></i>
        <input type="number" style="margin-bottom: 0.7rem;" name="number" placeholder="Enter your number" required>
        <i class="fas fa-phone"></i>
       
        <textarea rows="5" cols="40" style="margin-bottom: 0.7rem;" name="address" placeholder="enter your  address" ></textarea>
        <input type="text" id="state" style="margin-bottom: 0.7rem;" name="state" placeholder="Enter your state" required>
        <i class="fas fa-map"></i>
        <input type="text" id="city" style="margin-bottom: 0.7rem;" name="city" placeholder="Enter your city" required>
        <i class="fas fa-city"></i>
        <td>Payment Mode:</td><br>
        <input type="radio" name="mode" style="width: 20px; cursor:pointer; " value="cod">Cod
        <input type="radio" name="mode" onclick="window.location.href='https://rzp.io/i/rBxyL8kUN';" style="width: 20px;" class="btn btn-primary"  value="upi">Upi
        <div style="color: red; margin: top 2.5rem; padding:1rem;"> <?php echo $message ?></div>
        <input type="submit" name="submit" style="font-size: 13px; margin-top:-1rem; " value="Proceed To check">
        
    </form>
    
   </div>
        </section>
        </div>

    </div>
    </div>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/app.js"></script>
</body>
</html>
