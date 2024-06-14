<?php
    session_start();
    include('includes\connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Check Package | AYUBO</title>
    <link rel="stylesheet" href="http://localhost/iwt/src/styles/packages-styles.css">
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
                    <li><a href="http://localhost/iwt/src/home.php">Home</a></li>
                    <li><a href="http://localhost/iwt/src/diet-plan-page.php">Diet Plans</a></li>
                    <li><a href="#">Health Check-ups</a></li>
                    <li><a href="http://localhost/iwt/src/contact-us.php">Contact Us</a></li>
                </ul>
        </header>


<h3 class="topic1">Available Packages </h3>
<div class="packages">
    <div class="img-container">
        <a class="pacLink" href="http://localhost/iwt/src/starter-package.php">
        <img class="img1"src="http://localhost/iwt/src/images/packagePhoto.jpeg">
        <h4 class="name">Starter Health Check Package</h4></a>
        <h4 class="price">Rs.4,500</h4>
        <a class="pacLink" href = "http://localhost/iwt/src/payment.php?price=4500&packageId=1"><button class="btn">Purchase</button></a>

    </div>
    <div class="img-container">
        <a class="pacLink" href="http://localhost/iwt/src/essential-package.php">
        <img class="img1"src="http://localhost/iwt/src/images/packagePhoto.jpeg">
        <h4 class="name"> Essential Health Check Package</h4></a>
        <h4 class="price">Rs.10,450</h4>
        <a class="pacLink" href = "http://localhost/iwt/src/payment.php?price=10450&packageId=2"><button class="btn">Purchase</button></a>
    </div>
    <div class="img-container">
        <a class="pacLink" href="http://localhost/iwt/src/executive-package.php" >
        <img class="img1"src="http://localhost/iwt/src/images/packagePhoto.jpeg">
        <h4 class="name"> Executive Health Check Package</h4></a>
        <h4 class="price">Rs.15,000</h4>
        <a class="pacLink" href = "http://localhost/iwt/src/payment.php?price=15000&packageId=3"><button class="btn">Purchase</button></a>
    </div>
    <div class="img-container1">
        <a class="pacLink" href="http://localhost/iwt/src/premium-package.php">
        <img class="img1"src="http://localhost/iwt/src/images/packagePhoto.jpeg">
        <h4 class="name"> Premium Health Check Package</h4></a>
        <h4 class="price">Rs.30,500</h4>
        <a class="pacLink" href = "http://localhost/iwt/src/payment.php?price=30500&packageId=4"><button class="btn">Purchase</button></a>
    </div>
</div>

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