<?php
session_start();
    include('includes\connection.php');
?>

<?php

// Step 3: Handle login request
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Step 4: Query the Admin table
    $adminQuery = "SELECT * FROM admin WHERE Username='$username' AND Password='$password'";
    $adminResult = mysqli_query($connection, $adminQuery);

    // Step 5: Check the result for Admin
    if (mysqli_num_rows($adminResult) == 1) {
        // Admin login successful
        // Grant appropriate access
        echo "Admin login successful!";

    if($adminResult) {
    while ($record = mysqli_fetch_assoc($adminResult)) {
        // Set the session variables
        $_SESSION['UserID'] = $record['AdminID'];
        $_SESSION['Fname'] = $record['Fname'];
        $_SESSION['Lname'] = $record['Lname'];
    }
    }
    
    // Redirect the user to the desired page
    header('Location: http://localhost/iwt/src/admin-dashboard.php');
    exit();

    } else {
        // Step 6: Query the LabAssistant table
        $assistantQuery = "SELECT * FROM labassistant WHERE Username='$username' AND Password='$password'";
        $assistantResult = mysqli_query($connection, $assistantQuery);

        // Step 7: Check the result for LabAssistant
        if (mysqli_num_rows($assistantResult) == 1) {
            // Lab Assistant login successful
            // Grant appropriate access
            echo "Lab Assistant login successful!";

    if($assistantResult) {
    while ($record = mysqli_fetch_assoc($assistantResult)) {
        // Set the session variables
        $_SESSION['UserID'] = $record['AssistantID'];
        $_SESSION['Fname'] = $record['Fname'];
        $_SESSION['Lname'] = $record['Lname'];
    }
    }
    
    // Redirect the user to the desired page
    header('Location: http://localhost/iwt/src/lab-dashboard.php');
    exit();

        } else {
            // Step 8: Handle login failure
            echo "Invalid username or password!";
        }
    }
}


?>

<!DOCTYPE html>

<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta name = "author" content = "M.Y.K.Kularathne">
    <meta name = "discription" content = "Admin Login Page - Secure Access to the Admin Dashboard">
    <meta name="keywords" content="admin, login, dashboard, secure access, management">
    <title>Admin Login | AYUBO</title>
    <link rel="icon" href="http://localhost/iwt/src/images/favicOn.png" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/iwt/src/styles/log001.css" type = "text/css">
</head>

<body>
    <div class="image"><img src="http://localhost/iwt/src/images/logo.png" alt="The logo"></div>
    <div class="wrapper">
        <div class="form">
            <h2>Admin Login</h2>
            <form action="http://localhost/iwt/src/admin-login.php" method = "post">   
                <div class="form_details_1">
                    <label for="userName">User name:</label> 
                </div>
                <div class="input"> 
                <input type="text" name="username" id="username" placeholder="User name / e-mail" autocomplete="on" required>   
                </div>
                <div class="form_details_1">
                    <label for="password" class="form_details">Password:</label>
                </div>
                <div class="input">
                    <input type="password" name="password" id="password" placeholder="Enter the password" required>
                </div> 
                
                <div >
                    <input type="submit" value="Login" name="submit">
                </div>
            </form>

        </div>
    </div>

</body>

</html>
<?php mysqli_close($connection); ?>