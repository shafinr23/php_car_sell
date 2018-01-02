<?php 




if(!isset($_SESSION)) 
    { 
        session_start();
    }



    if($_POST['pay_code'] || $_POST['pay_det']){

		  

      	$pay_code= $_POST['pay_code'];
      	$pay_det= $_POST['pay_det'];


      	$user = $_SESSION['username'];
      	$c_date = date("Y-m-d h:i:s");
      	$note = "Creat";


		// databese
			require_once('dbconnect.php');


			$sql = "INSERT INTO payment_st (payment_st, payment_det,u_name, create_date, note) VALUES ('$pay_code','$pay_det','$user','$c_date','$note')";


		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted";
			header("location:../add_paymant_st.php?insurance_company_added");
		}else{
			 $_SESSION["error"]="data did not inserted ";
			header("location:../add_paymant_st.php?insurance_company_didnot_added");
		}
}






?>