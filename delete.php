<!DOCTYPE html>
<html>
<head>
	<title>delete form </title>
</head>
<body>

<?php 

include "dbconnect.php";

$id=$_GET['id'];

$sql="DELETE FROM book WHERE id='$id'";
$query=mysqli_query($conn,$sql);

if($query)
{
	header("location:show.php");
}

?>

</body>
</html>