<?php



 if ($_POST['roleName'] || $_POST['roleCode']) {
 	$Name = $_POST['roleName'];
	 	 $code = $_POST['roleCode'];
	 	 $id = $_POST['id'];






		// databese
			require_once('dbconnect.php');


			
           $sql = "UPDATE role SET name='$Name',code='$code' WHERE id='$id'";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:all_customer.php?roleupdates");
		
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:edit-role.php?role_did_not_added");
		}
 }


 
 if ($_POST['roleName'] || $_POST['roleCode']) {
 	$Name = $_POST['roleName'];
	 	 $code = $_POST['roleCode'];
	 	 $id = $_POST['id'];






		// databese
			$servername = "localhost";
			$username = "root";
			$password = "";
			$database =  "My_blog";


			$con = new MySQLi($servername ,$username ,$password,$database);


			if ($con->connect_errno) {
				die("self string :".$con->connect_errno);		
			}


			
           //$sql = "UPDATE role SET name='$Name',code='$code' WHERE ";
           $sql = "DELETE FROM `role` WHERE id='$id'";




		if($con->query($sql)== true){
			 $_SESSION["success"]="data inserted ";
			header("location:all_customer.php?roledelated");
		}else{
			 $_SESSION["error"]="data  did not inserted ";
			header("location:edit-role.php?role_did_not_added");
		}
 }

		 







?>