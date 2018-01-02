<?php 



if($_POST['del']){

	 	 $id = $_POST['del'];






		// databese
			require_once('dbconnect.php');


			
           //$sql = "UPDATE role SET name='$Name',code='$code' WHERE ";
           $sql = "DELETE FROM `customers` WHERE id=$id";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_customer.php?customer_delated");
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_customer?customer_did_not_delated");
		}
 }

 ?>