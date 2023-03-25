<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<h1>Processing Input from HTML Forms</h1>
<h2>Login Form using GET</h2>
<form method="post" action="">
<fieldset>
		<legend>
			Login
		</legend>
		<label for="email">Email: </label>
        <input type="text" name="txtEmail" value="<?php
            if(isset($_POST['txtEmail'])){
                echo $_POST['txtEmail']; 
            }
            ?>" /><br />
        <label for="passwd">Password: </label>
		<input type="password" name="txtPass" /><br />
		<input type="submit" value="Submit" name="loginSubmit"  />
		<input type="reset" value="Clear" />
	</fieldset>
</form>
<?php
if(isset($_POST['loginSubmit'])){
    $email=$_POST['txtEmail'];
    $pass=$_POST['txtPass'];
	if (!empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email: $email Password: $pass";
          } else {
            echo("$email is not a valid email address");
          }
    }
    else{
        echo "Email must not be empty";
    }
    
}
?>

<form method="post" action="">
	<fieldset>
		<legend>Comments</legend>
		<label for="">Email: </label>
		<input type="text" name="cemail" value="<?php
            if(isset($_POST['cemail'])){
                echo $_POST['cemail']; 
            }
            ?>" /><br />
		<textarea rows="4" cols="50" name="ctxt" value=><?php
            if(isset($_POST['ctxt'])){
                echo $_POST['ctxt']; 
            }
        ?></textarea><br />
		<label for="">Click to Confirm: </label>
		<input type="checkbox" name="cbox" value="agree"><br />
		<input type="submit" value="Submit" name="csubmit"/>
		<input type="reset" value="Clear" />
	</fieldset>
</form>

<?php
if (isset($_POST['cbox'])){
    $confirm='Agreed<br />';
}else{
    $confirm='Not Agreed<br />';
}
if(isset($_POST['csubmit'])){
	$eemail=$_POST['cemail'];
    $text=$_POST['ctxt'];
    if (!empty($eemail)) {
        if (filter_var($eemail, FILTER_VALIDATE_EMAIL)) {
            echo "Email: $eemail<br>";
            echo "Comments: $text<br>";
            echo "Confirm: $confirm<br>";
          } else {
            echo("$eemail is not a valid email address");
          }
        
    }
    else{
        echo "Email must not be empty";
    }
}    
?>


<h2>Tax Calculator</h2>
<form method="post" action="">
<fieldset>
		<legend>
			Without TAX Calculator
		</legend>
		<label>After Tax Price: </label>
		<input type="text" name="price" value="<?php
            if(isset($_POST['price'])){
                echo $_POST['price']; 
            }
            ?>" /><br />
		<label>Tax Rate: </label>
		<input type="text" name="rate" value="<?php
            if(isset($_POST['rate'])){
                echo $_POST['rate']; 
            }
            ?>" /><br />
		<input type="submit" value="Submit" name="submit"  />
		<input type="reset" value="Clear" />
	</fieldset>
</form>

<?php
if(isset($_POST['submit'])){
    $rate = $_POST['rate'];
    $price = $_POST['price'];
    if (!empty($rate) && !empty($price)) {
        if(preg_match('/^\d+(:?[.]\d{2})$/',$price)){
            if(preg_match('/^[0-9]*$/', $rate)){
                $result = (100*$price)/(100+$rate);
                echo "<h3>Price Before Tax = &pound$result </h3>";
            }
            else{
                echo "Please enter a whole number for tax rate";
            }
        }
        else {
            echo "Please enter the price in the format 9.99";
        }
    }
    else {
        echo "All Fields Required";
    }
}
?>







<h1>Passing Data Appended to an URL</h1>
	<h2>Pick a category</h2>
	<a href="forms.php?cat=Films">Films</a>
	<a href=" forms.php?cat=Books">Books</a>
	<a href=" forms.php?cat=Music">Music</a>
    
<?php 
    if(isset($_GET['cat'])){
    echo "<h3>The category is ".$_GET['cat']."</h3>";
    }
?>
<br/>
<br/>
<a href="../watIndex.html">Go back to Portfolio</a>
