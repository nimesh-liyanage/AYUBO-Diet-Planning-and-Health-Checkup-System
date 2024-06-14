<?php
    include('includes\connection.php');
?>

<?php 

if(isset($_GET['planID'])) {
    $planID = $_GET['planID'];

    $query6 = "DELETE FROM dietplan WHERE PlanID='$planID'";

    $result6 = mysqli_query($connection, $query6);

    if($result6) {
        echo "Data deleted successfully.";
        header('Location: admin-dashboard.php');

    } else {
        echo "Error: " . $query6 . "<br>" . mysqli_error($connection);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="http://localhost/iwt/src/images/favicOn.png" >
    <link rel="stylesheet" href="http://localhost/iwt/src/styles/styles.css" type="text/css">
    <link rel="stylesheet" href="http://localhost/iwt/src/styles/indexstyle.css" type="text/css"> 
</head>
<body>
    <!-- navigation -->
   <nav>
            <img src="http://localhost/iwt/src/images/logo.png"alt="logo" height="37px">
        <ul>
            <li>
                <a href="#" class="active">Manage Diet Plans</a>
            </li>
            <li>
                <a href="http://localhost/iwt/src/page1.php">Health Checkup Packages</a>
            </li>
            <li><a href="http://localhost/iwt/src/page2.php">Manage Accounts</a>
               </li>
            <li><a href="http://localhost/iwt/src/page3.php">Health Checkup Orders</a>
               </li>
        </ul>
        </nav>
        <!-- body content -->
        <div class="container">
            <div class="top">
                <h1>Manage Diet Plans | AYUBO</h1>
                <form action="/search" methord="get">
                <label for="search-input"></label>
                    <input type="text" name="-search-input" id="search-input" placeholder="Search">
                </form> 
            </div>
            <div class="content">
            <?php     
            $query3 = "SELECT * FROM dietplan";
            $result3 = mysqli_query($connection, $query3); 

            if($result3) { ?>
            
            <table>
            <tr> <th>Plan ID</th> <th>Height</th> <th>Weight</th> <th>Age</th> <th>Gender</th> <th>User ID</th> <th> </th> </tr>

            <?php while ($record3 = mysqli_fetch_assoc($result3)) { ?>
                <tr> 
                    <td> <?php echo $record3['PlanID'] ?> </td> 
                    <td> <?php echo $record3['Height'] ?> </td> 
                    <td> <?php echo $record3['Weight'] ?> </td> 
                    <td> <?php echo $record3['Age'] ?> </td> 
                    <td> <?php echo $record3['Gender'] ?> </td>
                    <td> <?php echo $record3['UserID'] ?> </td>
                    <td> <button onclick="reportDelete()"> <a href="http://localhost/iwt/src/admin-dashboard.php?planID=<?php echo $record3['PlanID'] ?>">Delete</a> </button> </td>
                </tr>
            <?php } ?> 
            </table>
            <?php } ?>
                </div>
            </div>
        </div>
       
    
        </body>
</html>
<?php mysqli_close($connection); ?>