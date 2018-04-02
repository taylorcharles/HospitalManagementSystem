<html>
<h1>VVU HOSPITAL</h1>
<h3>DOCTOR-PATIENT APPOINTMNENT REPORT........</h4>
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
$sql = 'SELECT * from appointment';

mysql_select_db('hms');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "FIRSTNAME:{$row['firstname']}  <br> ".
         "LASTNAME		 : {$row['lastname']} <br> ".
         "EMAIL		 : {$row['email']} <br> ".
         "CONTACT	 : {$row['contact']} <br> ".
         "APPOINTMENT SCHEDULE : {$row['d_appointment']} <br> ".
         "NHIS CODE	 : {$row['nhis_code']} <br> ".
         "--------------------------------<br>";
} 

mysql_close($conn);
?>
<html>
<body style="background-image:url(imges/495703506.jpg);color:blue;">
<br>
<input type="button" onClick="window.print();" value="Print Appointment"/><br><br>
<a href="index.html"><b>Click here to return to the main page</b></a></body>
</html>
