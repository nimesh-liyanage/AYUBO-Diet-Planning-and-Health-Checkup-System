<?php
session_start();
include('includes\connection.php');

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AYUBO</title>
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/home.css">
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/header-2.css">
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/header-1.css">
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/footer.css">
    </head>

    <body>
        <header>
            <div class="header">
                <img src="http://localhost/iwt/src/images/logo.png" class="logo">
                <?php

                // Check if the user is logged in
                if (isset($_SESSION['UserID'])) {
                    // Display the user profile code
                    echo '
                        <div class="user-profile">
                            <img src="http://localhost/iwt/src/images/profile.png" alt="User Profile Picture" class="profile-picture">
                            <h1 class="username">
                                <a href="http://localhost/iwt/src/user-profile.php?userID='.$_SESSION['UserID'].'">
                                '.$_SESSION['Fname'].' '.$_SESSION['Lname'].
                                '</a>
                            </h1>
                        </div>';
                } else {
                    // Display the login and sign up buttons
                    echo '
                        <div class="button-container">
                            <button class="login-button">
                            <a href="http://localhost/iwt/src/login.php">Login</a>
                            </button>
                            <button class="signup-button">
                            <a href="http://localhost/iwt/src/signup.php">Sign Up</a>
                            </button>
                        </div>';
                }
?>

            </div>
                <ul class="navbar">                
                    <li><a href="#">Home</a></li>
                    <li><a href="http://localhost/iwt/src/diet-plan-page.php">Diet Plans</a></li>
                    <li><a href="http://localhost/iwt/src/packages.php">Health Check-ups</a></li>
                    <li><a href="http://localhost/iwt/src/contact-us.php">Contact Us</a></li>
                </ul>
        </header>

        <section>
        <div class="container">
            <div class="image">
                <img src="http://localhost/iwt/src/images/theme.jpg" width="100%">
            </div>
        <div class="text">
            <h1>Why Choose Ayubo?</h1>
            <p>
                With the rapid development of modern technology, the Internet has become capable of meeting
                most of the needs of human beings. Not only daily food supply, transportation, education but
                also healthcare services are available online “Ayubo” web application is a good example of
                that.
        </div>
    </div>

    <div class="container">
        <div class="text">
            <br><br><br><br><br>
            <p>There is the ability to efficiently obtain the services of doctors for all diseases, obtaining
                medical recommendations, government recognized hospital laboratory services, pharmacy
                services for health tests.</p>
        </div>
        <div class="image">
            <img src="http://localhost/iwt/src/images/hc.jpg" width="100%">
        </div>
    </div>

    <div class="container">
        <div class="image">
            <img src="http://localhost/iwt/src/images/dpp.jpg" width="100%">
        </div>
        <div class="text">
        <br><br><br><br><br>
            <p>Moreover, customers can also get services such as diet plans, exercise
                plans, health counseling etc. through this internet application to live a healthy and healthy life.</p>
        </div>
    </div>
    </section>

    <section>
        <div class="container1">
            <div class="con1">
                <h1>What We Do</h1>
            </div>
                <div class="con2">
                    <div class="GDP">
                        <button type="Submit" class="btn">Generate Diet Plan</button>
                    </div>
                    <div class="SHC">
                        <button type="Submit" class="btn">Schedule Health &nbsp;&nbsp; Check-up</button>
                    </div>
                </div>
        </div>
    </section>
    <section>

        <div class="container">
            <div class="image">
                <img src="http://localhost/iwt/src/images/hc.jpg" width="100%">
            </div>
            <div class="text">
                <h1>Who We are?</h1>
                <p>We are 1st year 2nd semester student at Sri Lanka Institute of Information Technology. We implement this
                Web Application for our Final project of Introduction to Web Technologies. Kindly inform that this Web
                Application use for Academic purpose only.    
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="container1">
            <div class="con1">
                <h1>What Our Coustomer's Says</h1>  
            </div>
            <div class="con3">
                <div class="con31">
                    <p><strong>Tiron Silva</strong><br>
                        "I'm impressed with the accuracy and efficiency of this health check-up and diet plan web application. 
                        The check-up results provide a comprehensive overview of my health status, and the diet plan recommendations 
                        are well-balanced and realistic. The app also offers additional resources and articles that have helped me expand
                        my knowledge about nutrition and wellness. It's like having a personal nutritionist and health coach in my pocket!"
                    </p>
                </div>
                <div class="con31">

                    <p>
                    <strong>Shamini Peiris</strong><br>
                        "I've tried several health apps before, but this one stands out. The health check-up feature is detailed, and the analysis is easy to understand. 
                        The diet plan section offers a variety of meal options and recipes tailored to my preferences and dietary restrictions. It has helped me 
                        make healthier choices and develop better eating habits. The app has definitely made a positive impact on my overall well-being."</p></div>
            </div>

        </div>
    </section>


        <footer class="Footer">
            <div class="foot1">
                    <div class="f1">
                            <div >
                                <img src="http://localhost/iwt/src/images/logo.png" alt="The Logo" class="fimg">
                            </div>
                            <div>

                            </div>
                    </div>
                    <div class="f2">
                        <p>Quick Links</p>
                        <ul>
                            <li><a href="http://localhost/iwt/src/diet-plan-page.php">&gt;&gt;Generate Diet Plans</a></li>
                            <li><a href="http://localhost/iwt/src/packages.php">&gt;&gt;Schedule Health Checkups</a></li>
                            <li><a href="http://localhost/iwt/src/contact-us.php">&gt;&gt;Help & Support</a></li>
                            <li><a href="http://localhost/iwt/src/terms-and-conditions.php">&gt;&gt;Terms & Conditions</a></li>
                        
                    </div>
                <div class="f3">
                    <h3>Contact Info<h3>
                        <ul>
                            <li>Phone : 011 2255 255</li>
                            <li>E-Mail : ayubodphc@gmail.com</li>
                            <li>Facebook : AYUBO</li>
                            <li>Instagram : _ayubo_</li>
                        </ul>
                </div>
            </div>
                <div class="foot2">
                    <p>&copy;2023 MLB_11.1_03 All Rights Recieved.</p>
                </div>
        
    
        </footer>
    </body>
</html>
<?php mysqli_close($connection); ?>