<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osm Food store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./chart.css">
    <link rel="stylesheet" href="./admin-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;0,700;1,400&family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;0,700;1,400&family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
</head>
<body>  
<section id="sidebar">
           
           <div style="position:relative; top:-2.5rem;"  class="slidebar-brand">
               <img src="./icons/logo.svg">
           </div>
           <div style="position:relative; top:-10.5rem;" class="slidebar-menu">
               <ul>
                   <li>
                       <a  href=""><i class="fas fa-desktop"></i><span>Dashboard</span></a>
                   </li>
                   <li>
                       <a  href=""><i class="fas fa-users"></i><span>Categories</span></a>
                   </li>
                  
                   <li>
                       <a  href=""><i class="fas fa-file-pdf"></i><span>Products</span></a>
                   </li>
                   <li>
                       <a  href=""><i class="fas fa-user"></i><span>Order</span></a>
                   </li>
                   <li>
                       <a  href=""><i class="fas fa-clock"></i><span>User</span></a>
                   </li>
                   <li>
                       <a  href=""><i class="fas fa-phone"></i><span>Contact us</span></a>
                   </li>
                   <li>
                       <a href="#"><i class="fas fa-sign-out"></i><span>Logout</span></a>
                   </li>
               </ul>
           </div>
          
   </section>
    </section>
    <section id="main-content">
       <header class="main-header">
            <div  class="header-left">
                <h2 class="toogle-btn"><i class="fas fa-bars"></i>Dashboard</h2>
            </div>
            <div class="header-left">
                <img style="height: 100%;" src="./icons/logo-2.svg">
              </div>
            <div class="header-left">
                <img style="height: 100px" src="./images/profile.png" class="img">
                <h3>Freshmeal</h3>
                <p>Admin</p>
            </div>
            <div class="clear"></div>
       </header>
       <div class="clear"></div>
       </section>

        <section style="position:absolute; background-color: aliceblue;   top: 40%; left: 40%;" class="store">
            <div class="rahul">
                <h1 style="font-family: Raleway-extrabold; color: #eebf00; margin-bottom: 2rem; font-size: 2.5rem;">Groww Your Business Globally</h1>
                <h3 style="font-family: Raleway-extrabold; color: #232b38; margin-bottom: 2rem; font-size: 2.5rem; position: relative; left: 15%;">with Easy Food-Store</h3>
                <button onclick="window.location.href='admin-login.php'" style="color: aliceblue; border-radius: 8px; padding: 1.2rem; border: none; cursor: pointer; position: absolute; right: 40%; font-size: 1.2rem; background-color: #eebf00;">Register</button>


            </div>


        </section>
       <script type="text/javascript" src="./jquery.js"></script>
       <script type="text/javascript" src="./admin.style.js"></script>
       
</body>
</html>