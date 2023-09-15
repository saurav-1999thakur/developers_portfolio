<?php
	include('../../db_con/db_conn.php');
	$id=$_POST['edit_id'];
	
	// file target
	$target_folder = "../../assets/admin_assets/portfolio_img/";
	$target_file = $target_folder.$_FILES['portfolioicon']['name'];
	move_uploaded_file($_FILES['portfolioicon']['tmp_name'],$target_file); 

	//for removing old file


	$data = "SELECT * FROM `portfolio` WHERE id='".$id."'";
	$rest = mysqli_query($connect,$data);
	$fd=mysqli_fetch_assoc($rest);
	// echo "<pre>";
	// print_r($rest); die;
		if($_FILES['portfolioicon']['name']==''){ 
			$portfolioIcon = $fd['portfolio_icon'];
	// 		echo "<pre>";
	// print_r($portfolioIcon); die;
		}else{
			$query="SELECT `portfolio_icon` FROM `portfolio` WHERE id='".$id."'";
			$start=mysqli_query($connect,$query);
			$result = mysqli_fetch_row($start);
			$old_img = $target_folder.$result[0];
			unlink($old_img);

			// $portfolioName=$_POST['portfoName'];  
			// $tagLine=$_POST['tagLine']; 
			$portfolioIcon = $_FILES['portfolioicon']['name']; 
			// $category=$_POST['category'];
			// $description=$_POST['descrip'];

		}
			$portfolioName=$_POST['portfoName'];  
			$tagLine=$_POST['tagLine'];
			$category=$_POST['category'];
			$description=$_POST['descrip'];

			$query="UPDATE `portfolio` SET `portfolio_name`='".$portfolioName."',`tag_line`='".$tagLine."',`portfolio_icon`='".$portfolioIcon."',`categories`='".$category."',`description`='".$description."' WHERE id='".$id."'";
		
	// 	echo "<pre>";
	// print_r($query); die;

		if(mysqli_query($connect,$query)){
				// echo "Record Inserted successfully";
			header('location: portfolio.php');

		}else{
				// echo "dashboard.php";
			header('location:dashboard.php');
		}
?>