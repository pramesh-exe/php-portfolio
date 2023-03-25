<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form method="post" action=''>
        <fieldset>
            <legend>Register New User</legend>
            <label>Username: </label>
            <input type="text" name="uname" value="<?php
                                                    if (isset($_POST['uname'])) {
                                                        echo $_POST['uname'];
                                                    }
                                                    ?>" /><br /><br />
            <label>Email: </label>
            <input type="text" name="email" value="<?php
                                                    if (isset($_POST['email'])) {
                                                        echo $_POST['email'];
                                                    }
                                                    ?>" /><br /><br />
            <label>Password: </label>
            <input type="password" name="pass" value="" /><br /><br />
            <label>Age: </label>
            <select name="age" id="">
                <option value="" selected>Age Range</option>
                <option value="child">Lower than 15</option>
                <option value="youth">Between 15 and 24</option>
                <option value="adult">Between 25 and 64</option>
                <option value="senior">65 and Over</option>
            </select><br /><br />
            <input type="checkbox" name="cbox" value="agree">
            <label>I agree the terms and condition. </label><br /><br />
            <input type="submit" value="Register" name="submit" />
        </fieldset>
    </form>
    <?php


    if (isset($_POST['submit'])) {
        $uname = $_POST['uname'];
        $pass = md5($_POST['pass']);
        $email = $_POST['email'];
        $age = $_POST['age'];

        if (isset($_POST['cbox'])) {

            $confirm = TRUE;
        } else {
            $confirm = false;
        }
        if (!empty($uname) && !empty($_POST['pass']) && !empty($email)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if ($age != "") {
                    if (strlen($uname) >= 6) {
                        if (ctype_alpha($uname)) {
                            if (preg_match('/[A-Z]/', $_POST['pass']) && preg_match('/[a-z]/', $_POST['pass']) && preg_match('/\d/', $_POST['pass'])) {
                                if ($confirm) {
    
                                    $sql = "INSERT INTO register (username, password, email, age)VALUES('$uname', '$pass' , '$email', '$age')";
    
                                    require("connection.php");
    
                                    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                    if ($qry) {
                                        echo "Data inserted Successfully.";
                                    }
                                } else {
                                    echo "Please confirm the terms and condition in order to register.";
                                }
                            } else {
                                echo "Password must include at least one uppercase letter, one lowercase letter and a number.";
                            }
                            
                        }else{
                            echo "Username must only contain alphabets";
                        }
                    } else {
                        echo "Username must be atleast 6 characters long.";
                    }
                } else {
                    echo ("Please select age range.");
                }
            } else {
                echo ("$email is not a valid email address.");
            }
        } else {
            echo "Please fill in all the required datas.";
        }
    }

    ?>
<br/>
<a href="../watIndex.html">Go back to Portfolio</a>
</body>

</html>