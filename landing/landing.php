 <?php
error_reporting(0);
include "../user_registration/session.php" 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing page</title>
    <link rel="stylesheet" href="landing.css">
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous" ></script>
    <style><?php include "../navbar/navstyle.css"?></style>
</head>
<body>
     

     <?php include "../navbar/navbar.php"?>
      <div class="trending">
          <p>TRENDING FOOD</p>
      </div>
     <div class="slide-container">
      <div class="slides">
         <img src="slide-img/photo1.png" class="active" alt="">
         <img src="slide-img/photo2.png" alt="">
         <img src="slide-img/photo4.png" alt="">
         <img src="slide-img/photo5.webp" alt="">
         <img src="slide-img/photo6.jpeg" alt="">
         <img src="slide-img/photo8.png" alt="">
         <img src="slide-img/photo9.png" alt="">
         <img src="slide-img/photo10.jpeg" alt="">
         <img src="slide-img/photo11.jpeg" alt="">
         <img src="slide-img/photo12.png" alt="">
         <img src="slide-img/photo17.png" alt="">
         <img src="slide-img/photo18.png" alt="">
         <img src="slide-img/photo19.png" alt="">
         <img src="slide-img/photo20.png" alt="">
         <img src="slide-img/photo21.png" alt="">
         <img src="slide-img/photo22.png" alt="">
         <img src="slide-img/photo24.png" alt="">
         <img src="slide-img/photo25.png" alt="">
         <img src="slide-img/photo26.png" alt="">
            
      </div>
<div class="button">
   <span class="next">&#10094</span>
   <span class="pre">&#10095</span>
</div>
 </div>


 <form action="index.php" method="POST">
 <script type="text/javascript">
   //access the image
   let slideImage = document.querySelectorAll('img');
   
   //access the button
   let next = document.querySelector('.next ');
   let pre = document.querySelector('.pre ');

   var counter = 0;
   
   //code for next button

   next.addEventListener('click',slideNext);
   function slideNext(){
      slideImage[counter].style.animation = 'next1 1s ease-in forwards';
      if(counter >= slideImage.length - 1){
         counter = 0;
      }
      else{
         counter++;
      }
      slideImage[counter].style.animation = 'next2 1s ease-in forwards';
   }

   //code for pre button
   pre.addEventListener('click',slidePre);
   function slidePre(){
      slideImage[counter].style.animation = 'pre1 1s ease-in forwards';
      if(counter == 0){
         counter = slideImage.length - 1;
      }
      else{
         counter--;
      }
      slideImage[counter].style.animation = 'pre2 1s ease-in forwards';
   }

   function autoSliding(){
      deletInterval =setInterval(timer,3000);
      function timer(){
         slideNext();
      }
   }

   autoSliding();
   //stop auto sliding when mouse is over
   const container = document.querySelector('.slide-container');
   container.addEventListener('mouseover',function(){
      clearInterval(deletInterval);
   });
 //resume when mouse is out
   container.addEventListener('mouseout',autoSliding);
 </script>



<h1 class="title">Recommended for you</h1>

<div class="movie-list">
    <button class="pre-btn" title="btn"><img src="images_bottom/left.png" alt=""></button>
    <button class="nxt-btn" title="btn"><img src="images_bottom/right.png" alt=""></button>
    <div class="card-container">


    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

 $sql = "SELECT * FROM  `all_product` ";
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
    

  if($id % 2 == 0){
      
    ?> 
        <div class="card">
            
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product_image)?>" class="card-img" alt="">

            <div class="card-body">
                <h2 class="name"><?php echo $name ?></h2>
                <h6 class="des"><?php echo $product_disc ?></h6>
                <h2 class="price"><?php echo $product_price ?></h2>
                
                <input type= "checkbox" name= "product_id" value= "<?php echo $id ?>" class="cart">
            </div>
           
        </div>

        <?php
  }else{

  }
  }
 }
 else{
  //we do not have data
 }
}

?>  
       </div>
    </div>
   


    <div class="movie-list">
    <button class="pre-btn" title="btn"><img src="images_bottom/left.png" alt=""></button>
    <button class="nxt-btn" title="btn"><img src="images_bottom/right.png" alt=""></button>
    <div class="card-container">


    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

 $sql = "SELECT * FROM  `all_product` ";
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
    
   if($id % 2 == 1){

    ?> 
        <div class="card">
            
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product_image)?>" class="card-img" alt="">

            <div class="card-body">
                <h2 class="name"><?php echo $name ?></h2>
                <h6 class="des"><?php echo $product_disc ?></h6>
                <h2 class="price"><?php echo $product_price ?></h2>
                
                <input type="checkbox" name="product_id" class="cart" value="<?php echo $id ?>">
            </div>
           

        </div>

        <?php
   }else{

   }
  }
 }
 else{
  //we do not have data
 }
}

?>  
       </div>
    </div>
   
    <input type="submit" class="submit-btn" value="submit">
         
    </form>

   <header id="header" >
      <div class="us"> <h1>About us</h1></div>
       <div class="cap-container">
      <div class="caption">
         <div>BE THE FASTEST IN DELIVERING YOUR FOOD</div>
         <div>LOVE EVERY BITE</div>
         <div>FRESH FOOD AND WITH GREAT TEST</div>
         <div>ORDER YOUR FAVORITE FOOD</div>
      </div>
      <div class="caption">
        <div>LOVE YOUR HUNGER WEBSITE</div>
        <div>YOUR HUNGER PARTNER</div>
        <div>DILEVERY FASTER THAN BAIL</div>
        <div>HEALTHY FOOD</div>
      </div>
   </div>


   <div class="account">
   <h3>Account</h3>
   </div>
   <div class="icons">
        
       <img id="odd-icon" src="./slide-img/facebook.png" alt="">
       <img src="./slide-img/google.png" alt="">
       <img src="./slide-img/insta.png" alt="">
       <img src="./slide-img/what.png" alt="">
       
   </div>
   </header>
    
</body>
</html>



