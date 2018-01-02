
<?php

if(!isset($_SESSION)) 
    { 
        session_start();
    }

		if($_POST['manu_sn'] || $_POST['manu_fn'] || $_POST['manu_ob']){

		  	  $mensn =$_POST['manu_sn'];
		  	  $menfn =$_POST['manu_fn'];
		  	  $menob =$_POST['manu_ob'];
	 	 	  $id = $_POST['moid'];



	 	 	 $user = $_SESSION['username'];
     		 $u_date = date("Y-m-d h:i:sa");
    		 $note = "edited";






		// databese
			require_once('dbconnect.php');


			
           $sql = "UPDATE car_manufacture SET car_manu_sn='$mensn', manufacturer_full_name='$menfn' , manufacturer_other= '$menob', u_name='$user', update_date='$u_date' , note='$note' WHERE car_man_id='$id'";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_car_menu.php?car_featuer_updates");
		
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_car_menu.php?car_featuer_didnot_updates");
		}
 }


 


		 







?>