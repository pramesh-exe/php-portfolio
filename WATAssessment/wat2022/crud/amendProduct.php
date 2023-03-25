<?php
//Make connection to database
include "connection.php";

//Gather id sent from crud.php page
$id = $_GET['id'];

//Produce query to select the product record for the id provided
$query = "SELECT * FROM Products WHERE ProductID=$id";

//run query and store result
$result = mysqli_query($connection, $query);
if (!$result) {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}

//extract row from result using mysqli_fetch_assoc()and store $row

while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['ProductName'];
    $price = $row['ProductPrice'];
    $image = $row['ProductImageName'];
}


echo '<form action="./updateProduct.php" method="POST">';
echo '<fieldset style="width: fit-content;">';
echo '<legend>Enter Product Details</legend>';
echo '<input type="hidden" name="hideProductID" value=' .$id.'>';
echo '<label for="name">Product name:</label>';
echo '<input type="text" id="name" name="name" value='. $name.'><br><br>';
echo '<label for="price">Price:</label>';
echo '<input type="text" id="price" name="price" value='.$price.'><br><br>';
echo '<label for="imgname">Image Filename:</label>';
echo '<input type="text" id="imgname" name="imgname" value='.$image.'><br><br>';
echo '<input type="submit" value="Submit">  ';
echo '<input type="reset" value="Clear">';
echo '</fieldset>';
echo '</form>';
