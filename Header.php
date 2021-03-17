
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
                </ul>
            </nav>
            <?php if(isset($_SESSION['name'])): ?>
               
                <h2> Welcome, <a href="#"><?php echo $_SESSION['name']; ?> </a> </h2>
                <li><a href="logout.php"> Logout </a> </li>
                <?php else: ?>
                    <li><a class="login" href="./LogIn.php"><button>LogIn/Register</button></a></li>
                <?php endif; ?> 
               
                    
        </header>
</body>




    </html>