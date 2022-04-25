<?php 
   require('connection.inc.php');
   require('function.inc.php');
     $msg = '';
     $rahul='';
     $categories_id='';
     $name='';
     $mrp='';
     $price='';
     $qty='';
     $image='';
     $meta_title='';
     $description='';
     $image_required='required';
    
     if(isset($_GET['id'])&& $_GET['id']!='')
   {
    $image_required='';
    $id = get_safe_value($con, $_GET['id']);
    $sql = "SELECT * FROM product where id='$id'";
    $res = mysqli_query($con, $sql);
    $check = mysqli_num_rows($res);
   if($check > 0)
   {
    $row = mysqli_fetch_assoc($res);
    $categories_id = $row['categories_id'];
    $name = $row['name'];
    $mrp = $row['mrp'];
    $price = $row['price'];
    $qty = $row['qty'];
    $meta_title = $row['meta_title'];
    $description = $row['description'];
   }
   else 
   {
    header('location:product.php');
    die();
   }
   }
    
   if(isset($_POST['submit']))
   {
    $categories_id = get_safe_value($con, $_POST['categories_id']);
    $name = get_safe_value($con, $_POST['name']);
    $mrp = get_safe_value($con, $_POST['mrp']);
    $price = get_safe_value($con, $_POST['price']);
    $qty = get_safe_value($con, $_POST['qty']);
    $meta_title = get_safe_value($con, $_POST['meta_title']);
    $description = get_safe_value($con, $_POST['description']);

    $sql = "SELECT * FROM product WHERE name='$name'";
    $res = mysqli_query($con, $sql);
    $check = mysqli_num_rows($res);
    if($check > 0)
    {
        if(isset($_GET['id']) && ($_GET['id']!=''))
        {
            $getdata = mysqli_fetch_assoc($res);
            if($id==$getdata['id'])
            {}
            else 
            {
                $msg = "Product Already exist....";
            }
        }else {
            $msg = "Product Already exist....";
        }
    }
   if($msg=='')
   {
    if(isset($_GET['id']) && ($_GET['id']!=''))
    {
        if($_FILES['image']['name']!='')
        {
            $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],'../admin/media/added-product/'.$image);
            $sql = "UPDATE  product SET categories_id='$categories_id', name='$name', mrp='$mrp', price='$price', qty='$qty', image='$image', meta_title='$meta_title', description='$description'  WHERE id='$id'";
        }
        else 
        {
            $sql = "UPDATE  product SET categories_id='$categories_id', name='$name', mrp='$mrp', price='$price', qty='$qty',  meta_title='$meta_title', description='$description'  WHERE id='$id'";
        }
        mysqli_query($con, $sql);
    }
    else {
        $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],'../admin/media/added-product/'.$image);

    $sql = "INSERT INTO product (categories_id, name, mrp, price, qty,meta_title, description, status,image) VALUE ('$categories_id', '$name', '$mrp', '$price', '$qty',  '$meta_title', '$description', 1 ,'$image')";
    mysqli_query($con, $sql);
    }
    header('location:product.php');
    die();
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
           .center form select 
           {
               width: 100%;
           }
          
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./categories.css">
    <link rel="stylesheet" href="./chart.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./admin-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;0,700;1,400&family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;0,700;1,400&family=Roboto:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
</head>
<body style="overflow-y:scroll;">  
    <section id="sidebar">
           
            <div style="position:relative; top:-2.5rem;"  class="slidebar-brand">
                <img src="./icons/logo.svg">
            </div>
            <div  style="position:relative; top:-10.5rem;" class="slidebar-menu">
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

    
    

       <div class="center">
    <div style="width: 108%;" class="header"><span>Add Product</span></div>
    <form action="" method="post" class="rahul" enctype="multipart/form-data">
      <select style="margin-bottom: 1rem;" name="categories_id">
   <option>Select Categories</option>
   <?php 
    $sql = "SELECT id,categories FROM categories order by categories asc";
    $res =mysqli_query($con,$sql);

    while($row = mysqli_fetch_assoc($res))
    {
        if($row['id']==$categories_id)
        {
            echo "<option selected value=".$row['id'].">".$row['categories']."</option>";
        }
        else
        {
            echo "<option value=".$row['id'].">".$row['categories']."</option>";
        }
      
    }
   ?>
    </select>
    <div>
    <label for="categories">Product Name</label>
    <input type="text" name="name" placeholder="Enter Product name" value="<?php echo $name ?>" required>

    </div>
    <div>
    <label for="categories">Mrp</label><br>
    <input type="text" name="mrp" placeholder="Enter Product mrp" value="<?php echo $mrp ?>" required>

    </div>
    <div>
    <label for="categories">Price</label><br>
    <input type="text" name="price" placeholder="Enter Product price" value="<?php echo $price ?>" required>

    </div>
    <div>
    <label for="categories">Qty</label><br>
    <input type="number" name="qty" placeholder="Enter Product Qty" value="<?php echo $qty ?>" required>

    </div>
    <div>
    <label for="categories">Image</label><br>
    <input type="file" name="image"  <?php echo $image_required ?>>

    </div>
    <div>
    <label for="categories">Meta title</label><br>
    <textarea name="meta_title" placeholder="Enter product meta title" value="<?php echo $meta_title ?>" ></textarea>

    </div>
    <div>
    <label for="categories">Description</label><br>
    <textarea name="description" placeholder="Enter product description" value="<?php echo $description ?>" ></textarea>

    </div>

        <input type="submit" class="rahul1" name="submit"  value="submit">
        <div style="color: red;"><?php echo $msg ?></div>
        
    </form>
    
   </div>


       <script type="text/javascript" src="./jquery.js"></script>
       <script type="text/javascript" src="./admin.style.js"></script>
       
</body>
</html>