<?php 


if(!isset($_SESSION)) 
    { 
        session_start();
    }



    if($_POST['car_for_sell'] || $_POST['car_fe_id'] || $_POST['oth_det'] ){

		  

      $car_for_sell= $_POST['car_for_sell'];
      $car_fe_id= $_POST['car_fe_id'];
      $oth_det= $_POST['oth_det'];


      $user = $_SESSION['username'];
      $c_date = date("Y-m-d h:i:s");
      $note = "Creat";



   



            require_once('dbconnect.php');



			$sql = "INSERT INTO featuers_on_car_for_sale (car_sell_id,car_feature_id,featuers_on_car_for_sale_des,u_name,create_date,note) VALUES ($car_for_sell,$car_fe_id,'$oth_det','$user','$c_date','$note')";


		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted";
			header("location:../add_featuers_on_car_for_sale.php?featuer_added");
		}else{
			 $_SESSION["error"]="data did not inserted ";
			header("location:../add_featuers_on_car_for_sale.php?featuer_didnot_added");
		}
}






?>