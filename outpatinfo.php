 <!--Database connection for OutPatient Info-->
 <?php
mysql_connect('localhost','root','');
mysql_select_db('hms');
?>
<!--Database connection for OutPatient info-->
<!DOCTYPE html>  
    <html>  
  
    <head>  
        <title>Invoice</title>  
    </head>   
            <link rel="stylesheet" href="css/bootstrap.min.css">  
			
            <body> 

 <h2 class="box-title"><center>OutPatient Info<center></h2>  
                        </div>    
                    </div><br/>  
                    <table class="table table-bordered table-hover">
<thead>  
                            <th>Patient Name</th>                       <!--filling patient Name table head with Patient's Name from Outpatient -->
                             <th>Age</th> 								<!--filling Age table head with the Patient's Age from OutPatient-->
							 <th>Mobile No</th>							<!--filling Mobile No table head with the Patient's Contact from OutPatient-->
							 <th>Gender</th>							  <!--filling Gender table head with the Patient's Gender from OutPatient-->
							 <th>Department</th> 							<!--filling Department table head with the Patient's Department from OutPatient-->
							 <th>Doctor's Name</th> 						<!--filling Doctor's Name table head with the Doctor's Name from OutPatient-->
							 <th>Patient ID</th> 							<!--filling Patient ID table head with the Patient's ID from OutPatient-->
                            <th><input type="button" value="+" id="add" class="btnbtn-primary"></th>  
                        </thead>  
                        <tbody class="detail">  
                            <tr>  	
                              <td>
							  <?php $search=mysql_query("SELECT name FROM outpatient");         /*Selecting of name from outpatient  Table*/
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="name" value="<?php echo $row['name'];  ?>">          
			 <?php 
                
            }
                ?>
			</td>  
                                <td>
							  <?php $search=mysql_query("SELECT Age FROM outpatient");     /*Selecting of Age from outpatient  Table*/
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="Age" value="<?php echo $row['Age'];  ?>">
			 <?php 
                
            }
                ?>
			</td>    
                                <td>
							  <?php $search=mysql_query("SELECT p_num FROM outpatient");   /*Selecting of patient number from outpatient  Table*/
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="p_num" value="<?php echo $row['p_num'];  ?>">
			 <?php 
                
            }
                ?>
			</td>    <td>
							  <?php $search=mysql_query("SELECT gender FROM outpatient");      /*Selecting of gender from outpatient  Table*/
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="gender" value="<?php echo $row['gender'];  ?>">
			 <?php 
                
            }
                ?>
			</td>  			 <td>
							  <?php $search=mysql_query("SELECT dept FROM outpatient");     /*Selecting of department from outpatient  Table*/
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="mobile" value="<?php echo $row['dept'];  ?>">
			 <?php 
                
            }
                ?>
			</td>       <td>
							  <?php $search=mysql_query("SELECT doc FROM outpatient");     /*Selecting of preferred doctor from outpatient  Table*/
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="doc" value="<?php echo $row['doc'];  ?>">
			 <?php 
                
            }
                ?>
			</td>  
			<td>
							  <?php $search=mysql_query("SELECT pID FROM outpatient");      /*Selecting of patient ID from outpatient  Table*/
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="pID" value="<?php echo $row['pID'];  ?>">
			 <?php 
                
            }
                ?>
			</td>  
</tr>  
</tbody>  
<tfoot>  
<th></th>  
<th></th>  
<th></th>  
<th></th>  
<th></th> 
<th></th> 
<th></th>  
</tfoot>  
  
</table>    <!--End of Table-->
