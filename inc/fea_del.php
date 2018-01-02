<?php 



		if($_POST['de']){

	 	  $id = $_POST['de'];





		// databese
			require_once('dbconnect.php');


			
           //$sql = "UPDATE role SET name='$Name',code='$code' WHERE ";
           $sql = "DELETE FROM car_featuers WHERE car_features_id=$id";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_car_fe.php?customer_delated");
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_car_fe.php?_did_not_delated");
		}
 }

 ?>