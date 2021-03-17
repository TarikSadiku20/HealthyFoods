<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> News </title>
    <link rel="stylesheet" href="./Css/News.css">
</head>
<body>  
<?php
    include "./Header.php";
    ?>

        <main>
            <section class="formContainer">
                <div class="slider"> 
                    <div class="imgs_slides"> 
          
                        <!-- Radio buttons start --> 
                        <input type="radio" name="radio-btn" id="radio1" /> 
          
                        <input type="radio" name="radio-btn" id="radio2" /> 
          
                        <input type="radio" name="radio-btn" id="radio3" /> 
          
                        <input type="radio" name="radio-btn" id="radio4" /> 
          
                        <!-- Radio buttons end --> 
                        <!-- Embedding  images start --> 
                        <div class="first slide"> 
                            <img src="./images/img1.png">
                        </div> 
                        <div class="slide"> 
                            <img src="./images/img2.jpg" /> 
                        </div> 
                        <div class="slide"> 
                            <img src="./images/img3.jpg" /> 
                        </div> 
                        <div class="slide"> 
                            <img src="./images/img4.jpg" /> 
                        </div> 
                        <!-- Embedding images end --> 
                    </div> 
                    <!-- Navigation start --> 
                <div class="navigation"> 
                    <label for="radio1" class="navigation-btn"> 
                    </label> 
                    <label for="radio2" class="navigation-btn"> 
                    </label> 
                    <label for="radio3" class="navigation-btn"> 
                    </label> 
                    <label for="radio4" class="navigation-btn"> 
                    </label> 
                    </div> 
                <!-- Navigation end --> 
                </div> 
                <!-- Image slider end --> 

                <div class="row">
                    <h2>How it Works - Simple as 1, 2, 3 </h2>
                </div>
                

                <div class="col span-steps">
                    <br/>
                    <div class="work-step">
                        <div>1</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    <br/>
                    <div class="work-step">
                        <div>2</div>
                        <p>Oder your delicious meal using our mobile app or website.</p>
                    </div>
                    <br/>
                    <div class="work-step">
                        <div>3</div>
                        <p>Enjoy our meal after less than 20 minutes. Thanks for choosing us!</p>
                    </div>
                </div>
                    
                <a href=""></a>
                <a href=""></a>

        </section>
        </main>
        <?php
    include "./Footer.php";
    ?>


