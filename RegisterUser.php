<?php 

include 'library/DBConnection.php';
if(isset($_SESSION)){
    session_destroy();
}

//THIS PAGE NEEDS SANITIZATION AND VALIDATION
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if ($password === $confirmPassword){
    //encrypt the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
}

$sql = "INSERT INTO user (username, email, password) VALUES (?,?,?)";
$stmt = $conn->prepare($sql);



$stmt->bind_param("sss", $username, $email, $hashedPassword);

//send to database
$stmt->execute();
//check to see if we have an id
if($stmt->insert_id){
    $error['username'] = 'UserName already Exists';
    // we should require once the register php
}

session_start();
$_SESSION['username'] = $username;
$_SESSION['id'] = $stmt->insert_id;
$_SESSION['email'] = $email;
$conn->close();



header("Location: index.php");



?>