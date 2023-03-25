<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
</head>

<body>
    <form method="post" action='./insertRecords.php'>
        <fieldset>
            <legend>Enter Customer Deatils</legend>
            <label>First Name: </label>
            <input type="text" name="fname" value="" /><br /><br />
            <label>Surname: </label>
            <input type="text" name="lname" value="" /><br /><br />
            <label>Email: </label>
            <input type="text" name="email" value="" /><br /><br />
            <label>Password: </label>
            <input type="password" name="pass" value="" /><br /><br />
            <label>Gender: </label>
            <select name="gender" id="">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select><br /><br />
            <label>Age: </label>
            <input type="text" name="age" value="" /><br /><br />
            <input type="submit" value="Submit" name="submit" />
            <input type="reset" value="Clear" />
        </fieldset>
    </form>
    <?php
    include 'selectRecord.php';
    ?>
<br/>
<a href="../watIndex.html">Go back to Portfolio</a>
</body>

</html>