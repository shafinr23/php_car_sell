
<?php

if(!isset($_SESSION)) 
    { 
        session_start();
    }

		if($_POST['pay_id'] || $_POST['pay_det']){

		  	 $pay_id =$_POST['pay_id'];
		  	 $pay_det =$_POST['pay_det'];
	 	 	 $pay_e_id = $_POST['pay_e_id'];



	 	 $user = $_SESSION['username'];
     	 $u_date = date("Y-m-d h:i:s");
    	 $note = "edited";






		// databese
			require_once('dbconnect.php');


			
           $sql = "UPDATE payment_st SET payment_st='$pay_id',payment_det= '$pay_det', u_name='$user', update_date='$u_date' , note='$note' WHERE pay_st_id='$pay_e_id'";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_paymant_st.php?all_payment_st_updates");
		
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_paymant_st.php?all_payment_st_didnot_updates");
		}
 }


 


		 







?>