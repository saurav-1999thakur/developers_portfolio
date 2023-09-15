<?php 
include('../../db_con/db_conn.php');
$id=$_POST['delete_id'];

// delete photo from database
$query="SELECT `portfolio_icon` FROM `portfolio` WHERE id='".$id."'";
$start=mysqli_query($connect, $query);
$result = mysqli_fetch_row($start);
$target_folder = "../../assets/admin_assets/portfolio_img/";
$old_img = $target_folder.$result[0];
unlink($old_img);

// delete data from database 
$query="DELETE FROM `portfolio` WHERE id='".$id."'";
 
if(mysqli_query($connect,$query)){
    // header('location:portfolio.php');
    echo "success";
}else{
    header('location:portfolio.php');
}
?>  