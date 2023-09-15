<?php
include('db_con/db_conn.php');
$id = $_POST['arrow'];
$query = "SELECT * FROM `portfolio` where `id` = '".$id."'";

$result = mysqli_query($connect, $query);
$select = mysqli_fetch_assoc($result);
$output['id'] = $select['id'];
$output['portfolio_name'] = $select['portfolio_name'];
$output['tag_line'] = $select['tag_line'];
$output['portfolio_icon'] = $select['portfolio_icon'];
$output['description'] = $select['description'];
echo json_encode($output);
?>