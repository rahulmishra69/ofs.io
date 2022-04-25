<?php 
   require('connection.inc.php');
   require('function.inc.php');
     $categories = '';
     $msg = '';

     if(isset($_GET['id'])&& $_GET['id']!='')
   {
    $id = get_safe_value($con, $_GET['id']);
    $sql = "SELECT * FROM categories where id='$id'";
    $res = mysqli_query($con, $sql);
    $check = mysqli_num_rows($res);
   if($check > 0)
   {
    $row = mysqli_fetch_assoc($res);
    $categories = $row['categories'];
   }
   else 
   {
    header('location:categories.php');
    die();
   }
   }
    
   if(isset($_POST['submit']))
   {
    $categories = get_safe_value($con, $_POST['categories']);

    $sql = "SELECT * FROM categories where categories='$categories'";
    $res = mysqli_query($con, $sql);
    $check = mysqli_num_rows($res);
    if($check > 0)
    {
        if(isset($_GET['id']) && ($_GET['id']!=''))
        {
            $getdata = mysqli_fetch_assoc($res);
            if($id==$getdata['id'])
            {

            }
            else 
            {
                $msg = "Categories Already extst....";
            }
        }else {
            $msg = "Categories Already extst....";
        }
    }
   if($msg=='')
   {
    if(isset($_GET['id']) && ($_GET['id']!=''))
    {
        $sql = "UPDATE  categories SET categories='$categories' WHERE id='$id'";
    mysqli_query($con, $sql);
    }
    else {
    $sql = "INSERT INTO categories (categories,status) VALUE ('$categories','1')";
    mysqli_query($con, $sql);
    }
    header('location:categories.php');
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
<body>  
    <section id="sidebar">
           
            <div style="position:relative; top:-2.5rem;"  class="slidebar-brand">
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

    
    

       <div class="center">
    <div style="width: 108%;" class="header"><span>Add categories</span></div>
    <form action="" method="post" class="rahul">
        <input type="text" name="categories"  placeholder="Enter category name"   value="<?php echo $categories ?>" required>
        <input type="submit" name="submit"  value="submit">
        <div style="color: red;"><?php echo $msg ?></div>
       
        
    </form>
    
   </div>


       <script type="text/javascript" src="./jquery.js"></script>
       <script type="text/javascript" src="./admin.style.js"></script>
       
</body>
</html>