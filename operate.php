<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$p_type=$_POST['p_type'];
$o_id=$_POST['o_id'];
$name=$_POST['name'];
$o_type=$_POST['o_type'];
$doc=$_POST['doc'];
$o_result=$_POST['o_result'];


mysql_select_db('hms');
$str="insert into operation values('$p_type','$o_id','$name','$o_type','$doc','$o_result')";
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>Operation Saved !!<br>';
 }	
	 
echo "YOUR OperationID IS: $o_id <br><br> ".
           "  ";
     mysql_close($conn);
?>
<html>
<body style="background-image:url(background4.jpg)">
<br>
<a href="home.html"><b>Click here to return to the home page</b></a>
</body></html>
