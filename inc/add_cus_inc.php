

<?php


 session_start();
 
	if($_POST['name']|| $_POST['cell'] || $_POST['mail']||$_POST['det']){
		 $Name = $_POST['name'];
		 $cell = $_POST['cell'];
		 $mail = $_POST['mail'];
		 $det = $_POST['det'];





		// databese
			require_once('dbconnect.php');


			$sql = "INSERT INTO customers ( name , cell_mobile_number , email ,  other_det  ) VALUES('$Name','$cell','$mail','$det')";


		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_customer.php?role_added");
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_customer.php?role_did_not_added");
		}
}






?>