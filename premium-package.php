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
    <title>Package Details | AYUBO</title>
    <link rel="stylesheet" href="http://localhost/iwt/src/styles/package-styles.css">
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


<h3 id="packName" class="packageName">Premium Health Check Package</h3>

<div class="image-container">
<img src="http://localhost/iwt/src/images/packagePhoto.jpeg" class="image">
<div class="text-container">
<h2 class="Price">Rs.30,500.00</h2>
<p>Review and reassess your health with a routine annual check-up!</p><br>
<p>These tailored health check packages are made to specifically suit your healthcare needs</p>
<a class="pacLink" href = "payment.php?price=30500&packageId=3"><button class="btn1">Proceed to Checkout</button></a>
</div>
</div>

<h3 class="topic1">Description</h3>
<h4 class="topic2">Tests</h4>
<div class="Description">
<ul class="list">
    <li>Full Blood Count (General Body Condition)</li><br>
    <li>Fasting Blood Sugar (Glucose Levels)</li><br>
    <li>Cholesterol (Cardiac Health)</li><br>
    <li>Triglycerides (Cardiac Health)</li><br>
    <li>Creatinine & eGFR (Kidney & Renal Health)</li><br>
    <li>Gamma GT (Liver Health)</li><br>
    <li>Urine Full Report (General Body Condition)</li><br>
    <li>ECG (Cardiac Health)</li><br>
    <li>Full Medical Report</li><br>
</ul>
</div>
<h4 class="topic2">Important Instruction Before Your health Checkup</h4>
<div class="Description1">
<ul class="list">
    <li>Get enough sleep, at least 6 hours prior to checkup</li><br>
    <li>Avoid food and drink for at least 8 to 10 hours prior to checkup</li><br>
    <li>Water, may be consumed to avoid dehydration effects of blood sugar and cholesterol tests</li><br>
    <li>Refrain from consuming alcohol for at least 24 hours prior to checkup</li><br>
    <li>If you are taking medicine for hypertension, continue them as per doctor’s prescription</li><br>
    <li>Please bring any test results or medical reports to assist you with diagnosis if you have any chronic illness or other health problems</li><br>
</ul>
</div>
<div class="Description1">
<ul class="list">
    <li>Wear comfortable clothing allowing access to your upper arms</li><br>
    <li>For females, avoid checkup 7 days before or after the menstrual period. If you are menstruating, you should not have urine analysis/Pap Smear due to blood contamination which affects interpretation of the result. It is also advisable to avoid digital mammogram for breast cancer screening during the period</li><br>
    <li>Treadmill Test – Pumps or sports shoes more suitable, Should not be fasting</li><br>
</ul>

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