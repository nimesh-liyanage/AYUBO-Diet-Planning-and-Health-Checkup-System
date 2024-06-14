<!DOCTYPE html>
<html>
<head>
<title>Contact Us Page</title>
<link rel="stylesheet" href="http://localhost/iwt/src/styles/contact-us.css">
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
                    <li><a href="http://localhost/iwt/src/packages.php">Health Check-ups</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
        </header>
<div class="container">
 <h2>Contact Us</h2>
		<section>
			<div class="top">
				<div class="top1"><h3>phone number:</h3>
					<p>(+94)1234567</p> </div>
				<div><h3>Fax:</h3>
					<p>(+94)1234567</p> </div>
				<div><h3>Email Address:</h3>
					<p>support@edu.lk</p> </div>
			</div>
		</section>
		
				<div class="content2">
					<p>Contact us through the form for</p>
					<p>customer feedback and non-customer</p>
					<p>and technical issues</p>
				</div> 			
	<form>

			<div class="form"> 
				<div class="left">
					<input type="text" placeholder="Email" title="email" required>
					
					<input type="text" placeholder="Subject" title="subject" required>
			</div>
				
				<div class="middle">
				<textarea name="massaage" id="cuf" cols="30" rows="100" placeholder="Subject"></textarea>
			</div>
			
			<div class="right">
				<input type="submit" class="sub" name="send email">
				</div>

			</div>
	</form>
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
