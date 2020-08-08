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


$branch_name = mysqli_real_escape_string($conn, $_POST['branch_name']);
$branch_address = mysqli_real_escape_string($conn, $_POST['branch_address']);
$branch_PhoneNumber1 = mysqli_real_escape_string($conn, $_POST['branch_PhoneNumber1']);
$branch_PhoneNumber2 = mysqli_real_escape_string($conn, $_POST['branch_PhoneNumber2']);


$sql = "INSERT INTO branch (branch_name,branch_address,branch_PhoneNumber1,branch_PhoneNumber2) VALUES ('$branch_name','$branch_address','$branch_PhoneNumber1','$branch_PhoneNumber2')";

if($conn->query($sql) === TRUE){
 echo "Record Added Sucessfully";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>