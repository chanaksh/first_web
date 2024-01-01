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
    <title>Document</title>
    <link rel="stylesheet" href="check.css">
    
</head>
<body>

    <h1>Check list of product</h1>
    <a href="../landing/landing.php"><img src="download.png" alt=""></a>
    <table>
        <thead>
           <tr>
            <th>Product name</th>
            <th>Price</th>
           </tr>
        </thead>
       
        <tbody >

            <tr>
                <td><?php echo $product_name?></td>
                <td><?php echo $product_price ?></td>
            </tr>
  


        </tbody>

    </table>
    <div><a href="../booking-form/booking-form.php">proceed</a></div>
</body>
</html>


