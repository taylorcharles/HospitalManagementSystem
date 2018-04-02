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
$service=$_POST['service'];
$Empcode=$_POST['Empcode'];
$fileUpload=$_POST['fileUpload'];

mysql_select_db('hms');
$str="insert into signup values('$firstname','$lastname','$email','$contact','$service','$Empcode','$fileUpload')";
$res=@mysql_query($str)or die(mysql_error());

if($res>=0)
{
echo'<br><br><b>Saved!!<br>';
 }	
	 
echo "YOUR Employee Code IS: $Empcode <br><br> ".
           "  ";
		   
		   echo "FIRSTNAME : $firstname <br><br>".
	         "LASTNAME : $lastname <br><br>".	
	        "EMAIL : $email<br><br>".
			"CONTACT : $contact <br><br>".
			"POSITION : $service <br><br>".
			"EMPLOYEE ID : $Empcode <br><br>".
		
		
		
	     "--------------------------------<br>";	

     mysql_close($conn);
?>
<html>
<body style="background-image:url(background4.jpg)">
<br>
<table>
            <tr><td>Employee Image</td> <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($fileUpload) .'" />';?></td></tr>
        </table>
 
<a href="home.html"><b>Click here to return to the home page</b></a>
</body></html>
