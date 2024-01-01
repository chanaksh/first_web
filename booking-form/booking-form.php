<?php 
error_reporting(0);
include "../user_registration/session.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="booking.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                
                    <img src="../web_logo.png" alt="Restaurant Logo" class="img-responsive">
                
            </div>
           
        </div>
    </section>
 
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="../order/index.php" method="POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    
                        <div class="food-menu-desc">
                        <h3><?php echo  $product_name ?></h3>
                        <p class="food-price"><?php echo  $product_price ?></p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive"  required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full_name"  class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact"  class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email"  class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <input type="text" name="address" rows="3"  class="input-responsive" required></input>

                    <div class="order-label">Date Of Delivery</div>
                    <input type ="date"name="date" rows="2" class="input-responsive" required></input>

                    
                    <div class="order-label">Time Of  Delivery</div>
                    <input type="Time" name="time" rows="2"  class="input-responsive" required></input>

                    <input type="submit" name="submit"  class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
   

    
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">O-cap team</a></p>
        </div>
    </section>
    

</body>
</html>