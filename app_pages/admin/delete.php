<?php
include('../../db_con/db_conn.php');

$id=$_GET["delete_id"];
$query = "DELETE FROM `portfolio` WHERE id='".$id."'";
if(mysqli_query($connect,$query)){
    header('location: portfolio.php');
}else{
    echo "something went worng";
}
?>