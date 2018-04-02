<!--Database connection for patient info-->
<?php
mysql_connect('localhost','root','');     
mysql_select_db('hms');
?>	
<!--Database connection for patient info-->	
<html>
<head>
<title>VVU</title>
</head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<body style="background:url('imges/Hospital_Image.png'); background-size:cover;"> 
<section>
<div class="container" ></div>
<div class="form_content"></div>
<h1><center>Valley View University</center></h1>
<img src="imges/8.jpg" style="z-index: 100; left: 420px; position: absolute; top: 240px; "Height="100px" width="360px">
<div class="login"></div>
<form style="z-index: 100; left: 464px; position: absolute; top: 350px; font-family: 'Lucida Console'; color:red;" method="Post" action="retrieveinfo.php"><center>        
</select><br><br>
<label>Select Type</label><br>
<select name="p_type">
<option value="in-patient">	All patient</option>
<option value="out-patient">All patient</option>
</select><br><br>
<input type="SUBMIT" name="search" value="search"><br> &nbsp; &nbsp; <a href="#">Tab the Button To Search</a>

</center>
</form>



</section>
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