<?php

include 'connection.php';

$name = $_POST['name'];
$price = $_POST['price'];
$imgname = $_POST['imgname'];


$sql = "INSERT INTO Products ( ProductName, ProductPrice, ProductImageName) VALUES ( '$name', '$price', '$imgname')";



if(mysqli_query($connection, $sql)){
    echo "Record inserted successfully.";
    header("Location: {$_SERVER['HTTP_REFERER']}");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}

?>