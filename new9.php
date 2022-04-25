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


    <section class="product container my-5"> 
       <div class="row mt-5 flex">
        <div class="col-lg-5 col-md-12 col-12 flex-1">
            <img class="imf-fluid w-60" src="./images/plate-9.jpg">
        </div>
        <div class="col-lg-5 col-md-12 col-12 flex-1">
            <h6>For you</h6>
            <h3 py-4>Nudels</h3>
            <p><s>&#8377; 99</s></p>
            <h5 style="color: red;">&#8377; 49 only</h5>
           <button onclick="window.location.href='checkout9.php';" class="btn btn-secondary">Buy now</button>
           <h4 class="mt-4 mb-5">Food Details</h4>
           <span>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden Sydney College in Virginia, The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
           </span>
        </div>
       </div>
    </section>

    <section class="top-products">
        <div class="container">
            <h2 class="heading">Releted Products</h2>
            <div class="slider">
          
                    <button class="slider-btn prev-btn"><img src="./icons/pre.svg"></button>
                    <button class="slider-btn next-btn"><img src="./icons/next.svg"></button>
                <div class="food-slider">

                    <div onclick="window.location.href='new1.php';" class="food-card">
                        <div class="product-image flex justify-center">
                            <img src="./images/plate-1.png">
                        </div>
                        <hr>
                        <div class="text-center">
                            <h2>Summer Salad</h2>
                            <div class="star flex justify-center">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-2.svg">
                                <img src="./icons/star-2.svg">
                            </div>
                            <div class="price">
                                <p><s>&#8377; 399</s></p>
                                &#8377; 299 only
                            </div>
                            <div class="flex justify-center">
                                    <button>
                                        <img src="./icons/cart-2.svg">
                                        <span>Buy now</span>
                                    </button>
                            </div>
                        </div>
                    </div>

                    <div onclick="window.location.href='new3.php';" class="food-card">
                        <div class="product-image flex justify-center">
                            <img src="./images/plate-3.png">
                        </div>
                        <hr>
                        <div class="text-center">
                            <h2>Cottage pie</h2>
                            <div class="star flex justify-center">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-2.svg">
                                <img src="./icons/star-2.svg">
                            </div>
                            <div class="price">
                                <p><s>&#8377; 249</s></p>
                                &#8377; 199 only
                            </div>
                            <div class="flex justify-center">
                                    <button>
                                        <img src="./icons/cart-2.svg">
                                        <span>Buy now</span>
                                    </button>
                            </div>
                        </div>
                    </div>

                    <div onclick="window.location.href='new4.php';" class="food-card">
                        <div class="product-image flex justify-center">
                            <img src="./images/plate-4.jpg">
                        </div>
                        <hr>
                        <div class="text-center">
                            <h2>Greek Salad</h2>
                            <div class="star flex justify-center">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                            </div>
                            <div class="price">
                                <p><s>&#8377; 199</s></p>
                                &#8377; 149 only
                            </div>
                            <div class="flex justify-center">
                                    <button>
                                        <img src="./icons/cart-2.svg">
                                        <span>Buy now</span>
                                    </button>
                            </div>
                        </div>
                    </div>

                    <div onclick="window.location.href='new5.php';" class="food-card">
                        <div class="product-image flex justify-center">
                            <img src="./images/plate-5.jpg">
                        </div>
                        <hr>
                        <div class="text-center">
                            <h2>Burger</h2>
                            <div class="star flex justify-center">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-2.svg">
                            </div>
                            <div class="price">
                                
                                <p><s>&#8377; 149</s></p>
                                &#8377; 99 only
                            </div>
                            <div class="flex justify-center">
                                    <button>
                                        <img src="./icons/cart-2.svg">
                                        <span>Buy now</span>
                                    </button>
                            </div>
                        </div>
                    </div>
                    <div onclick="window.location.href='new6.php';" class="food-card">
                        <div class="product-image flex justify-center">
                            <img src="./images/plate-6.png">
                        </div>
                        <hr>
                        <div class="text-center">
                            <h2>Meggi</h2>
                            <div class="star flex justify-center">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-2.svg">
                                <img src="./icons/star-2.svg">
                            </div>
                            <div class="price">

                                <p><s>&#8377; 99</s></p>
                                &#8377; 49 only
                            </div>
                            <div class="flex justify-center">
                                    <button>
                                        <img src="./icons/cart-2.svg">
                                        <span>Buy now</span>
                                    </button>
                            </div>
                        </div>
                    </div>
                    <div onclick="window.location.href='new7.php';" class="food-card">
                        <div class="product-image flex justify-center">
                            <img src="./images/plate-7.jpg">
                        </div>
                        <hr>
                        <div class="text-center">
                            <h2>South indian Dish</h2>
                            <div class="star flex justify-center">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-2.svg">
                                <img src="./icons/star-2.svg">
                            </div>
                            <div class="price">

                                <p><s>&#8377; 299</s></p>
                                &#8377; 199 only
                            </div>
                            <div class="flex justify-center">
                                    <button>
                                        <img src="./icons/cart-2.svg">
                                        <span>Buy now</span>
                                    </button>
                            </div>
                        </div>
                    </div>
                    <div onclick="window.location.href='new8.php';" class="food-card">
                        <div class="product-image flex justify-center">
                            <img src="./images/plate-8.png">
                        </div>
                        <hr>
                        <div class="text-center">
                            <h2>Pizza</h2>
                            <div class="star flex justify-center">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-2.svg">
                            </div>
                            <div class="price">

                                <p><s>&#8377; 249</s></p>
                                &#8377; 149 only
                            </div>
                            <div class="flex justify-center">
                                    <button>
                                        <img src="./icons/cart-2.svg">
                                        <span>Buy now</span>
                                    </button>
                            </div>
                        </div>
                    </div>
                    <div onclick="window.location.href='new2.php';" class="food-card">
                        <div class="product-image flex justify-center">
                            <img src="./images/plate-2.png">
                        </div>
                        <hr>
                        <div class="text-center">
                            <h2>Russian Salad</h2>
                            <div class="star flex justify-center">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                            </div>
                            <div class="price">

                                <p><s>&#8377; 349</s></p>
                                &#8377; 299 only
                            </div>
                            <div class="flex justify-center">
                                    <button>
                                        <img src="./icons/cart-2.svg">
                                        <span>Buy now</span>
                                    </button>
                            </div>
                        </div>
                    </div>
                    <div onclick="window.location.href='new10.php';" class="food-card">
                        <div class="product-image flex justify-center">
                            <img src="./images/plate-10.png">
                        </div>
                        <hr>
                        <div class="text-center">
                            <h2>Chilli shake</h2>
                            <div class="star flex justify-center">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-1.svg">
                                <img src="./icons/star-2.svg">
                            </div>
                            <div class="price">

                                <p><s>&#8377; 19</s></p>
                                &#8377; 10 only
                            </div>
                            <div class="flex justify-center">
                                    <button>
                                        <img src="./icons/cart-2.svg">
                                        <span>Buy now</span>
                                    </button>
                            </div>
                        </div>
                    </div>

                    
                </div>

            </div>
            
           <div class="btn-1 text-center">
            <button class="btn btn-secondary" onclick="window.location.href='food-btn.php';" >View more</button>
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
                     <a href="#">About us</a>
                 </li>
                 <li>
                     <a href="#">Blog</a>
                 </li>
                 <li> 
                     <a href="#">Gallery</a>
                 </li>
                 <li>
                     <a href="#">Products</a>
                 </li>
                 <li>
                     <a href="#">Services</a>
                 </li>
                 <li>
                     <a href="#">Contact</a>
                 </li>
             </ul>

            </div>
            <div class="box">
             <h3>Follow Us</h3>
             <div>
             <ul>
                 <li>
                     <a href="#">
                         <img src="./icons/facebook.svg">
                         <span>facebook</span>
                     </a>
                 </li>
                 <li>
                     <a href="#">
                         <img src="./icons/google.svg">
                         <span>google</span>
                     </a>
                 </li>
                 <li>
                     <a href="#">
                         <img src="./icons/twitter.svg">
                         <span>twitter</span>
                     </a>
                 </li>
                 <li>
                     <a href="#">
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
         Copyright © 2022 .All rights reserved by <a href="#">Rahul mishra</a>
     </div>
    </footer>
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