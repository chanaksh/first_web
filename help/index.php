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

$search = $_POST['mysearch'];





$sql = "INSERT INTO question (	questions,	email) VALUES ('$search', '$email')";

if ($connection->query($sql) === TRUE) {
    header("Location: help.php");
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>