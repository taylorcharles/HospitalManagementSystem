<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$occupation=$_POST['occupation'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$p_type=$_POST['p_type'];

mysql_select_db('hms');
$str="insert into patients values('$id','$name','$age','$gender','$occupation','$mobile','$address','$p_type')";
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>Patient added !!<br>';
 }	
	 
echo "YOUR PATIENT ID IS: $id <br><br> ".
           "  ";
     mysql_close($conn);
?>
<html>
<body style="background-image:url(background4.jpg)">
<br>
<a href="home.html"><b>Click here to return to the home page</b></a>
</body></html>
