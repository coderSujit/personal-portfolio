<?php include_once("inc/header.php"); ?>
<div class="row">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-header text-white">
        Update Site Title and Logo
      </div>
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Title" id="title"/>
            <small class="form-text text-danger"></small>
          </div>
          <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" name="file" class="form-control-file" id="logo"/>
            <small class="form-text text-danger"></small>
          </div>
          <div class="form-group">
            <input type="submit" name="update" value="Update" class="btn bg-update px-5">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-header text-white">
        Current Logo
      </div>
      <div class="card-body">
        <img src="upload/logo/logo.png" class="img-fluid" title="Current Logo"/>
      </div>
    </div>
  </div>
</div>
<?php include_once("inc/footer.php"); ?>