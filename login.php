<?php 
session_start();
include('includes\connection.php');

if(isset($_POST['submit'])) {

    $errors = array();

    if(!isset($_POST['email'])) {
        $errors[] = 'Username is missing';
    }

    if(!isset($_POST['password'])) {
        $errors[] = 'Password is missing';
    }

    if(empty($errors)) {
        $entered_email = $_POST['email'];
        $entered_password = $_POST['password'];

        $query = "SELECT * FROM reg_user WHERE Email = '$entered_email' AND Password = '$entered_password' LIMIT 1";

        $result = mysqli_query($connection, $query);

        if ($result) {
            if(mysqli_num_rows($result) == 1) {
                $login = 1;

                // Perform login logic and verify user credentials
if ($login == 1) {

    $query1 = "SELECT * FROM reg_user WHERE Email='$entered_email'";
    $result1 = mysqli_query($connection, $query1);

    if($result1) {
    while ($record = mysqli_fetch_assoc($result1)) {
        // Set the session variables
        $_SESSION['UserID'] = $record['UserID'];
        $_SESSION['Fname'] = $record['Fname'];
        $_SESSION['Lname'] = $record['Lname'];
    }
    }
    
    // Redirect the user to the desired page
    header('Location: http://localhost/iwt/src/home.php');
    exit();
} else {
    // Display an error message or handle unsuccessful login
    //echo "Login unsuccessful. Please try again.";
}
            } else {
                $errors[] = 'Invalid username / password';
            }
        } else {
            $errors[] = 'Query failed';
        }
    }

}



?>

<!DOCTYPE html>
<html>
<head>
    <title>Login | AYUBO</title>
    <link rel="stylesheet" href="http://localhost/iwt/src/styles/login-styles.css">
</head>
<body>
    <center>
        <div>
        <img src="http://localhost/iwt/src/images/logo.png" width="80%">
        <br>
        <strong>Log - In</strong>
        <br>
        <?php if(isset($errors) && !empty($errors)) {
            echo '<p class="error">Invalid username / password. Try again</p>';
        } ?>
        
        <form method="post" action='login.php' id="login-form">
            <p><input type="text" name="email" placeholder="E-Mail Address"></p>
            <p><input type="password" name="password" placeholder="Password"></p>
            <br>
            
            <p><a href="http://localhost/iwt/src/signup.php">Not have an account yet? Sign-up!</a></p>
            <p>Remember Me! <input type="checkbox"></p>
            <input type="submit" value="Login" name="submit" onclick="accountLogin()">
        </form>
    </div>

    <script>
            function accountLogin() {
              alert("Welcome back to AYUBO!");
            }
    </script>

    <a href="http://localhost/iwt/src/admin-login.php">Admin Login</a>
    </center>
</body>
</html>
<?php mysqli_close($connection); ?>