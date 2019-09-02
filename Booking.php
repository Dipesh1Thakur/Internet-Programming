<?php
// $servername="localhost";
// $username="root";
// $password="";
// $dbname="project";
// $conn=mysqli_connect($servername,$username,$password,$dbname);
include 'dbconnect.php';
if(isset($_POST['book']))
{
$leave=$_POST['leave'];
$going=$_POST['going'];
$depart=$_POST['depart'];
$contact=$_POST['contact'];
$seat=$_POST['seat'];
$pass=$_POST['PN'];
$submit=$_POST['book'];
$error="";
$sql="INSERT INTO book(leav,going,depart,contact,passenger,seatnumber)VALUES('$leave','$going','$depart','$contact',$pass,'$seat')";
$query=mysqli_query($conn,$sql);
// echo $sql;

if($query)
{
$error= "<h1>Booking successful</h1>";
}
else{
$error= "Please fill all fields";
}
}
?>

<html>
<head>
<title>Booking page</title>
</head>
<body style="background-image: url(kl.jpeg);background-repeat: no-repeat;background-size:cover;">

<div>
<a href="login.php">Login</a>
<a href="register.php">Sign up</a>
<a href="Contact.php">Contact us</a>
<a href="aboutus.php">About us</a>
<a href="home.php">Home</a>
<span><i>Sunway Airlines</i></span>
</div>
<div class="container">
<section>
<center>

<form action="Booking.php" method="POST">
<h3 style="margin-left: 30px;padding-top:0px;">Flight Booking</h3><hr>
 <table>
<tr>
<td> <label for="uname"><b>Leaving From</b></label></td>
<td> <input type="text"  name="leave" ></td>
</tr>
<tr>
<td> <label for="email"><b>Going To</b></label></td>
<td> <input type="text"  name="going" ></td>
</tr>
<tr>
<td><label for="psw"><b>Depart Date</b></label></td>
<td><input type="text"  name="depart" ></td>
</tr>
<tr>  
<td> <label for="psw-repeat"><b>Contact Number</b></label></td>
<td> <input type="text"  name="contact" ></td>
</tr>
<tr>
<td><label for="psw"><b>Seat Number</b></label></td>
<td><input type="text"  name="seat" ></td>
</tr>
<tr>
<td><label for="psw"><b>Passenger's Number</b></label></td>
<td><input type="text"  name="PN" ></td>
</tr>
</table>
<span style="color: red;font-size: 15px;margin-left:200px"><?php if(isset($error)){echo $error;} ?></span>
<br><hr>
<button type="submit"name="book" class="registerbtn" >Register</button>
</form>
</center>
</section>

<aside>
<img src="c.jpg" style="height:600px; border-radius: 10px;margin-top: 0px;width:740px;">
</aside>

<section class="sec2">
<h1 style="float: right;margin-right: 20px;color:white;">CHEAP FLIGHT <br>AROUND THE WORLD	</h1>

<i style="height: 50px;margin-top: 5px;color:black;font-size: 30px;color: white">Sunway AirLines</i>
<h1 style="color: red;margin-left: 400px;font-size: 30px;margin-top: 0px;">Book Your Flight Now</h1>
</section>

</div>
</body>
<style type="text/css">
	label{
		text-align: left;
	}
body{margin: 0;}	
section{
width:45%;
height: 600px;
float: left;
border-radius: 5px;
background-color:lightblue;
}
span{
font-size: 30px;
color:white;
padding-top: 30px;
}
a{
color: white;
font-size: 25px;
padding: 12px;
float: right;
text-decoration: none;
margin-right: 50px;
}
a:hover{
  background-color:skyblue;
}

label{
font-size: 20px;
}
.container{
height: auto;
width: auto;
background-color: white;
border-radius: 10px;
margin-top: 30px;
}
.sec2{
width:1350px;
margin: 0px;
height: 400px;
background-image: url(klk.jpeg); 
background-size:100%;
background-repeat: no-repeat;
border-radius: 5px;
}

body{font-family: Arial, Helvetica, sans-serif;
background-color: black;
}
hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}

* {
box-sizing: border-box;
}
input[type=text], input[type=password] {
width: 120%;
padding: 10px;
margin: 5px 0 10px 0;
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
padding: 10px 20px;
font-family: bold;
font-size: 25px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 29%;
opacity: 0.9;
margin-left: 240px;
}

.registerbtn:hover {
opacity: 1;
}


</style>