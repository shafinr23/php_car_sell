<?php 


if(!isset($_SESSION)) 
    { 
        session_start();
    }



    if($_POST['menu_code'] || $_POST['menu_code'] || $_POST['vehi_code'] || $_POST['ask_price'] || $_POST['cur_mil'] || $_POST['date_acq'] || $_POST['reg_yr'] || $_POST['oth_det']){

		  

      $car_manu_sn= $_POST['menu_code'];
      $car_model_code= $_POST['menu_code'];
      $vehicle_cat_code= $_POST['vehi_code'];
      $ask_price= $_POST['ask_price'];
      $cur_mil= $_POST['cur_mil'];
      $date_acq= $_POST['date_acq'];
      $reg_yr= $_POST['reg_yr'];
      $oth_det= $_POST['oth_det'];

      $user = $_SESSION['username'];
      $c_date = date("Y-m-d h:i:s");
      $note = "Creat";



   



 require_once('dbconnect.php');



			$sql = "INSERT INTO car_for_sale (car_man_id,car_model_code,vehicle_id,asking_prize,current_mile,date_acquire,reg_year,oth_det,u_name,create_date,note) VALUES ($car_manu_sn,$car_model_code,$vehicle_cat_code,$ask_price,$cur_mil,'$date_acq','$reg_yr','$oth_det','$user','$c_date','$note')";


		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted";
			header("location:../add_car_for_sell.php?featuer_added");
		}else{
			 $_SESSION["error"]="data did not inserted ";
			header("location:../add_car_for_sell.php?featuer_didnot_added");
		}
}






?>