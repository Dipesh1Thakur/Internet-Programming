<?php
include "dbconnect.php";

if(isset($_POST['login']))
{
$name=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];

if($pass==$repass)
{
$sql ="INSERT INTO register (name,email,pass) VALUES('$name','$email','$pass')";
$query=mysqli_query($conn,$sql);
}

$error="";
if(trim($_POST['pass'])=='' || trim($_POST['repass'])=='')
{
$error.="All fields are required !!! ";
}
else if($_POST['pass'] != $_POST['repass'])
{
$error.="Passwords do not match ! ";
}
if(empty($name))
{
$error.= "name is empty ! ";
}
if (empty($email))
{
$error.="email is empty ";
}
if (empty($pass))
{
$error.="password is empty ! ";
}
if (empty($repass))
{
$error.="password is empty ! ";
}
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
<form action="register.php" method="POST">
<div class="container">
<h1>Register</h1>
<p>Please fill in this form to create an account.</p>
<hr>
<table>
<tr>
<td> <label for="uname"><b>Username</b></label></td>
<td> <input type="text" placeholder="Enter username" name="uname" ></td>
</tr>
<tr>
<td> <label for="email"><b>Email</b></label></td>
<td> <input type="text" placeholder="Enter Email" name="email" ></td>
</tr>
<tr>
<td><label for="psw"><b>Password</b></label></td>
<td><input type="password" placeholder="Enter Password" name="pass" ></td>
</tr>
<tr>  
<td> <label for="psw-repeat"><b>Repeat Password</b></label></td>
<td> <input type="password" placeholder="Repeat Password" name="repass" ></td>
</tr>
</table><span style="color: red"><?php if(isset($error)){echo $error; }?></span>
<hr>
<button type="submit"name="login" class="registerbtn" >Register</button>
</div>
</form>
</body>
</html>
<style>
body{font-family: Arial, Helvetica, sans-serif;
background-color: black;
}

* {
box-sizing: border-box;
}

/* Add padding to containers */
.container {
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
margin-left: 140px;
}

.registerbtn:hover {
opacity: 1;
}

/* Add a blue text color to links */
a {
color: dodgerblue;
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