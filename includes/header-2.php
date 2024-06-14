<?php
    session_start();
    include('D:\xampp\htdocs\iwt\src\includes\connection.php');
    $query1 = "SELECT Fname, Lname FROM reg_user WHERE Username='user1'";
    $result1 = mysqli_query($connection, $query1);

    if($result1) {
    while ($record = mysqli_fetch_assoc($result1)) {
        $_POST['Fname'] = $record['Fname'];
        $_POST['Lname'] = $record['Lname'];
    }
    }
    mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ayubo - Laboratory Assistant Dashboard</title>
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/lab-dashboard-styles.css">
        <link rel="stylesheet" href="http://localhost/iwt/src/styles/header-2.css">
    </head>

    <body>
        <header>
            <div class="header">
                <img src="http://localhost/iwt/src/images/logo.png" class="logo">
                <div class="user-profile">
                    <img src="http://localhost/iwt/src/images/profile.png" alt="User Profile Picture" class="profile-picture">
                    <h1 class="username">
                    <?php
                        echo $_POST['Fname']." ".$_POST['Lname'];
                    ?>
                    </h1>
                </div>
            </div>
                <ul class="navbar">                
                    <li><a href="#home">Home</a></li>
                    <li><a href="#news">Diet Plans</a></li>
                    <li><a href="#contact">Health Check-ups</a></li>
                    <li><a href="#about">Contact Us</a></li>
                </ul>
        </header>