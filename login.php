<?php
if($_POST)
{
$servername = "localhost";
$username = "root";
$password = "";
$db="project";
$error="";
$user=$_POST['username'];
$pass=$_POST['password'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

$query="SELECT * FROM register WHERE name='$user' and pass='$pass'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1)
{
  // session_start();
  // $_SESSION['register']='true';
  header('location:Booking.php');
}else
{ $error= "wrong username or password"; }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-image:url(kl.jpeg);background-repeat:no-repeat;background-size:cover;margin:0px;">
<div>
<a href="login.php">Login</a>
<a href="register.php">Sign up</a>
<a href="Contact.php">Contact us</a>
<a href="aboutus.php">About us</a>
<a href="home.php">Home</a>
<span><i style="font-size:30px;color:white">Sunway Airlines</i></span>
</div>
<form method="POST">
<div class="container">
<hr>
<table>
<tr>
<td> <label for="uname"><b>Username</b></label></td>
<td> <input type="text" placeholder="Enter username" name="username" ></td>
</tr>

<br>
<tr>
<td><label for="psw"><b>Password</b></label></td>
<td><input type="password" placeholder="Enter Password" name="password" ></td>
</tr>
</table><span style="color: red"><?php if(isset($error)){echo $error; }?></span>
<hr>

<button type="submit"name="login" class="registerbtn" >Login</button>
</div>
</form>

</body>
</html>
<style>
body{font-family: Arial, Helvetica, sans-serif;
}

* {
box-sizing: border-box;
}

/* Add padding to containers */
.container {
	height: 575px;
padding: 16px;
margin-top: 16px;
background-color: lightblue;
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
margin-left: 80px;
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
color: white;
font-size: 25px;
padding: 12px;
float: right;
text-decoration: none;
margin-right: 50px;
}
a:hover {
background-color: skyblue;
}
</style>