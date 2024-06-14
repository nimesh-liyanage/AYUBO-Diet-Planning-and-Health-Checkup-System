<?php
    session_start();
    include('includes\connection.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="http://localhost/iwt/src/styles/Diet Plans Page.css">
		<link rel="stylesheet" href="http://localhost/iwt/src/styles/header-1.css">
		<link rel="stylesheet" href="http://localhost/iwt/src/styles/header-2.css">
		<link rel="stylesheet" href="http://localhost/iwt/src/styles/footer.css">

		<title>Diet plan | AYUBO</title>
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
                            <button class="login-button">Login</button>
                            <button class="signup-button">Sign Up</button>
                        </div>';
                }
?>

            </div>
                <ul class="navbar">                
                    <li><a href="http://localhost/iwt/src/home.php">Home</a></li>
                    <li><a href="#">Diet Plans</a></li>
                    <li><a href="http://localhost/iwt/src/packages.php">Health Check-ups</a></li>
                    <li><a href="http://localhost/iwt/src/contact-us.php">Contact Us</a></li>
                </ul>
        </header>

		<h3 id="h3a">Diet plans</h3>
		<p>
			A well-rounded diet plan consists of incorporating nutrient-dense foods like fruits, 
			vegetables, lean proteins, whole grains, and healthy fats while avoiding processed foods, 
			added sugars, and excessive sodium consumption for optimal health and weight management.
		</p>

		<div>
			<center>
				<table>
					<tr>
						<th>Make Your Diet Plan</th>
					</tr>
					<tr>
						<td>
							<form action="diet-plan.php" method="POST">
								<fieldset>
									<br>
									<input type="hidden" value="<?php echo $_SESSION['UserID']; ?>" name="user-Id"><br><br>

									<label for="height">Height</label>
									<input type="text" id="height" name="height" placeholder="Enter Height (cm)" required><br><br>

									<label for="weight">Weight</label>
									<input type="text" id="weight" name="weight" placeholder="Enter Weight (kg)" required><br><br>

									<label for="age">Age</label>
									<input type="number" id="age" name="age" max="150" min="1" required><br><br>

									<label for="gender">Gender</label><br>
									<input type="radio" id="male" name="gender" value="male" class="inline">
									<label for="male">Male</label><br>
									<input type="radio" id="female" name="gender" value="female" class="inline">
									<label for="female">Female</label><br><br>

									<hr>

									<input type="checkbox" id="terms-and-conditions" required name="terms-and-conditions" class="inline">
									<label for="terms-and-conditions">I accept the terms and conditions</label><br><br>

									<center><input type="submit" id="sub" value="Submit" name="submit"></center><br>
								</fieldset>
							</form>
						</td>
					</tr>
				</table>
			</center>
		</div>

		<link rel="stylesheet" href="http://localhost/iwt/src/styles/footer.css">
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
