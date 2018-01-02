<?php 




if(!isset($_SESSION)) 
    { 
        session_start();
    }



    if($_POST['insu_code'] || $_POST['insu_name'] || $_POST['insu_det']){

		  

      	$insu_code= $_POST['insu_code'];
      	$insu_name= $_POST['insu_name'];
      	$insu_det= $_POST['insu_det'];

      	$user = $_SESSION['username'];
      	$c_date = date("Y-m-d h:i:s");
      	$note = "Creat";


		// databese
			require_once('dbconnect.php');


			$sql = "INSERT INTO insurance_com (insurance_com_id, insurance_com_name,insurance_det , u_name, create_date, note) VALUES ('$insu_code','$insu_name','$insu_det','$user','$c_date','$note')";


		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted";
			header("location:../all_insu_com.php?insurance_company_added");
		}else{
			 $_SESSION["error"]="data did not inserted ";
			header("location:../all_insu_com.php?insurance_company_didnot_added");
		}
}






?>