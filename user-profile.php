<?php
    session_start();
    include('includes\connection.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Profile | AYUBO</title>
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/user-profile.css">
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/header-2.css">
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/header-1.css">
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/footer.css">
    </head>

<?php 

if(isset($_GET['userID'])) {
    $userID = $_GET['userID'];
    $query2 = "SELECT * FROM reg_user WHERE UserID = '$userID' LIMIT 1";

    $result2 = mysqli_query($connection, $query2);

    if ($result2) {
        $record2 = mysqli_fetch_assoc($result2);
        $username = $record2['Username'];
        $password = $record2['Password'];
        $first_name = $record2['Fname'];
        $last_name = $record2['Lname'];
        $idp = $record2['AddressNo'];
        $lane = $record2['Lane'];
        $city = $record2['Town'];
        $email = $record2['Email'];
        $gender = $record2['Gender'];
        $birthday = $record2['DOB'];
        $mobile_number = $record2['ContactNo'];
;
    } else {
        echo "Error: " . $query2 . "<br>" . mysqli_error($connection);
    }
}

if(isset($_POST['save'])) {
    $userId = $_POST['user-id'];
    $idp = $_POST['idp'];
    $lane = $_POST['lane'];
    $city = $_POST['city'];
    $mobile_number = $_POST['mobile_number'];


    $query3 = "UPDATE reg_user SET AddressNo = '$idp', Lane = '$lane', Town = '$city', ContactNo = $mobile_number WHERE UserID = $userId";
    $result3 = mysqli_query($connection, $query3);

    if ($result3) {
        echo "Data updated successfully.";
        header("Location: user-profile.php?userID=$userId");

    } else {
        echo "Error: " . $query3 . "<br>" . mysqli_error($connection);
    }
} elseif (isset($_POST['cancel'])) {
    header('Location: home.php');
}
?>

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
                    <li><a href="http://localhost/iwt/src/contact-us.php">Contact Us</a></li>
                </ul>
        </header>
<div class="content"> <div class="text">
            <h3 class="topic">Edit Profile Details</h3>
            <p class="text1">General Details</p>
            <p class="text1">Name - <?php echo $first_name.' '.$last_name; ?></p>
            <p class="text1">Username - <?php echo $username; ?></p>
            <p class="text1">Date of Birth - <?php echo $birthday; ?></p>
            <p class="text1">Gender - <?php echo $gender; ?></p>
            <p class="text1">Email - <?php echo $email; ?></p>
            <form method="post" action='user-profile.php' id="edit-profile-form">
                <input id="user-id" type="hidden" name="user-id" value="<?php echo $userID; ?>">
                <p>Address No - <input class="text1" name="idp" value="<?php echo $idp; ?>"></p>
                <p>Lane / Road - <input class="text1" name="lane" value="<?php echo $lane; ?>"></p>
                <p>City / Town - <input class="text1" name="city" value="<?php echo $city; ?>"></p>
                <p>Mobile Number - <input class="text1" name="mobile_number" value="<?php echo $mobile_number; ?>"></p>
                <input type="submit" value="Save" name="save">
                <input type="submit" value="Cancel" name="cancel">
                
                <?php

                // Check if the user is logged in
                if (isset($_SESSION['UserID'])) { 
                    //Display the logout button ?>
                          <form action="http://localhost/iwt/src/logout.php" method="POST">
                            <input type="submit" value="Logout" name="logout">
                          </form>
                <?php } ?>
                
                
        </div></div>

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
                    <h3>Contact Info</h3>
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