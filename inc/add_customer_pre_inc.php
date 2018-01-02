<?php 


if(!isset($_SESSION)) 
    { 
        session_start();
    }



    if($_POST['features'] || $_POST['customers'] || $_POST['des']){

		  

      $features= $_POST['features'];
      $customers= $_POST['customers'];
      $des= $_POST['des'];

      $user = $_SESSION['username'];
      $c_date = date("Y-m-d h:i:s");
      $note = "Creat";



   



 require_once('dbconnect.php');



			$sql = "INSERT INTO customer_preference (car_features_id,customer_id,customer_preference_des,u_name,create_date,note) VALUES ($features,$customers,'$des','$user','$c_date','$note')";


		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted";
			header("location:../add_customer_pre.php?featuer_added");
		}else{
			 $_SESSION["error"]="data did not inserted ";
			header("location:../add_customer_pre.php?featuer_didnot_added");
		}
}






?>