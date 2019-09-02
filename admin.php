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

$query="SELECT * FROM admin WHERE username='$user' and password='$pass'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1)
{
  session_start();
  $_SESSION['admin']='true';
  header('location:show.php');
}else
{ $error= "wrong username or password"; }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color: lightblue">

<h2>Admin Login </h2>
<center>
<form action="admin.php" method="POST">
  <div class="imgcontainer">
    <img src="login.jpg" alt="Avatar" class="avatar">
  </div>
<br>
  <div class="container">
    <label for="uname"><b  style="margin-right:220px">Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="username" style="width: 300px">
<br><br>
    <label for="psw"><b style="margin-right: 220px">Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" style="width: 300px"><br>
    <span style="color: red;margin-left:100px;"><?php if(isset($error)){echo $error; }?></span>
        <br>
    <input type="submit" value="login" class="registerbtn">
   
  </div>

</form>
</center>
</body>
</html>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.registerbtn {
background-color: #4CAF50;
color: white;
padding: 10px 15px;
font-family: bold;
font-size: 25px;
font-weight: bold;
margin: 8px 0;
border: none;
cursor: pointer;
width:300px;
opacity: 0.9;
}

.imgcontainer {
  text-align: center;
  margin:0;
}

img.avatar {
  width: 10%;
  border-radius: 70%;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}
a:hover{
  background-color: skyblue;
}
</style>
