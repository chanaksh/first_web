

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="feedback.css">
    <style><?php include "../navbar/navstyle.css"?></style>
</head>
<body>
<?php include "../navbar/navbar.php"?>
<div class="feedback-container">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

 $sql = "SELECT * FROM  `feedback` ";
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

    $name = $row['customer_name'];
    $proname = $row['purchase_product'];
    $proinfo = $row['information_of_product'];
    $email = $row['email'];

    ?>
<div class="all-info">
       <div class="feedback-person-email feedback"><?php echo $email?></div>
      <div class="feedback-person-name feedback"><?php echo $name; ?></div>
      <DIV class="feedback-product-name feedback"><?php echo $proname; ?></DIV>
      <div class="feedback-information feedback"><?php echo $proinfo; ?></div>
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

    <div class="container-input">
      <h2 id="heading">Write your feedback</h2>
      <form action="feedback.php" method="POST">
        <input type="text" class="product-name mera-input" name="userproduct" required="required" placeholder="Enter product name">
        <input type="text"  class="product-info mera-input" name="userinfo" required="required" placeholder="Write about product">
        <input type="text" class="our-name mera-input " name="username" required="required" placeholder="Enter your name ">
        <input type="submit"  id="sub-button" value="submit now">
      </form>
    </div>
</body>
</html>

