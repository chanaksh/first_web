<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="search.css">
    
</head>
<body>
<div class="bg-search">

<form action="" method="post">
  <input type="text" id="mera-search" name = "mysearch" placeholder="search your favorite food"  required = "required">
  <input type="submit" id="form-sub" name= "submit" value="&#128270">
  </form>

  </div>

    <div class="all-search">

    <?php
 error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

 $search = $_POST["mysearch"];

  if (isset($_POST['submit'])) {
    
    $sql = "SELECT * FROM  `all_product` WHERE product_name LIKE '$search' ";
    
 }

else{
    $sql = "SELECT * FROM  `all_product` ";
}

 
 $result = mysqli_query($connection, $sql);

//check whether the query is executed
if($result == True){

// //find number of record
 $num = mysqli_num_rows($result);

 if($num > 0){
  //we have data in database
  while($row = mysqli_fetch_assoc($result)){
    //using while loop to get all the data and  while loop will executed as long as database
    //get individial data

    $name = $row['product_name'];
    $product_disc = $row['product_disc'];
    $product_price = $row['product_price'];
    $product_image = $row['product_image'];
    $product_discount = $row['product_discount'];
    $id = $row['id'];
    


    ?> 
        <div class="card">
            
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product_image)?>" class="card-img" alt="">

            <div class="card-body">
                <h2 class="name"><?php echo $name ?></h2>
                <h6 class="des"><?php echo $product_disc ?></h6>
                <h2 class="price"><?php echo $product_price ?></h2>
                
                <input type="checkbox" name="checksession" class="cart" value="<?php echo $id ?>">
            </div>
           

        </div>
    
        <?php
  }
 }
 else{
  //we do not have data
 }
}

?>  
    </div>
   
</body>
</html>