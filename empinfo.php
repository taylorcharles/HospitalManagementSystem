<?php
    $servername = "localhost";
    $username   = "root";
    $dbname     = "hms";
    $password   = "";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $Empcode='';


    $sql = "select  * from signup where Empcode=''";
    $result = mysqli_query($conn,$sql) ;
    while($row = mysqli_fetch_array($result)){
      header('Content-type: image/jpeg');
       
       $Empcode=$row['Empcode'];
	   $fileUpload=$row['fileUpload']; 
    }

?>
<!DOCTYPE html>
<html>
    <body>
        <table>
            <tr><td>Employee id</td> <td><?php echo $Empcode; ?></td></tr>
            <tr><td>Employee Image</td> <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image) .'" />';?></td></tr>
        </table>
    </body>
</html>  