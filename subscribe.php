<?php
  require('connection.inc.php');
    require('functtion.inc.php');

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
    <link rel="stylesheet" href="./css/slick.css">
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
                            <input name="search" style="outline: none; border: none; width: 80%; font-size: 1.1rem; position: relative; top: -1rem; left: 6rem; font-size: 12px; border-radius: 8px; padding: 0.28rem; padding-left: 1rem;" type="text" placeholder="type here......" class="search" id="search-item" onkeyup="search()"><img style="background-color: black;  position: relative; top: -0.50rem; border-top-right-radius: 10px;  border-bottom-right-radius: 10px; padding: 0.28rem; left: 5rem;" src="./icons/search.svg">                          
                            
                        </div>
                        <div class="auth flex justify-between item-center">
                            <div>
                            <?php echo  $_SESSION['name']; ?>
                                <img src="./icons/user-icon.svg">
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
            
                <
            
                    <section id="subscribe" class="price-table">
                        <div class="container">
                            <h2 class="heading">Subscribe plan</h2>
                            
                            <div class="plan flex">
                                <div class="plan-detail flex-1 magic-shadow">
                                    <h2>Basic Plan</h2>
                                    <div class="price">
                                        <h3>2500 Per Month./</h3>
            
                                        <div class="basic-plan-detail">
                                            <p>Dall</p>
                                            <p>Rice</p>
                                            <p>Chapati</p>
                                            <p>Vegitables</p>
                                            <p>Salad</p>
            
                                            <button onclick="window.location.href='subscribe-plan.php';" class="btn btn-primary">Get Started</button>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="plan-detail-rahul flex-1 magic-shadow">
                                    <h2>Premium Plan</h2>
                                    <div class="price">
                                        <h3>3000 Per Month./</h3>
                                        <div class="basic-plan-detail">
                                            <p>Dall</p>
                                            <p>Basmati Rice</p>
                                            <p>Puri</p>
                                            <p>Vegitables</p>
                                            <p>Salad</p>
                                            <button onclick="window.location.href='subscribe-plan-2.php';" class="btn btn-secondary">Get Started</button>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="plan-detail flex-1 magic-shadow">
                                    <h2>Standred Plan</h2>
                                    <div class="price">
                                        <h3>3500 Per Month./</h3>
                                        <div class="basic-plan-detail">
                                            <p>Dall</p>
                                            <p>Basmati-Rice</p>
                                            <p>Aalu ka Paratha</p>
                                            <p>Two Vegitables</p>
                                            <p>Ice-creame</p>
                                            <button  onclick="window.location.href='subscribe-plan-.php';" class="btn btn-primary">Get Started</button>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                    </section>
            
                    <section id="contact" class="contact">
                        <div class="flex">
                            <div class="now flex-1">
                                <h2 class="heading">Contact us</h2>
                               <div class="mongo flex">
                                <img src="./icons/phone-2.svg">
                                <div>
                                    <h5>Call us:</h5>
                                    <h6>(+91) 9913 351 566</h6>
                                </div>
                               </div>
            
                               <div class="mongo flex">
                                <img src="./icons/email.svg">
                                <div>
                                    <h5>Email:</h5>
                                    <h6>rahulmishra3865@gmail.com</h6>
                                </div>
                               </div>
                                <div class="mongo flex">
                                    <img src="./icons/clock-2.svg">
                                    <div>
                                        <h5>Working Hours:</h5>
                                        <h6>Mon - Sat (8.00am - 12.00am)</h6>
                                    </div>
                                </div>
                                <div class="container"><button onclick="window.location.href='query.php';" class="btn btn-primary">Send Msg</button></div>
                            </div>
                            <div class="map flex-1">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7556514.471994408!2d66.82168757197914!3d22.36479027631049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959051f5f0ef795%3A0x861bd887ed54522e!2sGujarat!5e0!3m2!1sen!2sin!4v1643277595464!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </section>
            
                   <section class="footer">
                       <div class="container">
                           <div class="box">
                            <h3>About us</h3>
                            <p>It was popularised in the 1960 with the release of Latest sheets containing Lorem Ipsum passage.</p>
                            <button class="btn btn-secondary">Read more</button>
                        </div>
                           <div class="box">
                            <h3>Quik Links</h3>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#sail">Offer</a>
                                </li>
                                <li>
                                    <a href="#subscribe">Subscribe</a>
                                </li>
                                <li> 
                                    <a href="#rahul1">Products</a>
                                </li>
                                <li>
                                    <a href="#rahul4">Services</a>
                                </li>
                                <li>
                                    <a href="#News">News</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
            
                           </div>
                           <div class="box">
                            <h3>Follow Us</h3>
                            <div>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/kishan.shukla.754570">
                                        <img src="./icons/facebook.svg">
                                        <span>facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/">
                                        <img src="./icons/google.svg">
                                        <span>google</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/Kishan_shukla_?t=rhBMqy_DKNmX9T3biUNoPw&s=08">
                                        <img src="./icons/twitter.svg">
                                        <span>twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/__rahul__mishra_01/">
                                        <img src="./icons/instagram.svg">
                                        <span>instagram</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                           </div>
                             <div class="box instagram-api">
                                <h3>Instagram</h3>
                                <div class="post-wrap">
                                    <div>
                                        <img src="./images/food-table.jpg">
                                    </div>
                                    <div>
                                        <img src="./images/coffee.jpg">
                                    </div>
                                    <div>
                                        <img src="./images/donut.jpg">
                                    </div>
                                    <div>
                                        <img src="./images/plate-5.jpg">
                                    </div>
                                    <div>
                                        <img src="./images/donut.jpg">
                                    </div>
                                    <div>
                                        <img src="./images/food-table.jpg">
                                    </div>
            
                                </div>
            
                           </div>
            
                       </div> 
            
                   </section>
                   <footer class="copyright">
                    <div>
                        Created by <a href="#">Rahul mishra</a>
                    </div>
                   </footer>

            </div>

        </div>
    </div>
    <script type="text/javascript" src="./search.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/app.js"></script>
    <script type="text/javascript" src=".//js/external.js"></script>
</body>
</html>