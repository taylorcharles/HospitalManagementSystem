<html>
<h1>VVU PATIENT REPORT</h1>
</html>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * from patients';

mysql_select_db('hms');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "PATIENT ID :{$row['id']}  <br> ".
         "NAME 		 : {$row['name']} <br> ".
         "AGE		 : {$row['age']} <br> ".
         "GENDER	 : {$row['gender']} <br> ".
         "OCCUPATION : {$row['occupation']} <br> ".
         "MOBILE	 : {$row['mobile']} <br> ".
         "ADDRESS	 : {$row['address']} <br> ".
		 "PATIENT TYPE	 : {$row['p_type']} <br> ".
         "--------------------------------<br>
		 ---------------------------------<br>
		 ---------------------------------<br>";
		 
} 

mysql_close($conn);
?>
<html>
<body style="background-image:url(imges/7.jpg);color:blue;">
<br>
<input type="button" onClick="window.print();" value="View All Patient Info"/><br><br>
<a href="home.html"><b>HOME</b></a></body>
</html>

