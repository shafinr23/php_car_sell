

<?php



 
		 session_start();
		if($_POST['det']){

		  $des =$_POST['det'];





		// databese
			require_once('dbconnect.php');


			$sql = "INSERT INTO car_featuers (  car_featuer_dis  ) VALUES('$des')";


		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:../all_car_fe.php?featuer_added");
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:../all_car_fe.php?featuer_didnot_added");
		}
}







?>