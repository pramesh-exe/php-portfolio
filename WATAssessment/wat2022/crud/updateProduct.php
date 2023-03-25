<?php

include "connection.php";


$id = $_POST['hideProductID'];
$name = $_POST['name'];
$price = $_POST['price'];
$imgname = $_POST['imgname'];


$query = "UPDATE Products SET ProductName='$name', ProductPrice='$price', ProductImageName='$imgname' WHERE ProductID='$id'";
 
if(mysqli_query($connection, $query)){
    echo "Record inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
}


header( 'Location: crud.php' ) ;

?>

