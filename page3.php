<?php
    include('includes\connection.php');
?>

<?php 

if(isset($_GET['orderID'])) {
    $orderID = $_GET['orderID'];

    $query6 = "DELETE FROM healthcheckorder WHERE OrderID='$orderID'";

    $result6 = mysqli_query($connection, $query6);

    if($result6) {
        echo "Data deleted successfully.";
        header('Location: page3.php');

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
    <title>Admin Dashboard | AYUBO</title>
    <link rel="icon" href="../assets/favicOn.png" >
    <link rel="stylesheet" href="http://localhost/iwt/src/styles/styles.css" type="text/css"> 
    <link rel="stylesheet" href="http://localhost/iwt/src/styles/page3.css" type="text/css"> 
</head>
<body>
    <!-- navigation -->
   <nav>
            <img src="http://localhost/iwt/src/images/logo.png"alt="logo" height="37px">
        <ul>
            <li>
                <a href="http://localhost/iwt/src/admin-dashboard.php" >Manage Diet Plans</a>
            </li>
            <li>
                <a href="http://localhost/iwt/src/page1.php" >Health Checkup Packages</a>
            </li>
            <li><a href="http://localhost/iwt/src/page2.php" >Manage Accounts</a>
               </li>
               <li> <a href="#" class="active">Health Checkup Orders</a>
            </li>
        </ul>
        </nav>
        <!-- body content -->
        <div class="container">
            <div class="top">
                <h1>Manage Health Checkup Orders</h1>
                <form action="/search" methord="get">
                <label for="search-input"></label>
                    <input type="text" name="-search-input" id="search-input" placeholder="Search">
                </form> 
            </div>
            <div class="content1">
            <?php     
            $query3 = "SELECT * FROM healthcheckorder";
            $result3 = mysqli_query($connection, $query3); 

            if($result3) { ?>

            <table>
            <tr> <th>Order ID</th> <th>Order Date</th> <th>PreferredDateTime</th> <th>User ID</th> <th>Package ID</th> <th>Payment ID</th> <th> </th> </tr>

            <?php while ($record3 = mysqli_fetch_assoc($result3)) { ?>
                <tr> 
                    <td> <?php echo $record3['OrderID'] ?> </td> 
                    <td> <?php echo $record3['OrderDate'] ?> </td> 
                    <td> <?php echo $record3['PreferredDateTime'] ?> </td> 
                    <td> <?php echo $record3['UserID'] ?> </td> 
                    <td> <?php echo $record3['PackageID'] ?> </td> 
                    <td> <?php echo $record3['PaymentID'] ?> </td> 
                    <td> <button onclick="reportDelete()"> <a href="http://localhost/iwt/src/page3.php?orderID=<?php echo $record3['OrderID'] ?>">Delete</a> </button> </td>
                </tr>
            <?php } ?> 
            </table>
            <?php } ?>
                </div>
        </div>
       
    
        </body>
</html>
<?php mysqli_close($connection); ?>