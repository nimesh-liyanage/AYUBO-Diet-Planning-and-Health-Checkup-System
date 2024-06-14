<?php
    session_start();
    include('includes\connection.php');
?>

<?php

if(isset($_POST['submit'])) {
    $orderId = $_POST['order-id'];
    $reportId = $_POST['report-id'];
    $assistantId = $_POST['assistant-id'];
    $reportDate = $_POST['report-date'];
    $description = $_POST['description'];


    $query2 = "INSERT INTO healthcheck_resultsreport (OrderID, ReportID, ReportDate, Description, AssistantID)
            VALUES ('$orderId', '$reportId', '$reportDate', '$description', '$assistantId')";
    $result2 = mysqli_query($connection, $query2);

    if ($result2) {
        echo "Data inserted successfully.";
        header('Location: lab-dashboard.php');

    } else {
        echo "Error: " . $query2 . "<br>" . mysqli_error($connection);
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laboratory Assistant Dashboard | AYUBO</title>
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/lab-dashboard-styles.css">
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/header-2.css">
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/header-1.css">
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
                    <li><a href="#">Home</a></li>
                    <li><a href="http://localhost/iwt/src/diet-plan-page.php">Diet Plans</a></li>
                    <li><a href="http://localhost/iwt/src/packages.php">Health Check-ups</a></li>
                    <li><a href="http://localhost/iwt/src/contact-us.php">Contact Us</a></li>
                </ul>
        </header>

        <h1 class="topic1">Laboratory Assistant Dashboard</h1>
        <div class="colored-border1">
            <h1 class="topic2">Add a Health Check-up Results Report</h1>
            <form method="post" action='lab-dashboard.php' id="health-report-form" onsubmit="reportSubmit()">
                <fieldset>
                    <label for="order-id">Enter Order ID : <input id="order-id" name="order-id" type="text" required></label>
                    <label for="report-id">Enter Report ID : <input id="report-id" name="report-id" type="text" required></label>
                    <label for="assistant-id">Enter Assistant ID : <input id="assistant-id" name="assistant-id" type="text" required></label>
                </fieldset>
                <fieldset>
                    <label for="report-date">Enter Report Date : <input id="report-date" type="date" name="report-date" required></label>
                    <label for="report-data">Enter Report Information :
                        <textarea id="description" name="description" rows="10" cols="30" placeholder="Enter here..."></textarea>
                    </label>
                </fieldset>
                <input type="submit" value="Submit" name="submit">
            </form>

            <script>
            function reportSubmit() {
              alert("The report was submitted.");
            }
            </script>
        </div>
        
        <div class="colored-border2">
            <h1 class="topic3">Manage Health Check-up Results Reports</h1>
            
            <?php     
            $query3 = "SELECT OrderID, ReportID, ReportDate, AssistantID FROM healthcheck_resultsreport";
            $result3 = mysqli_query($connection, $query3); 

            if($result3) { ?>
            
            <table>
            <tr> <th>Order ID</th> <th>Report ID</th> <th>Report Date</th> <th>Assistant ID</th> <th></th> <th></th> </tr>

            <?php while ($record3 = mysqli_fetch_assoc($result3)) { ?>
                <tr> 
                    <td> <?php echo $record3['OrderID'] ?> </td> 
                    <td> <?php echo $record3['ReportID'] ?> </td> 
                    <td> <?php echo $record3['ReportDate'] ?> </td> 
                    <td> <?php echo $record3['AssistantID'] ?> </td> 
                    <td> <button> <a href="http://localhost/iwt/src/edit-report.php?reportID=<?php echo $record3['ReportID'] ?>">Edit</a> </button> </td> 
                    <td> <button onclick="reportDelete()"> <a href="http://localhost/iwt/src/delete-report.php?reportID=<?php echo $record3['ReportID'] ?>">Delete</a> </button> </td>
                </tr>
            <?php } ?> 
            </table>
            <?php } ?>
        </div>

        <script>
            function reportDelete() {
              alert("The report was deleted.");
            }
        </script>

    </body>
</html>
<?php mysqli_close($connection); ?>