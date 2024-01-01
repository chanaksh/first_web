<?php 
error_reporting(0);
include "../user_registration/session.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="order.css">
    <style><?php include "../navbar/navstyle.css"?></style>
</head>
<body>
<?php include "../navbar/navbar.php"?>
<h1 id="big-head">Your order</h1>


<div class="all_dat">
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Address</th>
                <th>Customer Name</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Date Of Delivery</th>
                <th>Time of Delivary</th>


            </tr>

        </thead>
        <tbody>
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

  
    
    $sql = "SELECT * FROM  `orders` WHERE email LIKE '$email' ";
    
 
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

    $qty = $row['qty'];
    $name_ = $row['name_'];
    $phone= $row['phone'];
    $email = $row['email'];
    $address = $row['address_'];
    $date_= $row['date_'];
    $time_= $row['time_'];
    $pro_name= $row['pro_name'];
    $pro_price= $row['pro_price'];

    


    ?> 
            <tr>
                <th><?php echo $pro_name ?></th>
                <th><?php echo $qty?></th>
                <th><?php echo $pro_price?></th>
                <th><?php echo $address?></th>
                <th><?php echo $name_?></th>
                <th><?php echo $phone?></th>
                <th><?php echo $email?></th>
                <th><?php echo $date_?></th>
                <th><?php echo $time_?></th>
                </tr>
                <?php
  }
 }
 else{
  //we do not have data
 }
}

?>  
        </tbody>
    </table>
</div>
</body>
</html>