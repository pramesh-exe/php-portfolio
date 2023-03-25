<?php
include 'connection.php';

$sql = "SELECT * FROM Products";

$qry = mysqli_query($connection, $sql);

echo '<h1>Manage Products</h1>
    <table border=1 cellpadding=10 cellspacing=2 width="800" cellwidth="1000">
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>Amend</th>
        <th>Delete</th>
    </tr>';
while ($row = mysqli_fetch_assoc($qry)) {
    echo '<tr>
    <td>
        ' . $row['ProductName'] . '
    </td>
    <td>
        ' . $row['ProductPrice'] . '
    </td>
    <td>
        <img src="images/' . $row['ProductImageName'] . '" height="80" width="100" />
    </td>
    <td>
        <a href="AmendProduct.php?id=' . $row['ProductID'] . '">Amend</a>
    </td>
    <td>
        <a href="DeleteProduct.php?id=' . $row['ProductID'] . '">Delete</a>
    </td>
</tr>';
}
echo '</table>';
