<?php 
include 'library/DBConnection.php';
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Products Table</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>

<body>
    <?php include 'NavBar.php' ?>
    <div class="container">
    <h1>Beauty Store </h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Size</th>
                    <th scope="col">Colour</th>
                    <th scope="col">Price</th>
                    <th scope="col"><a class="btn btn-success" href="NewProduct.php" role="new">New</a></th>
                <tr>
            </thead>
            <tbody>
            <?php 
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        echo "<tr>";
                        echo "<th scope='row'>".$row['id']."</th>";
                        echo "<td>".$row['product']."</td>";
                        echo "<td>".$row['size']."</td>";
                        echo "<td>".$row['colour']."</td>";
                        echo "<td>".$row['price']."</td>";
                        echo "<td><a class='btn btn-primary' href='UpdateProduct.php?id=".$row['id']."' role='update'>Update</a></td>";
                        echo "<td><a class='btn btn-danger' href='DeleteProduct.php?id=".$row['id']."' role='delete'>Delete</a></td>";
                        echo "</tr>";
                    } 
                }
            ?>
            </tbody>
        </table>
    </div>

</body>
</html>