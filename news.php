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

                <header class="topbar">
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
                <header style="margin-bottom: 0.2rem;" class="top">
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
            
                    <div class="navbar magic-hover">
                        <div class="container flex justify-center">
                        <a href="indexx.php">Home</a>
                        <a href="offer.php">Offer</a>
                        <a href="subscribe.php">Subscribe</a>
                        <a href="products.php">Products</a>
                        <a href="service.php">Services</a>
                        <a href="newses.php">News</a>
                        <a href="conntact.php">Contact</a>
                        </div>
            
                    </div>
                </header>

                <section id="News" class="letest-news">
                    <div class="container">
                        <h2 class="heading">Lastest News Previous Week</h2>
                        <div class="card flex">
                            <article class="artical-card  magic-shadow">
                                <div class="card-image">
                                    <img src="./images/png1.jpg">
                                </div>
                                <div class="card-content">
                                    <div class="post-meta flex item-center justify-between"> 
                                        <span>July 03, 2021</span>
                                        <div>
                                            <span>Posted by <strong>FreshMeal</strong> </span>
                                            <span class="comment">12 Comments</span>
                                        </div>
                                    </div>
                                    <h2>Lorem Ipsum is simply dummy text of the printing</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more letters.</p>
                             
                                </div>
                              
                            </article>
        
                            <article class="artical-card magic-shadow">
                                <div class="card-image">
                                    <img src="./images/png6.webp ">
                                </div>
                                <div class="card-content">
                                    <div class="post-meta flex item-center justify-between"> 
                                        <span>June 04, 2021</span>
                                        <div>
                                            <span>Posted by <strong>FreshMeal</strong> </span>
                                            <span class="comment">12 Comments</span>
                                        </div>
                                    </div>
                                    <h2>Lorem Ipsum is simply dummy text of the printing</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more letters.</p>
                             
                                </div>
                            </article>
                        </div>
        
                    </div>
                </section>

                <section id="News" class="letest-news">
                    <div class="container">
                        <div class="card flex">
                            <article class="artical-card  magic-shadow">
                                <div class="card-image">
                                    <img src="./images/png3.jpg">
                                </div>
                                <div class="card-content">
                                    <div class="post-meta flex item-center justify-between"> 
                                        <span>April 04, 2021</span>
                                        <div>
                                            <span>Posted by <strong>FreshMeal</strong> </span>
                                            <span class="comment">12 Comments</span>
                                        </div>
                                    </div>
                                    <h2>Lorem Ipsum is simply dummy text of the printing</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more letters.</p>
                             
                                </div>
                              
                            </article>
        
                            <article class="artical-card magic-shadow">
                                <div class="card-image">
                                    <img src="./images/png4.jpg">
                                </div>
                                <div class="card-content">
                                    <div class="post-meta flex item-center justify-between"> 
                                        <span>March 03, 2021</span>
                                        <div>
                                            <span>Posted by <strong>FreshMeal</strong> </span>
                                            <span class="comment">12 Comments</span>
                                        </div>
                                    </div>
                                    <h2>Lorem Ipsum is simply dummy text of the printing</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more letters.</p>
                             
                                </div>
                            </article>
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
                <script type="text/javascript" src=".//js/external.js"></script>
    
</body>
</html>