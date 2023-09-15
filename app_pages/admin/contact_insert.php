<?php
include('../../db_con/db_conn.php');

// add new contact insert....
$name=$_POST['contact-name'];
$phone_no=$_POST['contact-phone'];
$email=$_POST['contact-email'];
$subject=$_POST['subject'];
$message=$_POST['contact-message'];

// if($name!=''){
    $query="INSERT INTO `contact`(`name`,`phn_no`,`email`,`subject`,`your_msg`) VALUES('".$name."','".$phone_no."','".$email."','".$subject."','".$message."')";
    if(mysqli_query($connect,$query)){ 
        echo"success";
    }else{
        echo"failed";
    }
// }else{
//     echo "please fill atleast your name";
// }

$query

?>