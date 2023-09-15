<?php
include('../../db_con/db_conn.php');
session_start();

$email=$_POST['email'];
$password=$_POST['password'];

$query= "SELECT * FROM `admin_login` WHERE email='$email' AND password='$password'";
$result = mysqli_query($connect,$query);
// print_r($query);die;

$num_rows = $result->num_rows; 
if($num_rows==1){
    $data = mysqli_fetch_assoc($result);
    // $_SESSION['usr_name']=$data[]
    $_SESSION['email_id']=$data['email'];
    header('location:dashboard.php');
}else{
    // echo "login faild";
    header('location: sign_in.php');
}



?>