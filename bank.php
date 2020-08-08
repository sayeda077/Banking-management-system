<?php

include 'index.php'; 
?>
<?php

$sql = "SELECT * FROM customerdetails";
$result=mysqli_query($con,$sql);
?>
<!doctype html>
<html>
<body>
<h1 align="center">Customer Details</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>customer_ID</th>
<th>first_name</th>
<th>last_name</th>
<th>address</th>
<th>phone_number</th>
<th>email</th>
<th>date_of_birth</th>
</tr>
<?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
 <td><?php echo $row['customer_ID']; ?></td>
 <td><?php echo $row['first_name']; ?></td>
 <td><?php echo $row['last_name']; ?></td>
 <td><?php echo $row['address']; ?></td>
 <td><?php echo $row['phone_number']; ?></td>
 <td><?php echo $row['email']; ?></td>
 <td><?php echo $row['date_of_birth']; ?></td>
 </tr>
 <?php
 }
}
else
{
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>
</table>
</body>
</html>