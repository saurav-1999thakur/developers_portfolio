<?php
include('../admin/layout/header.php');
include('../admin/layout/sidebar.php');
 
include('../../db_con/db_conn.php');
$id=$_GET['edit_id'];
$query="SELECT * FROM `services` WHERE id='".$id."'";
$result = mysqli_query($connect,$query);
$rs=mysqli_fetch_assoc($result);
?>

<!-- add new portfolio... -->
  <!-- begin::Tables --> 
  <div class="card mb-5 mb-xl-8">
    <!--begin::Body--> 
    <div class="card-body py-3">
      <!-- <form id="form_edit"> -->
      <form action="services_update.php" method="POST" enctype="multipart/form-data">
        <!-- 2 column grid layout with text inputs for the first and last names --> 
        <input type="hidden" name="edit_id" value="<?php echo $rs['id'];?>"> 
        <!-- <div class="row mb-4"> -->
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form6Example1" name="servicename" class="form-control" value="<?php echo $rs['services_name'];?>" />
              <label class="form-label" for="form6Example1">Service Name</label>
            </div> 
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="file" id="form6Example2" name="serviceicon" class="form-control"/>
              <img src="../../assets/admin_assets/service_img/<?php echo $rs['services_icon'];?>" width="50" height="60" >
              <label class="form-label" for="form6Example2">Service Icon</label>
            </div>
          </div>
        <!-- </div> -->
        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="form6Example7" rows="4" name="descrip" ><?php echo $rs['services_description'];?></textarea>
          <label class="form-label" for="form6Example7">Description</label>
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
      </form>
    </div>
    <!-- end:body -->
  </div>
  <!-- end::table --> 
<?php
include('../admin/layout/footer.php');
?>