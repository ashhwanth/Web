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

//echo "<script>alert('"Welcome".$_SESSION['username'];');</script>";
?>
<html>
<head><title>home</title></head>
<body>
<br><br><br><br>
<script>
alert('<?php echo "Welcome".$_SESSION['username']; ?>');</script>

<form method="post" action="logout.php">
<input type="submit" name="logoutbtn" value="LOGOUT" >
</form>


</body>
</html>
