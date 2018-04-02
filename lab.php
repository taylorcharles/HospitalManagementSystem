<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$testID=$_POST['testID'];
$test=$_POST['test'];
$fee=$_POST['fee'];
$cost=$_POST['cost'];
$blood=$_POST['blood'];
$id=$_POST['id'];


mysql_select_db('hms');
$str="insert into lab values('$testID','$test','$fee','$cost','$blood','$id')";
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>Lab Test Created added !!<br>';
 }	
	 
echo "YOUR TestID IS: $testID <br><br> ".
           "  ";
     mysql_close($conn);
?>
<html>
<body style="background-image:url(background4.jpg)">
<br>
<a href="home.html"><b>Click here to return to the home page</b></a>
</body></html>
