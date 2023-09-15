<?php
    include('../../db_con/db_conn.php');
    //file uploade
    $target_folder = "../../assets/admin_assets/portfolio_img/";
    $target_file = $target_folder.$_FILES['portfolioicon']['name'];
    //   $ext = pathinfo($_FILES['portfolioicon']['name'], PATHINFO_EXTENSION);
    //   $rand = md5(uniqid().rand());
    //   $post_image = $rand.".".$ext;
    //   move_uploaded_file($target_file,"../../assets/admin_assets/portfolio_img/".$post_image);

    move_uploaded_file($_FILES['portfolioicon']['tmp_name'],$target_file);

    //Find file extension of photo
    // $newfilename = "thisnameexactly";
    // $ext = end(explode('.', $_FILES['portfolioicon']['name']));
    // $newfilename = $newfilename . "." . $ext;
    // if(move_uploaded_file($_FILES['portfolioicon']['tmp_name'], $target_file)){
    //     echo "image successfully uploaded";
    //  }
    //  else { 
    //     echo "Sorry, there was a problem uploading your file.";
    //  }

    // echo "<pre>";
    // print_r($_POST);
    // print_r($_FILES); 
    // die;

    // add new portfolio insert....
    $name = $_POST['portfoName'];
    $tagline = $_POST['tagLine']; 
    $portfolioIcon = $_FILES['portfolioicon']['name']; 
    $category = $_POST['category'];
    $description = $_POST['descrip'];

    $query="INSERT INTO `portfolio`(`portfolio_name`,`tag_line`,`portfolio_icon`,`categories`,`description`) VALUES('".$name."','".$tagline."','".$portfolioIcon."','".$category."','".$description."')";
    if(mysqli_query($connect,$query)){
        // echo"insert sucess";
        header('location:portfolio.php');
    }else{
        // echo"sorry";
        header('location:portfolio_insert_form.php');
    }
?>