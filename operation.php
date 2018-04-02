<?php
mysql_connect('localhost','root','');
mysql_select_db('hms');
?>
<html>
<head> 
<title>Operation Home</title>
</head>
<link rel="stylesheet" href="css/bootstrap.css">
<img src="imges/cardiology1.jpg" style="z-index: 100; left: 562px; position: absolute; top: 259px" Height="254px"  Width="349px">
<h1 style="color:red; position:absolute; margin-top:180px;margin-left:230px;font-size:32pt;font-name:modern;Forecolor:red;width:231px;">Operation Theatre</h1>
<body style="background:url('imges/Hospital_Image.png')">
            <form method="post" action="operate.php">
			<table style="z-index: 100; left: 164px; position: absolute; top: 300px; font-family: 'Lucida Console';">
<tbody>
<tr>
   <td style="text-align: left; color:white;">Patient Type
                 </td>
                <td >
				 <select name="p_type">
<option value="In-patient">In-patient</option>
<option value="Outpatient">Outpatient</option>
</select><br><br>
                    </td>
            </tr>

<tr>
<td style="text-align: left;color:white;">Patient ID
</td>
<td><input name="o_id" type="text" required=""><br>
</td>
</tr>

<tr>
<td style="text-align: left;color:white;">Name<br><br>
</td>
<td><input name="name" type="text" required=""><br>
</td>
</tr>
<tr>
<br><br>
   <td style="text-align: left; color:white;">Operation Type
                 </td>
                <td >
				 <select name="o_type">
<option value="Heart">Heart</option>
<option value="Bones">Bones</option>
<option value="Brain">Brain</option>
<option value="Lungs">Lungs</option>

</select><br><br>
                    </td>
            </tr>

<br>
<tr>
   <td style="text-align: left; color:white;">Refered Doctor
                 </td>
                <td >
				 <select name="doc">


			 <?php $search=mysql_query("SELECT username FROM doctor_login"); 
            while($row=mysql_fetch_array($search)){
            ?>
        <option><?php echo $row['username'];  ?></option>
            <?php 
                
            }
                ?>
 

</select><br><br>
                    </td>
            </tr>
 
<tr>
   <td style="text-align: left; color:white;">Operation Result
                 </td>
                <td >
				 <select name="o_result">
<option value="success">Success</option>
<option value="failure">Failure</option>

</select><br><br>
                    </td>
           
			
			<tr>
			<td >
			<input value="save" name="submit" type="submit" style="color:blue;"> 
			</td>
			</tr>
			</tbody>
			</table>
			
		</form>
</body>
</html>