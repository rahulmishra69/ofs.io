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
        tr td 
        {
            padding: 1rem;
        }

    </style>
</head>
<body> 
  
      <div class="categories-form">
      <div class="container">
      
     
      <table style="position: fixed; left:-25%; width:100%; margin-top:-8rem; " class="table">
     
      <thead>
            <tr>
            <th style="position:relative; width:40px;">ID</th>    
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
                <td> <?php echo $row['id'] ?></td>
                <td> <?php echo $row['name'] ?></td>
                <td> <?php echo $row['email'] ?></td>
                <td> <?php echo $row['plan'] ?></td>
                <td> <?php echo $row['state'] ?></td>
                <td> <?php echo $row['city'] ?></td>
                <td> <?php echo $row['address'] ?></td>
                <td> <?php echo $row['mode'] ?></td>
                <td>
                    <?php                       
                        echo "<a style='background-color:red; padding-top:0.5rem;left:0.75rem; padding-left:0.75rem; padding-right:0.75rem; color:white;border-radius: 6px; margin-left: 0.75rem; padding-top:0.5rem;' href='?type=delete&id=".$row['id']."'>cancel</a>";
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
