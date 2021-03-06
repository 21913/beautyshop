
<!DOCTYPE html>
<html>
<head>
<title>Insert Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>
    <?php include 'NavBar.php' ?>
    <div class="container">
        
        <h1>Insert Product</h1>

        <form action="InsertProduct.php" class="needs-validation" novalidate method="POST">

            <div class="mb-3">
                <label for="product" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="product" name="product" aria-describedby="productHelp" value="<?php if(isset($product)){ echo $product;}  ?>" >
               
                <span class="text-danger">
                    <?= isset($error['product']) ? $error['product'] : ''?> 
                </span>
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" value="<?= (isset($brand)) ? $brand : NULL ?>" aria-describedby="brandHelp">
                <span class="text-danger"><?= isset($error['brand']) ? $error['brand'] : '' ?> </span>
           </div>
            <div class="mb-3">
                <label for="colour" class="form-label">Colour</label>
                <input type="text" class="form-control" id="colour" name="colour" value="<?= (isset($colour))? $colour : NULL ?>" aria-describedby="colourHelp">
                <span class="text-danger"><?= isset($error['colour']) ? $error['colour'] : '' ?> </span>
           </div>
            <div class="mb-3">
                <label for="size" class="form-label">Size</label>
                <input type="text" class="form-control" id="size" name="size" value="<?= (isset($size))? $size : NULL ?>" aria-describedby="sizeHelp">
                <span class="text-danger"><?= isset($error['size']) ? $error['size'] : '' ?> </span>
           </div>
           <div class="mb-3">
                <label for="description" class="form-description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="<?= (isset($description))? $description : NULL ?>" aria-describedby="descriptionHelp">
                <span class="text-danger"><?= isset($error['description']) ? $error['description'] : '' ?> </span>
           </div>
           <div class="mb-3">
                <label for="price" class="form-description">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="<?= (isset($price))? $price : NULL ?>" aria-describedby="priceHelp">
                <span class="text-danger"><?= isset($error['price']) ? $error['price'] : '' ?> </span>
           </div>
           <div class="mb-3">
                <label for="image" class="form-description">Pictures</label>
                <input type="file" class="form-control" id="image" name="image" value="<?= (isset($image))? $description : NULL ?>" aria-describedby="imageHelp">
                <span class="text-danger"><?= isset($error['image']) ? $error['image'] : '' ?> </span>
           </div>
                  
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>

    </div>

    

   
</body>
</html>