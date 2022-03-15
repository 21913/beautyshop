<?php
//connect to the database
include 'library/DBConnection.php';

//set up the sql string with prepared statements
$sql = "UPDATE products 
        SET product=?, 
            size=?, 
            colour=?, 
            price=?
            WHERE id=?";


$stmt = $conn->prepare($sql);

//the variables are at your own choice, 
//they do not require to be the exact same as the columns in the database
$stmt->bind_param("ssssi", $product, 
$size, $colour, $price, $id);

//set up the variables
$id = $_POST["id"];
$product = $_POST["product"];
$size = $_POST["size"];
$colour = $_POST["colour"];
$price = $_POST["price"];


//execute the statement
$stmt->execute();
//close the connection
$conn->close();
//redirect back to index page
header("Location: index.php");


?>