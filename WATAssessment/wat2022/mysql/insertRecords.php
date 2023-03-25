<?php
    include('./connection.php');
    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];

        $query = "INSERT INTO Customer ( FirstName, LastName, Email, Password, Gender, Age) VALUES ( '$fname', '$lname', '$email', '$pass', '$gender', '$age')";

        $qry=mysqli_query($conn, $query) or die(mysqli_error($conn));
        if($qry)
        {
            echo "Data inserted Successfully.";
        }

    }
?>