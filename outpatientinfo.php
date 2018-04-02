<?php
mysql_connect('localhost','root','');
mysql_select_db('hms');
?>		
<!DOCTYPE html>
<html lang="en">
<head>
	<title>OutPatient</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
	<body style="background:url('imges/Hospital_Image.png')">
<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="outpatient.php" method="post">
				<span class="contact100-form-title">
				OutPatient RegInfo	
				</span>

				
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Patient Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Age</span>
					<input class="input100" type="text" name="Age" placeholder="Enter your Age">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Phone Number</span>
					<input class="input100" type="text" name="p_num" placeholder="Enter your Age">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100"></span>
					<div>
						<select class="selection-2" name="gender">
							<option>Gender</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 input100-select">
					<span class="label-input100">Department</span>
					<div>
						<select class="selection-2" name="dept">
							<option>Dept</option>
							
							 <?php $search=mysql_query("SELECT dept FROM doctor_login"); 
            while($row=mysql_fetch_array($search)){
            ?>
        <option><?php echo $row['dept'];  ?></option>
            <?php 
                
            }
                ?>
 
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
			
				<div class="wrap-input100 input100-select">
					<span class="label-input100"></span>
					<div>
						<select class="selection-2" name="doc">
							<option>Assigned Doctor</option>
							 <?php $search=mysql_query("SELECT username FROM doctor_login"); 
            while($row=mysql_fetch_array($search)){
            ?>
        <option><?php echo $row['username'];  ?></option>
            <?php 
                
            }
                ?>
 
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
								
				<div class="wrap-input100 input100-select">
					<span class="label-input100">Patient ID</span>
					<div>
						<select class="selection-2" name="pID">
							<option>Choose ID</option>
							
							 <?php $search=mysql_query("SELECT id FROM patients"); 
            while($row=mysql_fetch_array($search)){
            ?>
        <option><?php echo $row['id'];  ?></option>
            <?php 
                
            }
                ?>
 
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>

