<?php
include('../../db_con/db_conn.php');
$id=$_POST['edit_id'];

	// file target
	$target_folder = "../../assets/admin_assets/service_img/";
	$target_file = $target_folder.$_FILES['serviceicon']['name'];
	move_uploaded_file($_FILES['serviceicon']['tmp_name'],$target_file); 

	//for removing old file

	$data = "SELECT * FROM `services` WHERE id = '".$id."'";
	$rest = mysqli_query($connect,$data);
	$fd = mysqli_fetch_assoc($rest);
	// echo "<pre>";
	// print_r($fd); die;
	if($_FILES['serviceicon']['name']==''){
		$serviceIcon = $fd['services_icon'];
	}else{
		$query="SELECT `services_icon` FROM `services` WHERE id='".$id."'";
		$start=mysqli_query($connect,$query);
		$result = mysqli_fetch_row($start);
		$old_img = $target_folder.$result[0];
		unlink($old_img); 

		$serviceIcon=$_FILES['serviceicon']['name'];
	}
	
	$serviceName=$_POST['servicename']; 
	$serviceDescription=$_POST['descrip']; 

	$query="UPDATE `services` SET `services_name`='".$serviceName."',`services_icon`='".$serviceIcon."',`services_description`='".$serviceDescription."' WHERE id='".$id."'";
			if(mysqli_query($connect,$query)){ 
				// echo "success"; 
				header('location: service.php'); 

			}else{
				header('location:dashboard.php');
				// echo "failed";
			}

?>