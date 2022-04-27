<?php
include 'library/DBConnection.php';


$sql = "UPDATE products  
        SET product=?, 
            brand=?, 
            colour=?, 
            size=?, 
            description=?, 
            price=?,
            image=?            
        WHERE id=?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssssdsi", $product, 
$brand, $colour, $size,  
$description, $price, $image, $id);

$id = $_POST["id"];
$product = $_POST["product"];
$brand = $_POST["brand"];
$colour = $_POST["colour"];
$size = $_POST["size"];
$description = $_POST["description"];
$price = $_POST["price"];
$image = $_POST["image"];

// Send to database
$stmt->execute();

$conn->close();

header("Location: index.php");


?>