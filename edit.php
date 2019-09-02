 <?php
 include "dbconnect.php";
 $id=$_GET['id'];
 
 $sql="SELECT * FROM book WHERE id='$id'";
 $query=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($query);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
<a href="home.php">Log out</a>
<a href="show.php">show</a>

<span><i style="font-size:30px;color:white">Sunway Airlines</i></span>
</div>
<form action="update.php" method="POST">
<div class="container">

<h1>Update Details</h1>

<hr>
<table>
<tr>
<td> <label for="uname"><b>Leaving From</b></label></td>
<td> <input type="text" value="<?php echo $row['leav']; ?>" name="leave" ></td>
</tr>
<tr>
<td> <label for="email"><b>Going To</b></label></td>
<td> <input type="text" value="<?php echo $row['going']; ?>" name="going" ></td>
</tr>
<br>
<tr>
<td><label for="psw"><b>Depart Date</b></label></td>
<td> <input type="text" value="<?php echo $row['depart']; ?>" name="depart" ></td>
</tr>
<br>
<tr>  
<td> <label for="psw-repeat"><b>Contact Number</b></label></td>
<td> <input type="text" value="<?php echo $row['going']; ?>" name="contact" ></td>
</tr>
<tr>
<td><label for="psw"><b>Passenger's Details</b></label></td>
<td> <input type="text" value="<?php echo $row['passenger']; ?>" name="PN" ></td>
</tr>
<tr>

</table>
<hr>

<button type="submit"name="book" class="registerbtn" >Update</button>
</div>

	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
</form>

</body>
</html>
<style>
body{font-family: Arial, Helvetica, sans-serif;
margin: 0px;
background-color: lightblue;
}

* {
box-sizing: border-box;
}

/* Add padding to containers */
.container {
padding: 16px;
margin-top: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
width: 200%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
background-color: #ddd;
outline: none;
}

/* Overwrite default styles of hr */
hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
background-color: #4CAF50;
color: white;
padding: 16px 20px;
font-family: bold;
font-size: 25px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 30%;
opacity: 0.9;
margin-left: 140px;
}
.registerbtn:hover {
opacity: 1;
}

/* Add a blue text color to links */
a {
color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
background-color: #f1f1f1;
text-align: center;
}
a{
color: black;
font-size:20px;
float: right;
padding:10px;
text-decoration: none;
}
a:hover {
background-color: skyblue;
}
</style>