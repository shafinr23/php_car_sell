<?php require_once('dbconnect.php'); ?>
<?php 



if(!isset($_SESSION)) 
    { 
        session_start();
    }



    if($_POST['manu_sn']  || $_POST['manu_fn']  || $_POST['menu_od']){

		  

       $manu_sn= $_POST['manu_sn'];
       $manu_fn= $_POST['manu_fn'];
       $manu_ob= $_POST['menu_od'];



      $user = $_SESSION['username'];
      $c_date = date("Y-m-d h:i:s");
      $note = "Creat";





			$sql = "INSERT INTO car_manufacture (car_manu_sn, manufacturer_full_name , manufacturer_other , u_name, create_date, note) VALUES ('$manu_sn','$manu_fn','$manu_ob','$user','$c_date','$note')";


		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted";
			header("location:../all_car_menu.php?featuer_added");
		}else{
			 $_SESSION["error"]="data did not inserted ";
			header("location:../all_car_menu.php?featuer_didnot_added");
		}
}






?>