
<?php
if(!isset($_SESSION)) 
    { 
        session_start();
    }


		if($_POST['fedt']){

		  	 $des =$_POST['fedt'];
	 	 	 $id = $_POST['id'];


	 	 	 $user = $_SESSION['username'];
     		$U_date = date("Y-m-d h:i:s");
     		$note = "modify";






		// databese
			require_once('dbconnect.php');


			
           $sql = "UPDATE car_featuers SET car_featuer_dis='$des' WHERE car_features_id='$id'";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_car_fe.php?car_featuer_updates");
		
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_car_fe.php?car_featuer_didnot_updates");
		}
 }


 


		 







?>