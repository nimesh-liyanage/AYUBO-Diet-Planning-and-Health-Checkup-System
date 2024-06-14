<?php session_start(); ?>
<?php include('includes\connection.php'); ?>

<?php 

if(isset($_GET['reportID'])) {
    $reportID = $_GET['reportID'];

    $query6 = "DELETE FROM healthcheck_resultsreport WHERE ReportID='$reportID'";

    $result6 = mysqli_query($connection, $query6);

    if($result6) {
        echo "Data deleted successfully.";
        header('Location: lab-dashboard.php');

    } else {
        echo "Error: " . $query6 . "<br>" . mysqli_error($connection);
    }
}

?>
