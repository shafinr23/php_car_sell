<?php 


if(!isset($_SESSION)) 
    { 
        session_start();
    }



    if($_POST['man_co'] || $_POST['mod_nam'] || $_POST['mo_co']){

		  

     $man_co= $_POST['man_co'];
     $mod_nam= $_POST['mod_nam'];
     $mo_co= $_POST['mo_co'];

     $user = $_SESSION['username'];
     $c_date = date("Y-m-d h:i:s");
     $note = "Creat";


		// databese
			require_once('dbconnect.php');


			$sql = "INSERT INTO car_models (car_model_code,manufacture_code, model_name, u_name, create_date, note) VALUES ('$mo_co',$man_co','$mod_nam','$user','$c_date','$note')";


		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted";
			header("location:../all_car_mo.php?featuer_added");
		}else{
			 $_SESSION["error"]="data did not inserted ";
			header("location:../add_car_mo.php?featuer_didnot_added");
		}
}






?>