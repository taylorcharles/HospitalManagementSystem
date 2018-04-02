<html>
<h1>VVU PATIENT REPORT</h1>
</html>
<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$d_appointment=$_POST['d_appointment'];
$date=$_POST['date'];
$nhis_code=$_POST['nhis_code'];

mysql_select_db('hms');
$str="insert into appointment values('$firstname','$lastname','$email','$contact','$d_appointment','$date','$nhis_code')";
$res=@mysql_query($str)or die(mysql_error());
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$id = $_POST['id']; 
$sql="SELECT * FROM patients WHERE id='$id'";
$retval = mysql_query( $sql,$conn );

if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
	echo "<big><b>DOCTOR APPOINTMENT WITH PATIENT : </b></big><br><br><br>";
	echo "<b>PATIENT DETAILS:</br></br>";
    echo "PATIENT ID : {$row['id']}  <br><br> ".
         "NAME 		 : {$row['name']} <br><br> ".
         "AGE		 : {$row['age']} <br><br> ".
         "GENDER	 : {$row['gender']} <br><br> ".
		 "PATIENT TYPE	 : {$row['p_type']} <br><br> ".
         "______________________________<br>";
} 
echo 
	 "EMAIL : $email<br><br>".
     "DOCTOR APPOINTMENT : $d_appointment <br><br>".
	 "CONTACT : $contact <br><br>".	
	 "DATE OF APPOINTMENT : $date <br><br>".
	 "NHIS CODE : $nhis_code <br><br>".
	  "--------------------------------<br>";	

mysql_close($conn);
?>
<html>
<body style="background-image:url(imges/7.jpg);color:blue;">
<br>
<input type="button" onClick="window.print();" value="Print Appointment"/><br><br>
<a href="index.html"><b>Click here to return to the main page</b></a></body>
</html>
