<?php

session_start();


?>
    <!DOCTYPE html>


    <html>


    <link rel="stylesheet" href="./Css/HomepageCss.css">
        <head>

</head>





<body>


    
<header>

            <img class="logo" src="./images/logo.png" alt="logo">

            <nav>
                <ul class="nav_links">
                    <li><a href="./Homepage.php"> Home Page </a></li>
                    <li><a href="./News.php"> News </a></li>
                    <li><a href="./AboutUs.php"> About Us </a></li>
                    <li><a href="./ContactUs.php"> Contact Us </a></li>
                    <li><a href="./tracker.php"> Track Calories </a></li>
                </ul>
            </nav>
            <?php if(isset($_SESSION['name'])): ?>
        <h1> <a href="#"><?php echo $_SESSION['name']; ?></a></h1>
        
        
    <?php else: ?>
        <button><li><a href="LogIn.php">Login</a></li></button>
        <button><li><a href="Register.php">Register</a></li></button>
    <?php endif; ?>
               
                    
        </header>
</body>




    </html>