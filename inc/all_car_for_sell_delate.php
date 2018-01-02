<?php


if(!isset($_SESSION)) 
    { 
        session_start();
    }

		if($_POST['del']){


	 	 	  $id = $_POST['del'];


	 	 	$user = $_SESSION['username'];
     		$u_date = date("Y-m-d h:i:s");
    		$note = "delate";






		// databese
			 require_once('dbconnect.php');

			
           $sql = "UPDATE car_for_sale SET  u_name='$user', update_date='$u_date' , status = '1' ,note='$note' WHERE car_sell_id='$id'";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_featuers_on_car_for_sale.php?delated");
		
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_featuers_on_car_for_sale.php?all_insurance_company_didnot_updates");
		}
 }


 


		 







?>