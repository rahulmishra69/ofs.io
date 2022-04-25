<?php 
   require('connection.inc.php');
   require('function.inc.php');
    if(isset($_GET['type']) && ($_GET['type']!=''))
    {
     $type = get_safe_value($con, $_GET['type']);
     if($type=='status')
     {
        $operation = get_safe_value($con, $_GET['operation']);
        $id = get_safe_value($con, $_GET['id']);
        if($operation== 'active')
        {
            $status = '1';
        }
        else
        {
            $status = '0';
        }
        $update_status = "UPDATE product SET status='$status' WHERE id='$id'";
        mysqli_query($con, $update_status);
     }

     if($type=='delete')
     {
       
        $id= get_safe_value($con,$_GET['id']);
       
        $delete_sql = "DELETE FROM product where id='$id' ";
        mysqli_query($con, $delete_sql);
     }


    }


    $sql=" SELECT product.*,categories.categories FROM product,categories WHERE product.categories_id=categories.id order by product.id desc";
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
                left: 1.4rem;
            }
            .categories-form .container .table thead tr th 
            {
               position: relative;
               font-size: 4px;
               left: 1.5rem;
               width: 10%;
            }
            .categories-form .container .table tbody tr td  
            {
                position: relative;
               font-size: 4px;
               left: -5.3rem;
               width: 10%;
            }
            .categories-form .container .table tbody tr td a
            {
                width: 10px;
            }
        }
    </style>
   
</head>
<body style="overflow-y:scroll; ">  
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
                        <a  href="categories.php"><i class="fas fa-users"></i><span>Categories</span></a>
                    </li>
                    <li>
                        <a href="product.php"><i class="fas fa-file-pdf"></i><span>Products</span></a>
                    </li>
                    <li>
                        <a href="user.php"><i class="fas fa-clock"></i><span>User</span></a>
                    </li>
                    <li>
                        <a href="order.php"><i class="fas fa-user"></i><span>Order</span></a>
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
                <p><?php echo  $_SESSION['name']; ?></p>
            </div>
            <div class="clear"></div>
       </header>
            <div class="clear"></div>
       </section>

      <div class="categories-form">
      <div class="container">
      <h2>Product<br>
        <a style="margin-top: 1rem; color:blue;" href="add-product.php">Add Product</a></h2>     
     
      <table style="position: relative; width:80%;" class="table">
               
            <thead>
            <tr>
            <th style="position: relative; width:10%; ">Category</th>   
            <th style="position: relative; width:10%; ">Name</th> 
            <th style="position: relative; width:10%; ">Image</th> 
            <th style="position: relative; width:10%; ">Mrp</th> 
            <th style="position: relative; width:5%; ">Price</th> 
            <th style="position: relative; width:5%; ">Qty</th> 
            <th style="background: #fff;">Button</th> 
            </tr>
            </thead>

            <tbody>

            <?php
            while($row = mysqli_fetch_assoc($res)) {?>
                <tr>
                <td> <?php echo $row['categories'] ?></td>
                <td> <?php echo $row['name'] ?></td>
               <td><img src="<?php echo"../admin/media/added-product/".$row['image']?>" alt="image"/></td>
                <td> <?php echo $row['mrp'] ?></td>
                <td> <?php echo $row['price'] ?></td>
                <td> <?php echo $row['qty'] ?></td>

                <td>
                    <?php 
                    
                    if($row['status']==1) 
                        {
                             echo "<a style='background-color: #232b38; padding-left:0.75rem; padding-right:0.75rem; padding-top:0.5rem;left:0.75rem; color:white;border-radius: 6px; margin-left: 0.75rem; padding-top:0.5rem;' href='?type=status&operation=deactive&id=".$row['id']."'>Active</a>";
                        } 
                        else 
                        {
                            echo "<a style='background-color:green; padding-left:0.75rem; padding-right:0.75rem; padding-top:0.5rem;left:0.75rem; color:white;border-radius: 6px; margin-left: 0.75rem; padding-top:0.5rem;' href='?type=status&operation=active&id=".$row['id']."'>Dective</a>";
                        }

                        echo "<a style='background-color:blue; padding-left:0.75rem; padding-right:0.75rem; padding-top:0.5rem;left:0.75rem; color:white;border-radius: 6px; margin-left: 0.75rem; padding-top:0.5rem;' href=' add-product.php ?id=".$row['id']."'>Edit</a>";
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
