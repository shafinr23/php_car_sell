
<?php

if(!isset($_SESSION)) 
    { 
        session_start();
    }

    if($_POST['menu_code'] || $_POST['model_code'] || $_POST['vehi_code'] || $_POST['ask_price'] || $_POST['cur_mil'] || $_POST['date_acq'] || $_POST['reg_yr'] || $_POST['oth_det']){

		  

       $car_manu_sn= $_POST['menu_code'];
       $car_model_code= $_POST['model_code'];
       $vehicle_cat_code= $_POST['vehi_code'];
       $ask_price= $_POST['ask_price'];
       $cur_mil= $_POST['cur_mil'];
       $date_acq= $_POST['date_acq'];
       $reg_yr= $_POST['reg_yr'];
       $oth_det= $_POST['oth_det'];
       $car_for_id= $_POST['car_sell_id'];


       $user = $_SESSION['username'];
       $u_date = date("Y-m-d h:i:s");
       $note = "update";






		// databese
// databese
			require_once('dbconnect.php');


			
           $sql = "UPDATE car_for_sale SET car_man_id='$car_manu_sn' , car_model_code='$car_model_code', vehicle_id='$vehicle_cat_code', asking_prize='$ask_price', current_mile='$cur_mil',date_acquire='$date_acq', reg_year='$reg_yr',oth_det='$oth_det' , u_name='$user', update_date='$u_date' , note='$note' WHERE car_sell_id='$car_for_id'";

           


if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted";
			header("location:../all_car_for_sell.php?car_for_sell_data_update");
		}else{
			 $_SESSION["error"]="data did not inserted ";
			header("location:../all_car_for_sell.php?car_for_sell_data_didnot_update");
		}
}


 


		 







?>