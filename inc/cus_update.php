
<?php



if($_POST['name']|| $_POST['cell'] || $_POST['mail']||$_POST['det']){
		 $Name = $_POST['name'];
		 $cell = $_POST['cell'];
		 $mail = $_POST['mail'];
		 $det = $_POST['det'];
	 	 $id = $_POST['id'];




		// databese
			require_once('dbconnect.php');


			
           $sql = "UPDATE customers SET name='$Name',  cell_mobile_number ='$cell' , email='$mail', other_det ='$det' WHERE id='$id'";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_customer.php?customer_updates");
		
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_customer.php?customer_didnot_updates");
		}
 }


 


		 







?>