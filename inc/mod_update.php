
<?php

if(!isset($_SESSION)) 
    { 
        session_start();
    }

		if($_POST['meu_code'] || $_POST['mod_name']){

		  	 $menc =$_POST['meu_code'];
		  	 $mname =$_POST['mod_name'];
	 	 	 $id = $_POST['moid'];



	 	 	$user = $_SESSION['username'];
     		$u_date = date("Y-m-d h:i:s");
    		$note = "edited";






		// databese
			require_once('dbconnect.php');


			
           $sql = "UPDATE car_models SET manufacture_code='$menc', model_name= '$mname', u_name='$user', update_date='$u_date' , note='$note' WHERE car_model_code='$id'";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_car_mo.php?car_featuer_updates");
		
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_car_mo.php?car_featuer_didnot_updates");
		}
 }


 


		 







?>