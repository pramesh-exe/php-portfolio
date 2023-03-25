<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <div class="container">
        <form action="insertProduct.php" method="POST">
            <fieldset style="width: fit-content;">
                <legend>Enter New Product Details</legend>
                <label>Product name:</label><br>
                <input type="text" id="name" name="name"><br><br>
                <label>Price:</label><br>
                <input type="text" id="price" name="price"><br><br>
                <label>Image Filename:</label><br>
                <input type="text" id="imgname" name="imgname"><br><br>
                <input type="submit" value="Submit">
                <input type="reset" value="Clear">
            </fieldset>
        </form>
        <?php
            include "displayProducts.php";
        ?>
    </div>
    <br/>
<a href="../watIndex.html">Go back to Portfolio</a>
</body>

</html>