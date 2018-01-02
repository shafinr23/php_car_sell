<?php 




if(!isset($_SESSION)) 
    { 
        session_start();
    }



    if($_POST['vah_code'] || $_POST['vah_des']){

		  

      $vah_code= $_POST['vah_code'];
      $vah_des= $_POST['vah_des'];

      $user = $_SESSION['username'];
      $c_date = date("Y-m-d h:i:s");
      $note = "Creat";


		// databese
			require_once('dbconnect.php');


			$sql = "INSERT INTO vehicle_cat (vehicle_cat_code, vehicle_detaile, u_name, create_date, note) VALUES ('$vah_code','$vah_des','$user','$c_date','$note')";


		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted";
			header("location:../all_vehcal.php?featuer_added");
		}else{
			 $_SESSION["error"]="data did not inserted ";
			header("location:../all_vehcal.php?featuer_didnot_added");
		}
}






?>