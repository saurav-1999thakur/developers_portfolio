<?php
include('../../db_con/db_conn.php');
// add new services.....

// file target
$target_folder = "../../assets/admin_assets/service_img/";
$target_file = $target_folder.$_FILES['serviceicon']['name'];
move_uploaded_file($_FILES['serviceicon']['tmp_name'],$target_file); 


$serviceName = $_POST['servicename'];
$serviceIcon = $_FILES['serviceicon']['name'];
$description = $_POST['descrip'];

$query="INSERT INTO `services`(`services_name`,`services_icon`,`services_description`) VALUES('".$serviceName."','".$serviceIcon."','".$description."')";
if(mysqli_query($connect,$query)){
    // echo "sucess";
    // echo "<pre>";
    // print_r($_POST);
    // print_r($_FILES); 
    // die; 
    header('location:service.php');
}else{
    echo"failed";
    // header('location:')
}
?>  