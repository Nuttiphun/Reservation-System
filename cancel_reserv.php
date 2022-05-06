<?php
    require_once './server/db.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edit Reservation Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>

        <ul>
            <p><img src="img/logo.png" alt="LOGO" width="45" height="45"></p>
            <li><a href="contact.html">CONTACT US</a></li>
            <li><a href="showdata.php">TABLE LIST</a></li>
            <li><a href="verify_identity.html">LOGIN</a></li>
            <li><a href="reservform.php">BOOKING</a></li>
            <li><a class="active" href="home.html">HOME</a></li>
          </ul>
    
        
        <section class = "banner">
            <h2>Oregano's</h2>
            <div class = "card-container">
                <div class = "card-img3">
                    <!-- image in css -->
                </div>
                <div class = "card-content">
                    <center><img src="img/logo.png" alt="LOGO" width="60" height="60"></center>
                    <h3>Cancel your Reservation</h3>
                    <h3><?php 
                        echo $_SESSION['data'];
                        echo $_SESSION['date'];
                        echo $_SESSION['Time'];
                        echo $_SESSION['AMPM'];
                      ?></h3>
                    <form>
                        <br>
                        <center><a href="cancel_choice.html" class="confirm" >Cancel</a></center> 
                    </form>
                           
                </div>
            </div>
        </section>
        
    </body>
</html>