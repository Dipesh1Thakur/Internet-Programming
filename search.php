<!DOCTYPE html>
<html>
<head>
<title>Search</title>
</head>

<style type="text/css">
body{
margin:0px;
background-image: url(kl.jpeg);
background-repeat: no-repeat;
background-size: 100%;
}
ul {
  list-style-type: none;
  margin: 0;
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
li i{
font-size: 30px;
color:white;
padding-top: 30px;
}

.container{
height: 450px;
width: 900px;
background-color: lightblue;
border-radius: 5px;
margin-top:10px;
}
.dt{float: left;text-align: left;}
</style>

<body>
<div>
<ul>
	<li><a href="home.php" style="float:right;">Log out</a></li>
	<li><a href="show.php" style="float:right;">Show</a></li>
	<li><a href="#" class="dt"><i>DT Airlines</i></a></li>
</ul>

 </div>
	
	<center>

		<div class="container">

<form method="POST" action="search.php">
	<h2 style="margin-top: 20px">Passenger's Details</h2>
	<input type="text" name="key" style="height: 23px; border-radius: 5px;border:2px solid gray;width: 200px">
	<input type="submit" value="Search" name="search" style="border:2px solid gray;border-radius: 5px; width: 80px;height: 30px;font-weight: bold;">
	
	<input type="submit" value="Show data" name="search" style="border:2px solid gray;border-radius: 5px; width: 100px;height: 30px;font-weight: bold;">

<br><br>
<table border="2px"style="border-collapse: collapse;" cellpadding="20" >

<?php
include "dbconnect.php";

$conn=mysqli_connect($servername,$username,$password,$dbname);


if(isset($_POST['search'])){
	searching();
}

function searching(){
global $conn;

$q_string = $_POST['key'];
// echo $q_string;

	$sql="SELECT * FROM book where concat(id,leav,going,depart,contact,passenger) like '%$q_string%'";
	$query=mysqli_query($conn,$sql);
	echo "<thead style='background-color: black;color: white;height: 30px;width:90px'>";
				echo "<th>ID</th>";
				echo "<th>Leaving</th>";
				echo "<th>Going</th>";
				echo "<th>Depart</th>";
				echo "<th>Contact</th>";
				echo "<th>Passenger</th>";
				echo "<th>Download</th>";
				echo "</thead>";
	if(mysqli_num_rows($query)>0)
		{
			while ($rows=mysqli_fetch_assoc($query)) {
				echo '<tr>';
				echo '<td>'.$rows['id'].'</td>';
				echo '<td>'.$rows['leav'].'</td>';
				echo '<td>'.$rows['going'].'</td>';
				echo '<td>'.$rows['depart'].'</td>';
				echo '<td>'.$rows['contact'].'</td>';
				echo '<td>'.$rows['passenger'].'</td>';
				?>
				<td><a href="download.php?id=<?php echo $rows['id']; ?>&leaving=<?php echo $rows['leav']; ?>&going=<?php echo $rows['going']; ?>&depart=<?php echo $rows['depart']; ?>&contact=<?php echo $rows['contact']; ?>&passenger=<?php echo $rows['passenger']; ?>">Downlaod</a></td>
				
				<?php
				echo '</tr>';
			}
		}
}
?>



</table>
</form>
</div>

</center>

</body>
</html>