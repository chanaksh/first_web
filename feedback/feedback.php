<?php include "../user_registration/session.php" ?>
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
$userproduct = $_POST['userproduct'];
$userinfo = $_POST['userinfo'];


$sql = "INSERT INTO feedback (customer_name, purchase_product, information_of_product,email ) VALUES ('$username', '$userproduct', '$userinfo','$email' )";

if ($connection->query($sql) === TRUE) {
    header("Location: feedback_page.php");
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>
