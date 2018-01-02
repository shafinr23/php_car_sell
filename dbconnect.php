<?php 
			// databese
			$servername = "localhost";
			$username = "root";
			$password = "";
			$database =  "car_pro";


			$con = new MySQLi($servername ,$username ,$password,$database);


			if ($con->connect_errno) {
				die("self string :".$con->connect_errno);
					
			}

?>