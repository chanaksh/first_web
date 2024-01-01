<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="help.css">
    <style><?php include "../search-bar/search-bar.css"?></style>
    <style><?php include "../navbar/navstyle.css"?></style>
</head>
<body>
<?php include "../navbar/navbar.php"?>
<div class="bg-search">


<form action="index.php" method="post">
  <input type="text" id="mera-search" name = "mysearch" placeholder="Write your question"  required = "required">
  <input type="submit" id="form-sub" name= "submit" value="&#128270">
  </form>
  
  </div>
 
  <div class="all-question">
  <?php if(isset($_POST['submit'])){?>   
<div class="replay">Our team contact with you as soon as possible</div>
<?php } ?>

  <?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";


$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

 $sql = "SELECT * FROM  `question` ";
 $result = mysqli_query($connection, $sql);


if($result == True){


 $num = mysqli_num_rows($result);

 if($num > 0){
  
  while($row = mysqli_fetch_assoc($result)){
   

    $name = $row['questions'];
    $email = $row['email']
    
    ?>
     <!-- <p ><?php echo $email ?></p> -->
    <li><?php echo $name;   ?>&nbsp;?  &nbsp;&nbsp; (<?php echo $email;?>)</li>
    
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