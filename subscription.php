<?php 
   require('connection.inc.php');
   require('function.inc.php');
    if(isset($_GET['type']) && ($_GET['type']!=''))
    {
     $type = get_safe_value($con, $_GET['type']);
     if($type=='delete')
     {       
        $id= get_safe_value($con,$_GET['id']);
       
        $delete_sql = "DELETE FROM subscribe where id='$id' ";
        mysqli_query($con, $delete_sql);
     }
    }
    $sql = "SELECT * from subscribe order by id desc";
    $res = mysqli_query($con, $sql);
?>

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
    <link rel="stylesheet" href="./caategories.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;0,700;1,400&family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;0,700;1,400&family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">

    <style>
           @media(max-width:450px)
           {
            .categories-form .container h2 
            {
                position: relative;
                left: 1.1rem;
            }
            .categories-form .container .table thead tr th 
            {
                position: relative;
                left: 1.5rem;
                font-size: 4px;
            }
            .categories-form .container .table tbody tr td 
            {
                position: relative;
               font-size: 4px;
               left: -7.3rem;
               width: 10%;
            }
           }

    </style>


</head>
<body>  
    <section id="sidebar">
           
            <div style="position:relative; top:-2.5rem;" class="slidebar-brand">
                <img src="./icons/logo.svg">
            </div>
            <div style="position:relative; top:-10.5rem;" class="slidebar-menu">
            <ul>
                    <li>
                        <a href="admin.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="contact.php"><i class="fas fa-users"></i><span>categories</span></a>
                    </li>
                  
                    <li>
                        <a href="product.php"><i class="fas fa-file-pdf"></i><span>Products</span></a>
                    </li>
                    <li>
                        <a href="order.php"><i class="fas fa-user"></i><span>Order</span></a>
                    </li>
                    <li>
                        <a href="user.php"><i class="fas fa-clock"></i><span>User</span></a>
                    </li>
                    <li>
                        <a href="contact.php"><i class="fas fa-phone"></i><span>Contact us</span></a>
                    </li>
                    <li>
                        <a onclick="window.location.href='login.php';" href="#"><i class="fas fa-sign-out"></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
           
    </section>
    <section id="main-content">
    <header class="main-header">
            <div  class="header-left">
                <h2 class="toogle-btn"><i class="fas fa-bars"></i><span>Dashboard</span></h2>
            </div>
            <div class="header-left">
              <img style="height: 100%;" src="./icons/logo-2.svg">
            </div>
            <div class="header-left">
              <div class="rahul"><img style="height: 100px" src="./images/profile.png" class="img"></div>
                <h3>Freshmeal</h3>
                <p> <?php echo  $_SESSION['name']; ?></p>
            </div>
            <div class="clear"></div>
       </header>
            <div class="clear"></div>
       </section>

      <div class="categories-form">
      <div class="container">
    <h2>subscription</h2>
       
     
      <table style="position: relative; left:0%; width:80%;" class="table">
               
            <thead>
            <tr>
            
            <th>Name</th>
            <th>Email</th>
            <th>Plan</th>
            <th>State</th>
            <th>city</th>
            <th>Address</th>
            <th>Mode</th>
            <th>Button</th>
            </tr>
            </thead>

            <tbody>

            <?php
            
                $i = 1;
            while($row = mysqli_fetch_assoc($res)) {?>
                <tr>
              
                <td> <?php echo $row['name'] ?></td>
                <td> <?php echo $row['email'] ?></td>
                <td> <?php echo $row['plan'] ?></td>
                <td> <?php echo $row['state'] ?></td>
                <td> <?php echo $row['city'] ?></td>
                <td> <?php echo $row['address'] ?></td>
                <td> <?php echo $row['mode'] ?></td>
                <td>
                    <?php                       
                        echo "<a style='background-color:red; padding-top:0.5rem;left:0.75rem; padding-left:0.75rem; padding-right:0.75rem; color:white;border-radius: 6px; margin-left: 0.75rem; padding-top:0.5rem;' href='?type=delete&id=".$row['id']."'>Delete</a>";
                    ?></td>
                </tr>
            
           <?php }  ?>

            </tbody>

            </table>
        </form>
      </div>
      </div>


       <script type="text/javascript" src="./jquery.js"></script>
       <script type="text/javascript" src="./admin.style.js"></script>
       
</body>
</html>
