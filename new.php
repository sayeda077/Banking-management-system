
<?php 

//echo"<br \>";
//echo"<br \>";

$host="localhost";
$dbuser="root";
$pass="";
$dbname="log";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
	die("connextion failed....!!!!" .mysqli_connect_errno());
}
/*else 
	{
		echo"connected successfully to database ($dbname)";
		echo "<hr />";

	} */

?>
<html>
<head><title>intro page</title></head>
<body> 
	<?php

 if(isset($_POST['submit'])){


	$id=$_POST['customer_ID'];

  $sql="select * from customer_info where customer_ID=$id";
  $res=mysqli_query($conn,$sql);
 if(!$res)
  {
  	die("queri failed");
  }
  if(is_null($res))
  {
  	die("data not found");
  }

  while($row=mysqli_fetch_assoc($res))
  {

  

  	foreach($row as $key=>$value)
  	{
  		echo" {$key}:"."{$value}";
  	      echo "||";
  	
  	}
    echo "<br /><br /><hr />"; 
  
  } 
}

  //mysqli_free_result($res);


	?>
</body>
</html>

<?php

mysqli_close($conn);
?>
