
<?php

if(!isset($_SESSION)) 
    { 
        session_start();
    }

		if($_POST['insu_id'] || $_POST['insu_name'] || $_POST['insu_det']){

		  	 $ins_id =$_POST['insu_id'];
		  	 $insu_name =$_POST['insu_name'];
		  	 $insu_det =$_POST['insu_det'];
	 	 	 $insur_id = $_POST['insur_id'];



	 	 $user = $_SESSION['username'];
     	 $u_date = date("Y-m-d h:i:s");
    	 $note = "edited";






		// databese
			require_once('dbconnect.php');


			
           $sql = "UPDATE insurance_com SET insurance_com_id='$ins_id', insurance_com_name= '$insu_name',insurance_det= '$insu_det', u_name='$user', update_date='$u_date' , note='$note' WHERE insu_id='$insur_id'";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_insu_com.php?all_insurance_company_updates");
		
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_insu_com.php?all_insurance_company_didnot_updates");
		}
 }


 


		 







?>