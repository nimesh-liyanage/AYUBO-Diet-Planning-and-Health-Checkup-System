<?php
    session_start();
    include('includes\connection.php');
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/iwt/src/styles/Generated Diet Plan Page.css">
  <link rel="stylesheet" href="http://localhost/iwt/src/styles/header-2.css">
    <link rel="stylesheet" href="http://localhost/iwt/src/styles/header-1.css">
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
                    <li><a href="http://localhost/iwt/src/diet-plan-page.php">Diet Plans</a></li>
                    <li><a href="http://localhost/iwt/src/packages.php">Health Check-ups</a></li>
                    <li><a href="http://localhost/iwt/src/contact-us.php">Contact Us</a></li>
                </ul>
        </header>

  <h3 id="h3c">Your Generated Diet Plan</h3>
  <p> Welcome to our personalized diet plan web page! We provide customized meal plans tailored to your needs, helping
    you achieve your fitness goals. With our expertly crafted recipes and comprehensive nutritional guidelines, you can
    enjoy delicious meals while maintaining a healthy lifestyle. Start your journey towards a balanced diet today! </p>

  <?php
    if(isset($_GET['bmi']) && $_GET['bmi'] == 'underweight') {
  ?>
    <!-- IF BMI value is underweight -->
    <center><h2>Underweight</h2></center>
    <center><img src = "Pictures/underweight.jpg" id = "BMI"></center><br>
    
  <?php
  }
  elseif (isset($_GET['bmi']) && $_GET['bmi'] == 'low') {
    ?>
    <!-- IF BMI value is Low -->
    <center><h2>Your weight is Low</h2></center>
    <h3 id="a">Your Diet Meal Plan</h3>
    <center>
      <table>
        <tr>
          <th id = "th1"></th>
          <th>SUNDAY</th>
          <th>MONDAY</th>
          <th>TUESDAY</th>
          <th>WEDNESDAY</th>
          <th>THURSDAY</th>
          <th>FRIDAY</th>
        </tr>
        <tr>
          <th>BREAKFAST</th>
          <td>Scrambled eggs with avocado and cheese</td>
          <td>Protein pancakes with peanut butter and banana</td>
          <td>Omelet with bacon, cheese, and vegetables</td>
          <td>Breakfast burrito with sausage, eggs, cheese, and vegetables</td>
          <td>Peanut butter and banana smoothie</td>
          <td>Veggie and cheese omelet (bell peppers, onions, spinach, cheese)</td>
        </tr>
        <tr>
          <th>LUNCH</th>
          <td>Grilled chicken breast with quinoa and roasted vegetables</td>
          <td>Turkey and cheese sandwich with whole grain bread with peanut butter and banana</td>
          <td>Beef stir-fry with rice noodles (bell peppers, carrots, broccoli)</td>
          <td>Avocado and chicken wrap with whole wheat tortilla (lettuce, tomatoes, cucumbers)</td>
          <td>Steak salad with mixed greens, avocado, and balsamic dressing</td>
          <td>Grilled chicken Caesar salad</td>
        </tr>
        <tr>
          <th>DINNER</th>
          <td>Grilled salmon with quinoa and steamed asparagus</td>
          <td>Shrimp and vegetable stir-fry with brown rice</td>
          <td>Beef and broccoli with quinoa</td>
          <td>Grilled chicken with sweet potato and roasted Brussels sprouts</td>
          <td>Spinach and feta stuffed chicken breast with quinoa</td>
          <td>Beef fajitas with tortillas, peppers, onions, and sour cream</td>
        </tr>
      </table>
    </center>

		<h3 id = "b">Your Workout Plan</h3>
		<center>
        <table>
            <tr>
                <th id = "th1"></th>
                <th>MONDAY</th>
                <th>TUESDAY</th>
                <th>WEDNESDAY</th>
                <th>THURSDAY</th>
                <th>FRIDAY</th>
            </tr>
            <tr>
                <th>WEEK 1</th>
                <td>Cardiovascular exercise</td>
                <td>Full-body Strength Training</td>
                <td>Rest day</td>
                <td>Cardiovascular exercise</td>
                <td>Bodyweight Circuit Training</td>
            </tr>
            <tr>
                <th>WEEK 2</th>
                <td>Full-body Strength Training</td>
                <td>Cardiovascular exercise</td>
                <td>Rest day</td>
                <td>Bodyweight Circuit Training</td>
                <td>Cardiovascular exercise</td>
            </tr>
            <tr>
                <th>WEEK 3</th>
                <td>Cardiovascular exercise</td>
                <td>Bodyweight Circuit Training</td>
                <td>Rest day</td>
                <td>Full-body Strength Training</td>
                <td>Cardiovascular exercise</td>
            </tr>
            <tr>
                <th>WEEK 4</th>
                <td>Cardiovascular exercise</td>
                <td>Full-body Strength Training</td>
                <td>Rest day</td>
                <td>Cardiovascular exercise</td>
                <td>Bodyweight Circuit Training</td>
            </tr>
        </table>
        </center><hr>

  <?php
  } else if (isset($_GET['bmi']) && $_GET['bmi'] == 'normal') {
    ?>
    <!-- IF BMI value is Normal -->
    <center><h2>Your weight is Normal</h2></center>
    <h3 id="a">Your Diet Meal Plan</h3>
    <center>
      <table>
        <tr>
          <th id = "th1"></th>
          <th>SUNDAY</th>
          <th>MONDAY</th>
          <th>TUESDAY</th>
          <th>WEDNESDAY</th>
          <th>THURSDAY</th>
          <th>FRIDAY</th>
        </tr>
        <tr>
          <th>BREAKFAST</th>
          <td>Scrambled eggs with whole wheat toast and avocado</td>
          <td>Greek yogurt with berries and granola</td>
          <td>Oatmeal with almond butter and banana</td>
          <td>Whole wheat pancakes with fruit and honey</td>
          <td>Vegetable omelet with whole wheat toast</td>
          <td>Green smoothie (spinach, banana, almond milk, peanut butter)</td>
        </tr>
        <tr>
          <th>LUNCH</th>
          <td>Grilled chicken salad with mixed greens, vegetables, and balsamic dressing</td>
          <td>Quinoa salad with chickpeas, tomatoes, cucumbers, and feta cheese</td>
          <td>Turkey and avocado wrap with whole wheat tortilla</td>
          <td>Salmon with quinoa and steamed vegetables</td>
          <td>Grilled chicken breast with sweet potato and green beans</td>
          <td>Quinoa and black bean burrito bowl with salsa and Greek yogurt</td>
        </tr>
        <tr>
          <th>DINNER</th>
          <td>Grilled salmon with brown rice and roasted asparagus</td>
          <td>Chicken stir-fry with mixed vegetables and brown rice</td>
          <td>Beef and vegetable kebabs with quinoa</td>
          <td>Quinoa-stuffed bell peppers with black beans and corn</td>
          <td>Grilled chicken breast with quinoa and roasted Brussels sprouts</td>
          <td>Shrimp and vegetable stir-fry with brown rice</td>
        </tr>
      </table>
    </center>

		<h3 id = "b">Your Workout Plan</h3>
		<center>
        <table>
            <tr>
                <th id = "th1"></th>
                <th>MONDAY</th>
                <th>TUESDAY</th>
                <th>WEDNESDAY</th>
                <th>THURSDAY</th>
                <th>FRIDAY</th>
            </tr>
            <tr>
                <th>WEEK 1</th>
                <td>Strength Training</td>
                <td>Cardiovascular exercise</td>
                <td>Rest day</td>
                <td>Strength Training</td>
                <td>Cardiovascular exercise</td>
            </tr>
            <tr>
                <th>WEEK 2</th>
                <td>Cardiovascular exercise</td>
                <td>Strength Training</td>
                <td>Rest day</td>
                <td>Cardiovascular exercise</td>
                <td>Flexibility and Mobility</td>
            </tr>
            <tr>
                <th>WEEK 3</th>
                <td>Strength Training</td>
                <td>Cardiovascular exercise</td>
                <td>Rest day</td>
                <td>Strength Training</td>
                <td>Cardiovascular exercise</td>
            </tr>
            <tr>
                <th>WEEK 4</th>
                <td>Cardiovascular exercise</td>
                <td>Flexibility and Mobility</td>
                <td>Rest day</td>
                <td>Cardiovascular exercise</td>
                <td>Strength Training</td>
            </tr>
        </table><hr>
        </center>

  <?php
  } else if (isset($_GET['bmi']) && $_GET['bmi'] == 'high') {
    ?>
    <!-- IF BMI value is High -->
    <center><h2>Your weight is High</h2></center>
    <h3 id="a">Your Diet Meal Plan</h3>
    <center>
      <table>
        <tr>
          <th id = "th1"></th>
          <th>SUNDAY</th>
          <th>MONDAY</th>
          <th>TUESDAY</th>
          <th>WEDNESDAY</th>
          <th>THURSDAY</th>
          <th>FRIDAY</th>
        </tr>
        <tr>
          <th>BREAKFAST</th>
          <td>Scrambled eggs with whole wheat toast and avocado</td>
          <td>Greek yogurt with berries and granola</td>
          <td>Oatmeal with almond butter and banana</td>
          <td>Whole wheat pancakes with fruit and honey</td>
          <td>Vegetable omelet with whole wheat toast</td>
          <td>Green smoothie (spinach, banana, almond milk, peanut butter)</td>
        </tr>
        <tr>
          <th>LUNCH</th>
          <td>Grilled chicken salad with mixed greens, vegetables, and balsamic dressing</td>
          <td>Quinoa salad with chickpeas, tomatoes, cucumbers, and feta cheese</td>
          <td>Turkey and avocado wrap with whole wheat tortilla</td>
          <td>Salmon with quinoa and steamed vegetables</td>
          <td>Grilled chicken breast with sweet potato and green beans</td>
          <td>Quinoa and black bean burrito bowl with salsa and Greek yogurt</td>
        </tr>
        <tr>
          <th>DINNER</th>
          <td>Grilled salmon with brown rice and roasted asparagus</td>
          <td>Chicken stir-fry with mixed vegetables and brown rice</td>
          <td>Beef and vegetable kebabs with quinoa</td>
          <td>Quinoa-stuffed bell peppers with black beans and corn</td>
          <td>Grilled chicken breast with quinoa and roasted Brussels sprouts</td>
          <td>Shrimp and vegetable stir-fry with brown rice</td>
        </tr>
      </table>
    </center>

		<h3 id = "b">Your Workout Plan</h3>
		<center>
        <table>
            <tr>
                <th id = "th1"></th>
                <th>MONDAY</th>
                <th>TUESDAY</th>
                <th>WEDNESDAY</th>
                <th>THURSDAY</th>
                <th>FRIDAY</th>
            </tr>
            <tr>
                <th>WEEK 1</th>
                <td>High-Intensity Interval Training </td>
                <td>Strength Training</td>
                <td>Cardiovascular exercise</td>
                <td>Active Recovery</td>
                <td>Strength Training</td>
            </tr>
            <tr>
                <th>WEEK 2</th>
                <td>Cardiovascular exercise</td>
                <td>Active Recovery</td>
                <td>Strength Training</td>
                <td>High-Intensity Interval Training</td>
                <td>Strength Training</td>
            </tr>
            <tr>
                <th>WEEK 3</th>
                <td>Strength Training</td>
                <td>High-Intensity Interval Training</td>
                <td>Active Recovery</td>
                <td>Strength Training</td>
                <td>Cardiovascular exercise</td>
            </tr>
            <tr>
                <th>WEEK 4</th>
                <td>Active Recovery</td>
                <td>Strength Training</td>
                <td>Strength Training</td>
                <td>Cardiovascular exercise</td>
                <td>High-Intensity Interval Training</td>
            </tr>
        </table><hr>
        </center>

  <?php
  } else {
    ?>
    <!-- IF BMI value is Overweight -->
    <center><h2>Overweight</h2></center>
    <center><img src = "Pictures/overweight.jpg" id = "BMI"></center><br>
  <?php
  }
  ?>

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