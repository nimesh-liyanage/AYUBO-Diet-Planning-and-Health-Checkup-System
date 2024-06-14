<?php
session_start();
include('includes\connection.php');

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect the user to the desired page
header('Location: http://localhost/iwt/src/home.php');
exit();
?>
<?php mysqli_close($connection); ?>