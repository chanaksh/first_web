<?php 
error_reporting(0);
include "../user_registration/session.php" ?>

<?php 
if(isset($_SESSION['email'])){ 
error_reporting(0);
$servername = "localhost";
$username = "root";
$Password = "";
$dbname = "food_delivery";

$connection = new mysqli($servername, $username, $Password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

 

$id = $_POST['product_id'];


$sql = "SELECT * FROM `all_product` WHERE id LIKE '$id'";
$result = mysqli_query($connection,$sql);

if($result == true){
$num= mysqli_num_rows($result);
if($num > 0){
    while($row = mysqli_fetch_assoc($result)){
    
    $name = $row['product_name'];
   
    $product_price = $row['product_price'];
    

    session_start();
    $_SESSION['product_name'] = $name;
    $_SESSION['product_price'] = $product_price;
   

     $sql = "INSERT INTO `check_product`(email,product_name ,price,id) VALUES('$email','$name','$product_price','$id')";
     if ($connection->query($sql) === TRUE) {
        header("Location: ../cheking-page/check.php");
    } 
    }
}
}
else{
    
}
}else{
    echo "you have not register your email so we can't accept your order please register or login first";
}




?>








