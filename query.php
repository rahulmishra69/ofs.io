<?php 
require("connection.inc.php");


   if(isset($_REQUEST['submit']))
   {
       if(($_REQUEST['name']=="")||($_REQUEST['email']=="")||($_REQUEST['mobile']=="")||($_REQUEST['query']==""))
       {
           echo "please fill  the form";
       }
       else 
       {
           $name= $_REQUEST['name'];
           $email= $_REQUEST['email'];
           $mobile= $_REQUEST['mobile'];
           $query= $_REQUEST['query'];
           $added_on= date('y-m-d h-m-s');

           $sql = "INSERT INTO contact (name, email, mobile, query, added_on) VALUES('$name','$email',' $mobile',' $query','$added_on')";
           if(mysqli_query($con , $sql))
           {
              header("location:indexx.php");
           }
           else
           {
               echo "mot filede";
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
    <title>Osm Food store</title>
    <style>
          @media(max-width:450px)
          {
            .center .header span
            {
               position: relative;
                left: 20%;
               font-size: 12px;
            }
             .center .rahul
            {
                margin-left: 2.5rem;
                position: absolute;
               width: 90%; 
               
            }
            .center .rahul .rahul1 
            {
                margin-top: 2.8rem;
            }
          }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;0,700;1,400&family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;0,700;1,400&family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
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
                        <a href="indexx.php">Home</a>
                    </li>
                    <li>
                        <a href="#sail">Offer</a>
                    </li>
                    <li>
                        <a href="#subscribe">subscribe</a>
                    </li>
                    <li>
                        <a href="#rahul1">Products</a>
                    </li>
                    <li>
                        <a href="#rahul4">services</a>
                    </li>
                    <li>
                        <a href="#News">News</a>
                    </li>
                    <li>
                        <a href="#contact">contact</a>
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

                <header style="background-color: #eebf00;" class="topbar">
                    <div class="container flex justify-between item-center">
                        <div class="icons">
                            <a style="text-align:center;position: relative; top: 0.7rem; " href="https://www.facebook.com/kishan.shukla.754570"><img src="./icons/facebook.svg"></a>
                            <a style="text-align:center; position: relative; top: 0.7rem;" href="https://www.google.com/"><img src="./icons/google.svg"></a>
                            <a style="text-align:center; position: relative; top: 0.7rem;" href="https://twitter.com/Kishan_shukla_?t=rhBMqy_DKNmX9T3biUNoPw&s=08"><img src="./icons/twitter.svg"></a>
                            <a style="text-align:center; position: relative; top: 0.7rem; " href="https://www.instagram.com/__rahul__mishra_01/"><img src="./icons/instagram.svg"></a>
                            <input name="search"  style="outline: none; border: none; width: 80%; font-size: 1.1rem; position: relative; top: -1rem; left: 6rem; font-size: 12px; border-radius: 8px; padding: 0.28rem; padding-left: 1rem;" type="text" placeholder="type here......" class="search" id="search-item" onkeyup="search()"><img style="background-color: black;  position: relative; top: -0.50rem; border-top-right-radius: 10px;  border-bottom-right-radius: 10px; padding: 0.28rem; left: 5rem;" src="./icons/search.svg">                          
                        </div>
                        <div class="auth flex justify-between item-center">
                            <div>
                                <?php echo $_SESSION['name']; ?>
                                <img style="cursor: pointer;" onclick="window.location.href='myaccount.php';" src="./icons/user-icon.svg">
                                <a href="user-login.php">Logout</a>
                            </div> 
                        </div>
                    </div>
            
                </header>
                <!----header close-1-->
                <header class="top">
                    <div class="container flex justify-between item-center">
                        <div class="phone flex">
                            <img src="./icons/phone.svg">
                            <div>
                            <h5>Call US: (+91) 9913 351 566</h5>
                                <h6>E mail:rahulmishra3865@gmail.com</h6>
                            </div>
                        </div>
                        <div class="logo">
                            <img src="./icons/logo.svg">
                        </div>
                        <div class="clock flex">
                            <img src="./icons/clock.svg">
                            <div>
                                <h5>Working Hours:</h5>
                                <h6>Mon - Sat (8.00am - 12.00am)</h6>
                            </div>
                        </div>
                    </div>
            
                   
                </header>
       <div style="margin-top:-1rem; " class="center">
    <div style="width: 108%;" class="header"><span>Query</span></div>
    <form action="" method="post">
    <div>
    <label for="name">Enter Name</label>
    <input type="text" name="name" placeholder="Enter your name" required>

    </div>
    <div>
    <label for="email">Email</label><br>
    <input type="email" name="email" placeholder="Enter Email" required>

    </div>
    <div>
    <label for="mobile">Mobile no:</label><br>
    <input type="number" name="mobile" placeholder="Enter Mobile no" required>

    </div>
    <div>
    <label for="query">Query</label><br>
          <textarea name="query" rows="5" cols="30"></textarea>

    </div>

        <input type="submit"  onclick="send_message()" name="submit"  value="submit">
        
    </form>
    
   </div>
            </div>
        </div>
    </div>

          <script>
              function send_message()
              {
                  alert('thankyou your feedback');
              }
          </script>
    <script type="text/javascript" src="./jquery.js"></script>
    <script type="text/javascript" src="./admin.style.js"></script>
    <script type="text/javascript" src="./search.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/app.js"></script>
    <script type="text/javascript" src=".//js/external.js"></script>
       
</body>
</html>