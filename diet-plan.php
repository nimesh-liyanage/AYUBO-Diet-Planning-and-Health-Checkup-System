<?php
    include('includes\connection.php');

    if(isset($_POST['submit'])) {
        $userID = $_POST['user-Id'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $currentDate = date("Y-m-d");

        $sql = "INSERT INTO DietPlan (Height, Weight, Age, Gender, GeneratedDate, UserID)
                VALUES ('$height', '$weight', '$age', '$gender', '$currentDate', '$userID')";
        $result = mysqli_query($connection, $sql);

        if($result) {

            $Mheight = $height / 100; // Convert Height cm to m.

            // Calculate BMI
            $bmi = $weight / ($Mheight * $Mheight);

            // Output the calculated BMI
            echo "Your BMI is: " . number_format($bmi, 2);

            // Interpret the BMI number
            if ($bmi < 18.2) {
                header('Location: generated-diet-plan.php?bmi=underweight');
                exit();
            }elseif ($bmi >= 18.2 && $bmi < 19.1) {
                header('Location: generated-diet-plan.php?bmi=low');
                exit();
            } elseif ($bmi >= 19.1 && $bmi <= 27) {
                header('Location: generated-diet-plan.php?bmi=normal');
                exit();
            } elseif ($bmi > 27 && $bmi <= 34.5) {
                header('Location: generated-diet-plan.php?bmi=high');
                exit();
            } else {
                header('Location: generated-diet-plan.php?bmi=obesity');
                exit();
            }

        } else {
            echo '<script>alert("Error")</script>';
            header("Location: diet-plan-page.html");
        }
    }
?>
<?php mysqli_close($connection); ?>