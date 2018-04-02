<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$username=$_POST['username'];
$password=$_POST['password'];
$id=$_POST['id'];
$con_password=$_POST['con_password'];
$dept=$_POST['dept'];
$spec=$_POST['spec'];
$number=$_POST['number'];
$address=$_POST['address'];
$email=$_POST['email'];

mysql_select_db('hms');
$str="insert into doctor_login values('$username','$password','$id','$con_password','$dept','$spec','$number','$address','$email')";
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>Doctor Registered !!<br>';
 }	
	 
echo "DOCTOR PASSWORD IS: $id <br><br> ".
           "  ";
     mysql_close($conn);
?>
<html>
<body style="background-image:url(background4.jpg)">
<br>
<a href="home.html"><b>Click here to return to the home page</b></a>
</body></html>
