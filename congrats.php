<?php 
require('connection.inc.php');
require('function.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osm Food Store</title>
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="./css/style.css">
    <style>
      @media(max-width:450px)
      {
            section.rahul .container div img 
            {   position: relative;
                margin-top: 5rem;
               left: -20rem;
            }
            section.rahul .container div h2 
            {
               margin-left: -10rem;
            }
            section.rahul .container div button 
            {
                position: relative;
                left: -10rem;
            }
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
                    <div><a href="user-login.php">Logout</a></div>
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
                    <h5>Call US: (+91) 9913 351 566</h5>
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


            <section class="rahul" >
            <div class="container">
            <div style="margin-top:2rem; margin-left:18rem;">
                <img style="width:400px;" src="./fruit-images/congrats.jpg">
                <h2 style="margin-top:2rem; position:relative; right:2rem;">Thankyou For Ordering Food Have a Nice Day</h2>
              <div style="margin-top:2rem;">
              <button class="btn btn-primary" style="margin-right:2rem;" onclick="window.location.href='history.php';" >View Order</button>
                <button class="btn btn-secondary" onclick="window.location.href='indexx.php';" >Continue shooping</button>
              </div>

            </div>
            </div>

            </section>


   
   
    </div>
    </div>
    </div>
    <script src="./search.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/app.js"></script>
</body>
</html>