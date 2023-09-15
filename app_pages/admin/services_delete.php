<?php
include('../../db_con/db_conn.php');

$id=$_POST['delete_id'];
// pre($id); die;

// delete photo from database
$query="SELECT `services_icon` FROM `services` WHERE id='".$id."'";
$start=mysqli_query($connect,$query);
$result = mysqli_fetch_row($start);
// pre($result); die;

$target_folder = "../../assets/admin_assets/service_img/";
$old_img = $target_folder.$result[0];
unlink($old_img);
 
// delete data from database
$query="DELETE FROM `services` WHERE id='".$id."'";

if(mysqli_query($connect, $query)){
    // header('location:service.php');
    // alert("ops");die;
    echo "success";
}else{
    header('location:service.php');
} 
?>    