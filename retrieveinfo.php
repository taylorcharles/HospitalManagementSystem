<?php
mysql_connect('localhost','root','');
mysql_select_db('hms');
?>
<!DOCTYPE html>  
    <html>  
  
    <head>  
        <title>Invoice</title>  
    </head>   
            <link rel="stylesheet" href="css/bootstrap.min.css">  
            <body>  
			 <h1 class="box-title" style="color:blue;"><center>General Patient Chart<center></h1>  
                        </div>    
                    </div><br/>  
                <form action="" method="POST">  
                    <div class="box box-primary">  
                        <div class="box-header">  
                            <h2 class="box-title"><center>InPatient Info<center></h2>  
                        </div>    
                    </div><br/>  
                    <table class="table table-bordered table-hover">  
                        <thead>  
                            <th>Patient Name</th>  
                            <th>Patient ID</th>  
                            <th>Age</th>  
                            <th>Gender</th>  
                            <th>Mobile No</th>  
                            <th>Address</th>  
                            <th><input type="button" value="+" id="add" class="btnbtn-primary"></th>  
                        </thead>  
                        <tbody class="detail">  
                            <tr>  	
                              <td>
							  <?php $search=mysql_query("SELECT name FROM patients");    /*Selecting of name from patient  Table*/
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="name" value="<?php echo $row['name'];  ?>">
			 <?php 
                
            }
                ?>
			</td>  
                                <td>
							  <?php $search=mysql_query("SELECT id FROM patients");     /*Selecting of patient ID from patient  Table*/
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="PID" value="<?php echo $row['id'];  ?>">
			 <?php 
                
            }
                ?>
			</td>    
                                <td>
							  <?php $search=mysql_query("SELECT age FROM patients");    /*Selecting of AGE from patients  Table*/
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="age" value="<?php echo $row['age'];  ?>">
			 <?php 
                
            }
                ?>
			</td>    <td>
							  <?php $search=mysql_query("SELECT gender FROM patients");     /*Selecting of gender from patient  Table*/
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="gender" value="<?php echo $row['gender'];  ?>">
			 <?php 
                
            }
                ?>
			</td>  			 <td>
							  <?php $search=mysql_query("SELECT mobile FROM patients");   /*Selecting of mobile from patient  Table*/
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="mobile" value="<?php echo $row['mobile'];  ?>">
			 <?php 
                
            }
                ?>
			</td>       <td>
							  <?php $search=mysql_query("SELECT address FROM patients");    /*Selecting of address from patient  Table*/
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="address" value="<?php echo $row['address'];  ?>">
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
</tfoot>  
  
</table> 
 <h3 class="box-title"><center>OutPatient Info<center></h3>  
                        </div>    
                    </div><br/>  
                    <table class="table table-bordered table-hover">
<thead>  
                            <th>Patient Name</th>  
                             <th>Age</th> 
							 <th>Mobile No</th>
							 <th>Gender</th>							  
							 <th>Department</th> 
							 <th>Doctor's Name</th> 
							 <th>Patient ID</th> 
                            <th><input type="button" value="+" id="add" class="btnbtn-primary"></th>  
                        </thead>  
                        <tbody class="detail">  
                            <tr>  	
                              <td>
							  <?php $search=mysql_query("SELECT name FROM outpatient"); 
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="name" value="<?php echo $row['name'];  ?>">
			 <?php 
                
            }
                ?>
			</td>  
                                <td>
							  <?php $search=mysql_query("SELECT Age FROM outpatient"); 
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="Age" value="<?php echo $row['Age'];  ?>">
			 <?php 
                
            }
                ?>
			</td>    
                                <td>
							  <?php $search=mysql_query("SELECT p_num FROM outpatient"); 
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="p_num" value="<?php echo $row['p_num'];  ?>">
			 <?php 
                
            }
                ?>
			</td>    <td>
							  <?php $search=mysql_query("SELECT gender FROM outpatient"); 
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="gender" value="<?php echo $row['gender'];  ?>">
			 <?php 
                
            }
                ?>
			</td>  			 <td>
							  <?php $search=mysql_query("SELECT dept FROM outpatient"); 
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="mobile" value="<?php echo $row['dept'];  ?>">
			 <?php 
                
            }
                ?>
			</td>       <td>
							  <?php $search=mysql_query("SELECT doc FROM outpatient"); 
            while($row=mysql_fetch_array($search)){
            ?>
			<input type="text" name="doc" value="<?php echo $row['doc'];  ?>">
			 <?php 
                
            }
                ?>
			</td>  
			<td>
							  <?php $search=mysql_query("SELECT pID FROM outpatient"); 
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
  
</table>   
</form>  
</body>  
</html>  
<script type="text/javascript">  
