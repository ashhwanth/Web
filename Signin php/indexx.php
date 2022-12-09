<?php
$host_name="localhost";
$user_name="root";
$pas="";
$db_name="login";
$conn=mysqli_connect($host_name,$user_name,$pas,$db_name);
if(!$conn){
die("Connection failed".mysqli_connect_error());
}
else
{
 echo "Connected";
}
session_start();



if(isset($_POST['loginbtn']))
{
$username= $_POST['uname'];  
$password= $_POST['password'];  

$query="SELECT * FROM user WHERE username='$username' and passs='$password'";
$result=mysqli_query($conn,$query);

if($result->num_rows>0)
{
//$row=mysqli_fetch_assoc($result);
//$_SESSION['username']=$row['username'];
	header("Location:http://localhost/homeee.php");
}
else{
echo "<script>alert('Invalid Login Credentials');</script>";
}
}

?>

<html>
<head><title>Login</title></head>
<body bgcolor="cyan">
<br><br>
<center>
<h1>LOGIN</h1>
<form method="post" action="indexx.php">
<input type="text" name="uname"><br>
<input type="password" name="password"><br>
<input type="submit" name="loginbtn" value="Login">
</form>
</center>
</body>
</html>
