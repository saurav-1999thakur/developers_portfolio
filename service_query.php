<?php
include('db_con/db_conn.php');
$id = $_POST['dataId'];
$query = "SELECT * FROM `services` where `id` = '".$id."'";

$result = mysqli_query($connect, $query); 
$select = mysqli_fetch_assoc($result);
// $output = array();

$output['id'] = $select['id'];
$output['services_name'] = $select['services_name'];
$output['services_icon'] = $select['services_icon'];
$output['services_description'] = $select['services_description'];

// print_r($output);
echo json_encode($output);
?>