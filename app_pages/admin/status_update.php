<?php
include('../../db_con/db_conn.php');
$id=$_POST['row_id'];
$status_id = $_POST['status_id'];
    $query = "UPDATE `services` SET status='".$status_id."' WHERE id='".$id."' ";
    $update = mysqli_query($connect,$query);
?>