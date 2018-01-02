<?php 




if(!isset($_SESSION)) 
    { 
        session_start();
    }



    if($_POST['fi_code'] || $_POST['fi_name'] || $_POST['fi_det']){

		  

      	$fi_code= $_POST['fi_code'];
      	$fi_name= $_POST['fi_name'];
      	$fi_det= $_POST['fi_det'];

      	$user = $_SESSION['username'];
      	$c_date = date("Y-m-d h:i:s");
      	$note = "Creat";


		// databese
			require_once('dbconnect.php');


			$sql = "INSERT INTO finance_com (finance_id, finance_com_name,finance_det , u_name, create_date, note) VALUES ('$fi_code','$fi_name','$fi_det','$user','$c_date','$note')";


		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted";
			header("location:../all_finance_com.php?insurance_company_added");
		}else{
			 $_SESSION["error"]="data did not inserted ";
			header("location:../all_finance_com.php?insurance_company_didnot_added");
		}
}






?>