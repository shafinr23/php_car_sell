
<?php

if(!isset($_SESSION)) 
    { 
        session_start();
    }

		if($_POST['fin_id'] || $_POST['fin_name'] || $_POST['fin_det']){

		  	 $fin_id =$_POST['fin_id'];
		  	 $fin_name =$_POST['fin_name'];
		  	 $din_det =$_POST['insu_det'];
	 	 	 $fin_e_id = $_POST['fin_e_id'];



	 	 $user = $_SESSION['username'];
     	 $u_date = date("Y-m-d h:i:s");
    	 $note = "edited";






		// databese
			require_once('dbconnect.php');


			
           $sql = "UPDATE finance_com SET finance_id='$fin_id', finance_com_name= '$fin_name',finance_det= '$din_det', u_name='$user', update_date='$u_date' , note='$note' WHERE fin_com_id='$fin_e_id'";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_finance_com.php?all_finance_company_updates");
		
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_finance_com.php?all_finance_company_didnot_updates");
		}
 }


 


		 







?>