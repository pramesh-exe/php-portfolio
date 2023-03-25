<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Order Form</h1>
    Please fill out this form to place your order
    <br><br>
    <form action="" method="post">
        <fieldset>
            <legend>Enter your login details</legend>
            <label for="">Name: </label>
            <input type="text" name="name" value="<?php
            if(isset($_POST['name'])){
                echo $_POST['name']; 
            }
            ?>">
            <label for="">Email: </label>
            <input type="text" name="email" value="<?php
            if(isset($_POST['email'])){
                echo $_POST['email']; 
            }
            ?>">
        </fieldset>
        <fieldset>
            <legend>Pizza Selection</legend>
            <label for="">Size: </label>
            <input type = "radio" name = "size" value = "Small" checked
            <?php if (isset($_POST['size']) && $_POST['size'] == 'Small') { echo 'checked'; } ?>>small
            <input type = "radio" name = "size" value = "Medium" 
            <?php if (isset($_POST['size']) && $_POST['size'] == 'Medium') { echo 'checked'; } ?>>medium
            <input type = "radio" name = "size" value = "Large" 
            <?php if (isset($_POST['size']) && $_POST['size'] == 'Large') { echo 'checked'; } ?>>large<br /><br />
            <label for = "">Topping: </label>
            <select name="topping" id="">
                <option value="select"<?php if (isset($_POST['submit'])) {if ($_POST['topping'] == 'select') {echo ' selected';}}?>>Please Select</option> 
                <option value="bacon"<?php if (isset($_POST['submit'])) {if ($_POST['topping'] == 'bacon') {echo ' selected';}}?>>Bacon</option>
                <option value="pineapple"<?php if (isset($_POST['submit'])) {if ($_POST['topping'] == 'pineapple') {echo ' selected';}}?>>Pineapple</option>
                <option value="chicken"<?php if (isset($_POST['submit'])) {if ($_POST['topping'] == 'chicken') {echo ' selected';}}?>>Chicken</option>
            </select><br><br>
            <label for = "">Extras: </label>
            <input type = "checkbox" name = "extras[]" value = "Parmesan" 
            <?php if (isset($_POST['extras']) && in_array('Parmesan', $_POST['extras'])) { echo 'checked'; } ?>>Parmesan
            <input type = "checkbox" name = "extras[]" value = "Olives"
            <?php if (isset($_POST['extras']) && in_array('Olives', $_POST['extras'])) { echo 'checked'; } ?>>Olives
            <input type = "checkbox" name = "extras[]" value = "Capers" 
            <?php if (isset($_POST['extras']) && in_array('Capers', $_POST['extras'])) { echo 'checked'; } ?>>Capers<br><br>
            <input type = "submit" name = "submit" value = "Submit"  />
            <input type = "reset" name = "reset" value = "Clear" />
        </fieldset>
    </form>
    <?php
    if(isset($_POST['submit'])){
        if(!empty($_POST["name"]) && !empty($_POST["email"])){
            if($_POST["topping"] != 'select'){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $size = $_POST['size'];
                $topping = $_POST['topping'];
                $extras = "";
                $count = 0;
                echo ("<h2>Thank you for your order:</h2>");
                    echo ("Customer ID: $name<br />");
                    echo ("Email: $email<br />");
                    echo ("Your order: " . $size . " " . $topping . "<br />");
                    echo ("Extra Toppings: ");
                    if (isset($_POST["extras"])) {
                        $selected = $_POST['extras'];
                        foreach ($_POST["extras"] as $extras) {
                            echo ($extras . " ");
                        }
                    }else{
                        echo ("None");
                    }
            }else {
                echo ("<br /><br />Please select a topping");
            }
        }else {
            echo ("<br />Please enter username and email.");
        }
    }
    ?>
</body>

</html>