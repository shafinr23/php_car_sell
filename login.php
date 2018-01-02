<?php

$name=$_POST["Uname"];
$pass=$_POST["pass"];

session_start();

    require_once('dbconnect.php');

if (!empty($name && $pass )) {
  $results = mysqli_query($con,"SELECT * FROM user WHERE name='$name'");
  $row = mysqli_fetch_array($results);
  if (is_array($row)) {


     $_SESSION["login_id"]=$row["user_id"];
     $_SESSION["username"]=$row["name"];
     $_SESSION["email"]=$row["email"];
     $_SESSION["photo_url"]=$row["photo_url"];

    header("location:main.php?sucess");
  }else{
    header("location:index.php?notTrue");
  }
}
?>