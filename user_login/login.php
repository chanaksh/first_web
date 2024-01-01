<?php
$servername = "localhost";
$username = "root";
$Password = "";
$dbname = "food_delivery";

$connection = new mysqli($servername, $username, $Password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM `user_registration` WHERE email = '$email' AND password ='$password'";
$result = mysqli_query($connection,$sql);
$row= mysqli_num_rows($result);

if($row >= 1){
    session_start();

$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
    header("Location: ../landing/landing.php");
}
else {
 
 $alert = "<script>alert('login not exist create account')</script>";
 echo $alert;
 if($alert == 1){
    header("Location: login.php");
 }

}

$connection->close();
?>
