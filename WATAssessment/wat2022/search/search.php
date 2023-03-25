<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
<?php
include_once 'init.php';
if(!isset($_SESSION['user'])){
    header ('location:sessions.php');
}
?> 
<h1>Products</h1>    
<form action="" method="post">
        <label>Brands: </label>
        <select name="brand" id="">
            <option value="all"<?php if (isset($_POST['submit'])) {if ($_POST['brand'] == 'all') {echo ' selected';}}?>>All</option>
            <option value="Apple"<?php if (isset($_POST['submit'])) {if ($_POST['brand'] == 'Apple') {echo ' selected';}}?>>Apple</option>
            <option value="Samsung"<?php if (isset($_POST['submit'])) {if ($_POST['brand'] == 'Samsung') {echo ' selected';}}?>>Samsung</option>
            <option value="Google"<?php if (isset($_POST['submit'])) {if ($_POST['brand'] == 'Google') {echo ' selected';}}?>>Goole</option>
        </select>
        <label>Sort by: </label>
        <select name="sort" id="">
            <option value="name"<?php if (isset($_POST['submit'])) {if ($_POST['sort'] == 'name') {echo ' selected';}}?>>Name</option>
            <option value="price"<?php if (isset($_POST['submit'])) {if ($_POST['sort'] == 'price') {echo ' selected';}}?>>Price</option>
        </select>
        <label>Search: </label>
        <input type="text" name="search" value="<?php if (isset($_POST['search'])) {echo $_POST['search'];}?>" placeholder="Search"/>
        <input type="submit" value="Go" name="submit"/>
    </form>
    <br>
</body>
</html>
<?php
$brand = 'all';
$sort = 'name';
$search = '';
if(isset($_POST['submit'])){
    $search = $_POST['search'];
    $search = strtolower($search);
}
if(isset($_POST['submit'])){
	$brand=$_POST['brand'];
    $sort=$_POST['sort'];
}
if ($brand == 'all' && $sort == 'name') {
     if($search == ''){
        $sql = "SELECT * FROM search ORDER BY name ASC";
     }
     else{
        $sql = "SELECT * FROM search WHERE name LIKE '%$search%' ORDER BY name ASC";
     }
}
else if($brand == 'all' && $sort == 'price'){
    if ($search == '') {
        $sql = "SELECT * FROM search ORDER BY price ASC";
    }
    else{
        $sql = "SELECT * FROM search WHERE name LIKE '%$search%' ORDER BY price ASC";
    }
}
elseif ($brand == 'Apple' && $sort == 'name') {
    if($search == ''){
        $sql = "SELECT * FROM search WHERE category = 'Apple' ORDER BY name ASC";
    }
    else{
        $sql = "SELECT * FROM search WHERE category = 'Apple' AND name LIKE '%$search%' ORDER BY name ASC";
    }
} 
else if($brand == 'Apple' && $sort == 'price'){
    if($search == ''){
        $sql = "SELECT * FROM search WHERE category = 'Apple' ORDER BY price ASC";    }
    else{
        $sql = "SELECT * FROM search WHERE category = 'Apple' AND name LIKE '%$search%' ORDER BY price ASC";
    }
    
}  
elseif ($brand == 'Samsung' && $sort == 'name') {
    if($search == ''){
        $sql = "SELECT * FROM search WHERE category = 'Samsung' ORDER BY name ASC";
    }
    else{
        $sql = "SELECT * FROM search WHERE category = 'Samsung' AND name LIKE '%$search%' ORDER BY name ASC";
    }
} 
else if($brand == 'Samsung' && $sort == 'price'){
    if($search == ''){
        $sql = "SELECT * FROM search WHERE category = 'Samsung' ORDER BY price ASC";
    }
    else{
        $sql = "SELECT * FROM search WHERE category = 'Samsung' AND name LIKE '%$search%' ORDER BY price ASC";
    }
}
elseif ($brand == 'Google' && $sort == 'name') {
    if($search == ''){
        $sql = "SELECT * FROM search WHERE category = 'Google' ORDER BY name ASC";
    }
    else{
        $sql = "SELECT * FROM search WHERE category = 'Google' AND name LIKE '%$search%' ORDER BY name ASC";
    }
} 
else if($brand == 'Google' && $sort == 'price'){
    if($search == ''){
        $sql = "SELECT * FROM search WHERE category = 'Google' ORDER BY price ASC";
    }
    else{
        $sql = "SELECT * FROM search WHERE category = 'Google' AND name LIKE '%$search%' ORDER BY price ASC";
    }
}



$qry = mysqli_query($connection, $sql);

echo '
    <table border=1 cellpadding=10 cellspacing=2 width="800" cellwidth="1000">
    <tr>
        <th>Product</th>
        <th>Name</th>
        <th>Price</th>
        <th>Brand</th>
        <th>Description</th>
    </tr>';
while ($row = mysqli_fetch_assoc($qry)) {
    echo '<tr>
    <td>
        <img src="images/' . $row['image'] . '" height="100" width="100" />
    </td>
    <td>
        ' . $row['name'] . '
    </td>
    <td>
        $' . $row['price'] . '
    </td>
    <td>
        ' . $row['category'] . '
    </td>
    <td>
        ' . $row['detail'] . '
    </td>
</tr>';
}
echo '</table>';
echo '<a href="./logout.php">logout</a>';
?>
<br/>
<a href="../watIndex.html">Go back to Portfolio</a>