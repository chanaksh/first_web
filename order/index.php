<?php 
error_reporting(0);
include "../user_registration/session.php" ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$qty = $_POST['qty'];
$full_name = $_POST['full_name'];
$phone = $_POST['contact'] ;
$email = $_POST['email'];
$add =$_POST['address'];
$dat = $_POST['date'];
$time = $_POST['time'];
 


$sql = "INSERT INTO `orders` (qty, name_ ,phone, email,address_,date_,time_,pro_name,pro_price) VALUES ('$qty','$full_name','$phone','$email','$add','$dat','$time','$product_name','$product_price')";




if ($connection->query($sql) === TRUE) {
    header("Location: ../order/order.php");
} 
else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}





$connection->close();
?>
