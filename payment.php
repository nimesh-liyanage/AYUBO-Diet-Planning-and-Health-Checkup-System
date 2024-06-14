<?php

   session_start();
    include('includes\connection.php');
    $query1 = "SELECT * FROM reg_user WHERE Username='user1'";
    $result1 = mysqli_query($connection, $query1);

    if($result1) {
    while ($record = mysqli_fetch_assoc($result1)) {
        $_SESSION['Fname'] = $record['Fname'];
        $_SESSION['Lname'] = $record['Lname'];
        $_SESSION['UserID'] = $record['UserID'];
    }
    }

    if(isset($_GET['packageId'])) {
    $packageId = $_GET['packageId'];
    $query2 = "SELECT * FROM healthcheck_package WHERE PackageID = '$packageId' LIMIT 1";

    $result2 = mysqli_query($connection, $query2);

    if ($result2) {
        $record2 = mysqli_fetch_assoc($result2);
        $price = $record2['Price'];
        $packageName = $record2['PackageName'];

    } else {
        echo "Error: " . $query2 . "<br>" . mysqli_error($connection);
    }
}

if(isset($_POST['confirm'])) {
    $userId = $_POST['user-id'];
    $paymentMethod = $_POST['PaymentMethod'];
    $preferredDateTime = $_POST['PreferredDateTime'];
    $amount = $_POST['amount'];
    $currentDate = date("Y-m-d");

    $query3 = "INSERT INTO payment (Amount, Payment_Method, PaymentDate, UserID)
            VALUES ('$amount', '$paymentMethod', '$currentDate', '$userId')";
    $result3 = mysqli_query($connection, $query3);

    if ($result3) {
        echo "Data inserted successfully.";

    } else {
        echo "Error: " . $query3 . "<br>" . mysqli_error($connection);
    }

    $query4 = "SELECT * FROM payment WHERE UserID = '$userId' AND PaymentDate = '$currentDate' LIMIT 1";
    $result4 = mysqli_query($connection, $query4);

    if ($result4) {
    $record4 = mysqli_fetch_assoc($result4);
    $paymentId = $record4['PaymentID'];

    $query5 = "INSERT INTO healthcheckorder (OrderDate, PreferredDateTime, UserID, PackageID, PaymentID)
                VALUES ('$currentDate', '$preferredDateTime', '$userId', '$packageId', '$paymentId')";
    $result5 = mysqli_query($connection, $query5);

    if ($result5) {
        echo "Data inserted successfully.";
        header('Location: home.php');
    } else {
        echo "Error: " . $query5 . "<br>" . mysqli_error($connection);
    }
} else {
    echo "Error: " . $query4 . "<br>" . mysqli_error($connection);
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" href="http://localhost/iwt/src/styles/payment.css">
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
    <div class="block1">
    <div class="Details">
    <h3 class="topic">Order & Payment Details</h3>

    <p class="text1">Selected Package : <?php echo $packageName."</p>"; ?>
    <p class="text1">Amount : Rs. <?php echo $price."</p>"; ?>

    <form action="payment.php?packageId=<?php echo $packageId; ?>" method="post" id="payment-form">
        <fieldset class = "pay">
        <input id="user-id" name="user-id" type="hidden" value="<?php echo $_SESSION['UserID']; ?>">
        <input id="amount" name="amount" type="hidden" value="<?php echo $price; ?>">

        <input id="current-date" name="current-date" type="hidden" value="">
        
        <label class="payMethod" for="Payment Method">Payment method</label>
        <select class="select1" name="PaymentMethod" id="PaymentMethod">
        <option value="Credit Card">Credit Card</option>
        <option value="Debit Card">Debit Card</option>
        <option value="Paypal">Paypal</option>
        <option value="Cash">Cash</option>
        </select><br><br>

        <label class="payMethod" for="Preferred Date Time">Preferred Date & Time  <input type="datetime-local" class="select2" name="PreferredDateTime" id="PreferredDateTime"></label><br>

        </fieldset>
        <input type="submit" class="submit" value="Confirm Payment & Order" name="confirm">
    </form>
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