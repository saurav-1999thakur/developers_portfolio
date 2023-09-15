<?php
include('../../db_con/db_conn.php');
$id=$_POST['row_id'];
    $query = "UPDATE `services` SET status='0' WHERE id='".$id."' ";
    $update = mysqli_query($connect,$query);
?>