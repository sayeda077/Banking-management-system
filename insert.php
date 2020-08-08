<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "log";

//Creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);

//Checking connection

if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$age = mysqli_real_escape_string($conn, $_POST['age']);

$sql = "INSERT INTO infom (name, lname, age) VALUES ('$name', '$lname', '$age')";

if($conn->query($sql) === TRUE){
 echo "Record Added Sucessfully";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>