<?php
mysql_connect('localhost','root','');
mysql_select_db('hms');
?>		
<html>
<head>
<title>MEDICALDIAGNOSTIC-LAB</title>
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body style="background:url('imges/Hospital_Image.png'); background-size:cover;"> 
<h1 style="color:blue;"><center>VVU LABORATORY</center></h1>
<img src="imges/home.jpg" style="z-index: 100; left: 588px; position: absolute; top: 240px; "Height="249px">
<nav>
<ul>
<li><a href="appoinments.php">PATIENTAPPOINTMENT</a></li>
<li><a href="">PATIENT-TEST DETAILS</a></li>
<li><a href="">REPORT</a></li>
<li><a href="medilogout.php">LOGOUT</a></li>
</ul>
</nav>
<h2 style="color:blue;"><center> LAB SECTION</center></h2><br><br>
<form method="POST" action="lab.php">
 
  <table style="z-index: 102; left: 112px; color: white; font-family: 'Lucida Console'; position: absolute; top: 223px">
    <tbody>
      <tr>
        <td style="text-align: left; color:blue;">TestID<br>
        </td>
       <td><textarea cols="26" rows="2" name="testID" required=""></textarea><br>
        </td>
 </tr>
      <tr>
        <td style="text-align: left; color:blue;">TEST TYPE<br>
		<td>
          <select name="p_type">
<option value="in-patient">Blood Test</option>
<option value="out-patient">Urine Test</option>
</select><br><br>
</td>
        </td>
 </tr>
	   <tr>
        <td style="text-align: left; color:blue;">TESTFEE<br>
        </td>
         <td><textarea cols="26" rows="2" name="fee" required=""></textarea><br>
        </td>

      </tr>
	   <tr>
        <td style="text-align: left;color:blue;">COST<br>
        </td>
         <td><textarea cols="26" rows="2" name="cost" required=""></textarea><br>
        </td>
		</tr>
	   <tr>
        <td style="text-align: left; color:blue;">BLOOD-GROUP<br>
        </td>
           <td><textarea cols="26" rows="2" name="blood" required=""></textarea><br>
        </td>

      </tr>
	 <tr>
	  <td style="text-align: left;color:blue;">PatientID :<br></td>
	  <td>
<select id="id" name="id">
        <option> SELECT ID</option>
        <?php $search=mysql_query("SELECT id FROM patients"); 
            while($row=mysql_fetch_array($search)){
            ?>
        <option><?php echo $row['id'];  ?></option>
            <?php 
                
            }
                ?>
        </select><br />
        

</td>
</tr>
<tr>
<td>
 <button type="submit" class="btn btn-default">Save</button> &nbsp;&nbsp;<button type="reset" class="btn btn-primary" value="RESET">Reset</button>
 
</td>
</tr>
</tbody>
  </table>
  <br>
  </form>
</big></big></body>