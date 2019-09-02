<?php
include 'dbconnect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update form</title>
</head>
<body>

<?php

 
// if($submit) {
	$id=$_POST['id'];
	$leave=$_POST['leave'];
	$going=$_POST['going'];
	$depart=$_POST['depart'];
	$contact=$_POST['contact'];
	$pass=$_POST['PN'];
	$submit=$_POST['book'];
// }
$sql="UPDATE book SET leav='$leave',going='$going',depart='$depart',contact='$contact',passenger='$pass' WHERE id='$id' ";

$query=mysqli_query($conn,$sql);

if($query){
	header("location:show.php");
}
else
{
	die("Error ");
}

?>

</body>
</html>