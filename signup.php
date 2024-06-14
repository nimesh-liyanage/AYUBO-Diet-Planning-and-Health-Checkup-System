<?php include('includes\connection.php'); 

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $idp = $_POST['idp'];
    $lane = $_POST['lane'];
    $city = $_POST['city'];
    $mobile_number = $_POST['mobile_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password == $cpassword) {
            $query = "INSERT INTO reg_user (Username, Password, Fname, Lname, AddressNo, Lane, Town, Email, Gender, DOB, ContactNo)
            VALUES ('$username', '$password', '$first_name', '$last_name', '$idp', '$lane', '$city', '$email', '$gender', '$birthday', $mobile_number)";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Data inserted successfully.";
        header('Location: login.php');

    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
    } else {
        echo "Password unsuccessfully.";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign-up | AYUBO</title>
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/signup-styles.css">
    </head>
    <body>
        <center>
            <div>
            <img src="http://localhost/iwt/src/images/logo.png" width="80%">
            <br>
            <strong>Sign - up</strong>
            <br>
            <form method="post" action="signup.php" id="signup-form">
                <p><input class="text1" name="first_name" placeholder="First Name*" required><input class="text2" name="last_name" placeholder="Last Name*"required></p>
                <p> <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday">
                </p>
                <p><input class="text1" name="gender" placeholder="Gender"><input class="text2" name="username" placeholder="Username" required></p>
                <p><input class="text3" name="idp" placeholder="Address No.">
                <p><input class="text3" name="lane" placeholder="Lane,Road">
                <p><input class="text3" name="city" placeholder="City,Town" required>
                <p><input class="text1" name="mobile_number" placeholder="Mobile Number*" required>
                <p><input class="text3" name="email" placeholder="Email Address*" required></p>
                <p><input class="text1" id="password" name="password" placeholder="Password*" required><input class="text2" id="cpassword" name="cpassword" placeholder="Confirm Password*" required></p>
                <p id="message"></p>
                <p><input type="submit" value="Sign Up" name="submit" onclick="accountCreate()"></p>
            </form>
            </div>

            <script>
            function accountCreate() {
              alert("The account was created.");
            }
            </script>

        </center>
    </body>
</html>
<?php mysqli_close($connection); ?>