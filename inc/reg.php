<?php


 
	if($_POST['UName'] || $_POST['UMail'] || $_POST['pass']  || $_FILES['file']){
		$Name = $_POST['UName'];
		$Mail = $_POST['UMail'];
		$pass = $_POST['pass'];
	 	$url = img();





		// databese
			require_once('dbconnect.php');


			$sql = "INSERT INTO user  ( name , mail , pass , photo_url) VALUES('$Name','$Mail','$pass','$url')";


		if($con->query($sql)== true){
			header("location:../index.php?sucess");
	}else{
		header("location:../index.php?notTrue");
	}
}


/**
 *
 */
function img(){

 	if(isset($_POST['submit'])){
	 	$file = $_FILES['file'];
 		$fileName = $_FILES['file']['name'];
 		$fileTmpName = $_FILES['file']['tmp_name'];
 		$fileSize = $_FILES['file']['size'];
 		$fileError = $_FILES['file']['error'];
 		$fileType = $_FILES['file']['type'];
 		$fileExt = explode('.', $fileName);
 		$fileActialExt = strtolower(end($fileExt));
 		$allow = array('jpg','jpeg','png','mp3');


 		if (in_array($fileActialExt, $allow)) {
 			if ($fileError === 0 ) {
 				if ($fileSize < 1000000) {
 					$fileNameUnq = uniqid('',true).".".$fileActialExt;
 					$filePath = '../upload/'.$fileNameUnq ;
 					move_uploaded_file($fileTmpName, $filePath);
 					header("location:index.php?uploaded");
 				}else{
 					echo " your file is big";
 				}
 			}else{
 				echo " there is error";
 			}
 		}else{
 			echo " please don't.";
 		}

		 }
		 return($filePath);

}



?>