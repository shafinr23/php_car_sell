<?php


if(!isset($_SESSION)) 
    { 
        session_start();
    }

		if($_POST['del']){


	 	 	  $id = $_POST['del'];


	 	 	$user = $_SESSION['username'];
     		$u_date = date("Y-m-d h:i:sa");
    		$note = "delate";






		// databese
			require_once('dbconnect.php');


			
           $sql = "UPDATE car_manufacture SET  u_name='$user', update_date='$u_date' , status = '1' ,note='$note' WHERE car_man_id='$id'";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_car_menu.php?car_featuer_updates");
		
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_car_menu.php?car_featuer_didnot_updates");
		}
 }


 


		 







?>