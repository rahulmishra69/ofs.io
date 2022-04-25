<?php 
require('connection.inc.php');
require('functtion.inc.php');
include("fun.php");
$cat_id=mysqli_real_escape_string($con,$_GET['id']);
$get_product= get_product( 'latest',4,$cat_id);
$cat_res =mysqli_query($con, "SELECT * FROM categories where status=1 order by categories asc ");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res))
$cat_arr[]=$row;
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
                                <img src="./icons/user-icon.svg">
                                <a href="user-login.php">Logout</a>
                            </div> 
            
                        </div>
                    </div>
            
                </header>
                <!----header close-1-->
                <header style="position: relative; z-index: 0;" class="top">
                    <div class="container flex justify-between item-center">
                        <div class="phone flex">
                            <img src="./icons/phone.svg">
                            <div>
                                <h5>Call US: (+84) 123 456 789</h5>
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
                            <a href="contact.php">Contact</a>

                            <?php 
                                foreach($cat_arr as $list)
                                {
                                    ?> 
                                    <a href="caategories.php?id=<?php echo $list['id']?>"><?php echo $list['categories'] ?></a>
                                    <?php 
                                }
                            ?>
                        </div>
            
                    </div>
                </header>

                <section id="rahul1" class="top-products">
                    <div class="container">
                        <h2 style="margin-bottom: 4rem;" class="heading">Our Products</h2>
                        <div class="slider">
                      
                            
                            <div class="food-slider">

                            

                                <div class="food-card magic-shadow">
                                    <div class="product-image flex justify-center">
                                        <img src="./images/chicken.png">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2>Chicken Fry</h2>
                                        <div class="star flex justify-center">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-2.svg">
            
                                        </div>
                                        <div class="price">
                                            <p><s>&#8377; 209</s></p>
                                            &#8377; 189 only
                                        </div>
                                        <div class="flex justify-center">
                                                <button>
                                                    <img src="./icons/cart-2.svg">
                                                    <span>Add to cart</span>
                                                </button>
                                        </div>
                                    </div>
            
                                </div>
            
                                <div class="food-card magic-shadow">
                                    <div class="product-image flex justify-center">
                                        <img src="./images/cupcake.png">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2>cupcake</h2>
                                        <div class="star flex justify-center">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-2.svg">
                                            <img src="./icons/star-2.svg">
                                        </div>
                                        <div class="price">
                                            <p><s>&#8377; 89</s></p>
                                            &#8377; 69 only
                                        </div>
                                        <div class="flex justify-center">
                                                <button>
                                                    <img src="./icons/cart-2.svg">
                                                    <span>Add to cart</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="food-card magic-shadow">
                                    <div class="product-image flex justify-center">
                                        <img src="./images/donut.jpg">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2>Donuts</h2>
                                        <div class="star flex justify-center">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-2.svg">
                                        </div>
                                        <div class="price">
                                            <p><s>&#8377; 109</s></p>
                                            &#8377; 99 only
                                        </div>
                                        <div class="flex justify-center">
                                                <button>
                                                    <img src="./icons/cart-2.svg">
                                                    <span>Add to cart</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="food-card magic-shadow">
                                    <div class="product-image flex justify-center">
                                        <img src="./images/mu.png">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <h2>Mutter paneer</h2>
                                        <div class="star flex justify-center">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                            <img src="./icons/star-1.svg">
                                        </div>
                                        <div class="price">
                                            <p><s>&#8377; 149</s></p>
                                            &#8377; 99 only
                                        </div>
                                        <div class="flex justify-center">
                                                <button>
                                                    <img src="./icons/cart-2.svg">
                                                    <span>Add to cart</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
            
                        </div>
            
                    </div>
            
                </section>
                

 </div>
 </div>
 </div>
 <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
 <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="./js/app.js"></script>    
</body>
</html>