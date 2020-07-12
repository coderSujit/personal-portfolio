<?php include_once("inc/header.php"); ?>
<div class="row">
  <div class="col-sm-8 m-auto">
    <div class="card">
      <div class="card-header text-white">
        Add Slider
      </div>
      <div class="card-body">
        <form action="" method="pot" enctype="multipart/form-data">
          <div class="form-group">
            <label for="slider-1">Slider One</label>
            <input type="file" name="file" class="form-control-file" id="slider-1"/>
            <small class="form-text text-danger"></small>
          </div>
          <div class="form-group">
            <label for="slider-2">Slider Two</label>
            <input type="file" name="file" class="form-control-file" id="slider-2"/>
            <small class="form-text text-danger"></small>
          </div>
          <div class="form-group">
            <label for="slider-3">Slider Three</label>
            <input type="file" name="file" class="form-control-file" id="slider-3"/>
            <small class="form-text text-danger"></small>
          </div>
          <div class="form-group">
            <input type="submit" name="addcategory" value="Add Slider" class="btn bg-update px-5">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include_once("inc/footer.php"); ?>