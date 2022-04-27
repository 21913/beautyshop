<?php
//connect to the database
include 'library/DBConnection.php';

//set up the sql string with prepared statements
$sql = "SELECT * FROM products WHERE id=".$_GET['id'];


$result = $conn->query($sql);


if($result->num_rows==0){
    header("Location: index.php");
}

$row=$result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Product</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>

 
<body>

    <!-- Adding navbar to the page -->
    <?php include 'NavBar.php' ?>
    <div class="container">

        <!-- The form to change the data -->        
        <h1>Edit Product</h1> 
        <form action="UpdateProduct.php" method="POST">
            <input type="hidden" value="<?=$_GET['id']?>" name="id">
            <div class="mb-3">
                <label for="product" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="product" name="product" aria-describedby="productHelp" value="<?= $row['product'] ?>">
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" aria-describedby="brandHelp" value="<?= $row['brand']?>">
            </div>
            <div class="mb-3">
                <label for="colour" class="form-label">Colour</label>
                <input type="text" class="form-control" id="colour" name="colour" aria-describedby="colourHelp" value="<?= $row['colour']?>">
            </div>
            <div class="mb-3">
                <label for="size" class="form-label">Size</label>
                <input type="text" class="form-control" id="size" name="size" aria-describedby="sizeHelp" value="<?=$row['size'] ?>">
            </div>
            <div class="mb-3">
                <label for="description" class="form-description">Description</label>
                <input type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp" value="<?= $row['description']?>">
            </div>
            <div class="mb-3">
                <label for="price" class="form-description">Price</label>
                <input type="text" class="form-control" id="price" name="price" aria-describedby="priceHelp" value="<?= $row['price']?>">
            </div>
            <div class="mb-3">
                <label for="image" class="form-description">Picture</label>
                <input type="text" class="form-control" id="image" name="image" aria-describedby="imageHelp" value="<?= $row['image']?>">
            </div>
            
            <!-- Button to submit and update the changes -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>

    

   
</body>
</html>

