<!DOCTYPE html>
<html>
<head>
	<title>Show details</title>
</head>
<body background="kl.jpeg" style="background-size: 100%;margin: 0;">
<div class="navbar">
<ul>
<li><a href="home.php" style="float: right;">Log out</a></li>
<li><a href="search.php" style="float: right;">Search</a></li>
<li><a href="#" style="float: left;"><i>Sunway Airlines</i></a></li>
</ul>
</div>
<center>

<table style="border: 2px solid black; border-collapse: collapse;background-color: lightblue" cellpadding="10" cellspacing="10">
	<thead><th colspan="7"><b>Passenger's Details</b></th></thead>
<thead style="border: 1px solid black">
	<th>ID</th>
	<th> Leaving</th>
	<th>Going</th>
	<th>Depart</th>
	<th>Contact</th>
	<th>Passenger</th>
	<th>Actions</th>
	
</thead>

	
<?php
include 'dbconnect.php';
$sql="SELECT * FROM book";
$query=mysqli_query($conn,$sql);

if(mysqli_num_rows($query)>0){
	while ($rows=mysqli_fetch_assoc($query)){
		$id=$rows['id'];
		echo "<tr>";
		echo "<td>".$rows['id']."</td>";
		echo "<td>".$rows['leav']."</td>";
		echo "<td>".$rows['going']."</td>";
		echo "<td>".$rows['depart']."</td>";
		echo "<td>".$rows['contact']."</td>";
		echo "<td>".$rows['passenger']."</td>";		
	echo "<td><a href='delete.php?id=".$rows['id']."' ><img src='delete.jpg' class='img'></a> <a href='edit.php?id=".$rows['id']."' ><img src='edit.png'class='img'></a></td>";				
	}
}
echo "</tr>";

?>
</table>
</div>
</div>
</center>

</body>
</html>

<style type="text/css">
ul {
  list-style-type: none;
  margin: 0px;
  padding: 0;
  overflow: hidden;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
}
li a:hover {
  background-color: skyblue;
}
td{
	border: 1px solid black;
}
th{
	border: 1px solid black;
	background-color: lightblue;
	color: black;
	width: 100px;
	font-size: 20px;
}
.img{
	height: 40px;
	width: 40px
}
</style>
