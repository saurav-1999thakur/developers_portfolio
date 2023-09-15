<?php 
include('../admin/layout/header.php');
include('../admin/layout/sidebar.php');
?>
<!-- add new portfolio... -->
  <!-- begin::Tables --> 
  <div class="card mb-5 mb-xl-8">
    <!--begin::Body-->
    <div class="card-body py-3">
      <form action="portfolio_insert.php" method="POST" enctype="multipart/form-data" >
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form6Example1" name="portfoName" class="form-control" />
              <label class="form-label" for="form6Example1">Name</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form6Example2" name="tagLine" class="form-control" />
              <label class="form-label" for="form6Example2">Tag Line</label>
            </div>
          </div>
        </div> 
        <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="file" id="form6Example3" name="portfolioicon" class="form-control" />
          <label class="form-label" for="form6Example3">Icon</label>
        </div>
        <div class="form-outline mb-4">
          <input type="text" id="form6Example3" name="category" class="form-control" />
          <label class="form-label" for="form6Example3">Category</label>
        </div>
        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="form6Example7" rows="4" name="descrip"></textarea>
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