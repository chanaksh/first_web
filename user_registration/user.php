<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'] ;
$terms_condition = isset($_POST['terms_condition']) ? 1 : 0;

$email_verify = "SELECT * FROM `user_registration` WHERE email = '$email' ";
$run = mysqli_query($connection,$email_verify);

$data = mysqli_num_rows($run);
if($data > 0){
    
    $alert = "<script>alert('email already exist')</script>";
    echo $alert; 
  
}
else{
$sql = "INSERT INTO user_registration (username, email, password, terms_condition) VALUES ('$username', '$email', '$password' ,'$terms_condition')";

session_start();
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;


if ($connection->query($sql) === TRUE) {
    header("Location: success_registration.html");
} 
else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
}




$connection->close();
?>
