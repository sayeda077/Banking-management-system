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

$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
$join_date = mysqli_real_escape_string($conn, $_POST['join_date']);

$sql = "INSERT INTO CustomerDetails (first_name,last_name,address,phone_number,email,date_of_birth,join_date) VALUES ('$first_name','$last_name','$address','$phone_number','$email','$date_of_birth','$join_date')";

if($conn->query($sql) === TRUE){
 echo "Record Added Sucessfully";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>