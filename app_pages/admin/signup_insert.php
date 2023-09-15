<?php
// include databse connection..
include('../../db_con/db_conn.php');

$email=$_POST['email'];
$password=$_POST['password'];
// print_r($_POST); die;
$query="INSERT INTO `admin_login`(`email`,`password`) VALUES('".$email."','".$password."')";

if(mysqli_query($connect,$query)){
	// echo "Record Inserted successfully";
	header('location:sign_in.php');

	}else{
	// echo "Record Failed";
	header('location: sign_up.php');

	}

?>