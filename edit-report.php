<?php session_start(); ?>
<?php include('includes\connection.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Results Report | AYUBO</title>
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/edit-report-styles.css">
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/header-2.css">
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

<?php 

if(isset($_GET['reportID'])) {
    $reportID = $_GET['reportID'];
    $query4 = "SELECT * FROM healthcheck_resultsreport WHERE ReportID = '$reportID' LIMIT 1";

    $result4 = mysqli_query($connection, $query4);

    if ($result4) {
        $record4 = mysqli_fetch_assoc($result4);
        $assistantId = $record4['AssistantID'];
        $reportDate = $record4['ReportDate'];
        $description = $record4['Description'];

    } else {
        echo "Error: " . $query4 . "<br>" . mysqli_error($connection);
    }
}

if(isset($_POST['save'])) {
    $reportId = $_POST['report-id'];
    $assistantId = $_POST['assistant-id'];
    $reportDate = $_POST['report-date'];
    $description = $_POST['description'];


    $query5 = "UPDATE healthcheck_resultsreport SET ReportDate = '$reportDate', Description = '$description', AssistantID = '$assistantId'WHERE ReportID='$reportId'";
    $result5 = mysqli_query($connection, $query5);

    if ($result5) {
        echo "Data updated successfully.";
        header('Location: lab-dashboard.php');

    } else {
        echo "Error: " . $query5 . "<br>" . mysqli_error($connection);
    }
} elseif (isset($_POST['cancel'])) {
    header('Location: lab-dashboard.php');
}
?>
        <h1 class="topic1">Laboratory Assistant Dashboard</h1>
        <div class="colored-border1">
            <h1 class="topic2">Edit Health Check-up Results Report</h1>
            <form method="post" action='edit-report.php' id="health-report-form">
                <fieldset>
                    <input id="report-id" type="hidden" name="report-id" value="<?php echo $reportID; ?>">
                    <label for="assistant-id">Assistant ID : <input id="assistant-id" name="assistant-id" type="text" value="<?php echo $assistantId; ?>"></label>
                    <label for="report-date">Report Date : <input id="report-date" type="date" name="report-date" value="<?php echo $reportDate; ?>"></label>
                    <label for="report-data">Report Information :
                        <textarea id="description" name="description" rows="20" cols="30"><?php echo $description; ?></textarea>
                    </label>
                </fieldset>
                <input type="submit" value="Save" name="save" onclick="reportSubmit()">
                <input type="submit" value="Cancel" name="cancel">
            </form>

            <script>
            function reportSubmit() {
              alert("The report was updated.");
            }
            </script>
        </div>

    </body>
</html>
<?php mysqli_close($connection); ?>