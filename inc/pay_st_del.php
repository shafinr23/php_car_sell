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


			
           $sql = "UPDATE payment_st SET  u_name='$user', update_date='$u_date' , status = '1' ,note='$note' WHERE pay_st_id='$id'";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_paymant_st.php?all_payment_st_del");
		
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_paymant_st.php?all_payment_st_didnot_del");
		}
 }


 


		 







?>