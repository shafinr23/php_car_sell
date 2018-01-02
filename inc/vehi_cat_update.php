
<?php

if(!isset($_SESSION)) 
    { 
        session_start();
    }

		if($_POST['vehi_code'] || $_POST['vehi_des']){

		  	$vehi_code =$_POST['vehi_code'];
		  	$vehi_des =$_POST['vehi_des'];
	 	 	$vehicle_id = $_POST['vehi_id'];



	 	 $user = $_SESSION['username'];
     	$u_date = date("Y-m-d h:i:s");
    	$note = "edited";






		// databese
			require_once('dbconnect.php');


			
           $sql = "UPDATE vehicle_cat SET vehicle_cat_code='$vehi_code', vehicle_detaile= '$vehi_des', u_name='$user', update_date='$u_date' , note='$note' WHERE vehicle_id='$vehicle_id'";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_vehcal.php?car_featuer_updates");
		
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_vehcal.php?car_featuer_didnot_updates");
		}
 }


 


		 







?>