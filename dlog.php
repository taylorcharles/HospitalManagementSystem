<?php

session_start();
?>



<?php
$id=$_POST['id'];
$password=$_POST['password'];
$con=@mysql_connect("localhost","root","") or die(mysql_error());
$db=@mysql_select_db("hms",$con)or die(mysql_error());

$sql="SELECT * FROM doctor_login WHERE id='$id' and password='$password'";

$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count<1)
{
	echo "Wrong ID or Password";}
else
	{
		$_SESSION[user]=$username;
		header("location:home.html");
	}

ob_end_flush();
?>
