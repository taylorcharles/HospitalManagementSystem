<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$name=$_POST['name'];
$Age=$_POST['Age'];
$p_num=$_POST['p_num'];
$gender=$_POST['gender'];
$dept=$_POST['dept'];
$doc=$_POST['doc'];
$pID=$_POST['pID'];

mysql_select_db('hms');
$str="insert into outpatient values('$name','$Age','$p_num','$gender','$dept','$doc','$pID')";
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>Outpatient Attended to !!<br>';
 }	
	 
echo "Outpatient Password Is: $pID <br><br> ".
           "  ";
     mysql_close($conn);
?>
<html>
<body style="background-image:url(background4.jpg)">
<br>
<a href="home.html"><b>Click here to return to the home page</b></a>
</body></html>
