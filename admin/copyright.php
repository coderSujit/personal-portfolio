<?php include_once("inc/header.php"); ?>
<div class="row">
  <div class="col-sm-8 m-auto">
    <div class="card">
      <div class="card-header text-white">
        Update Copyright Text
      </div>
      <div class="card-body">
        <form action="" method="pot">
          <div class="form-group">
            <label for="copyright">Copyright</label>
            <input type="text" name="fb" class="form-control" placeholder="Enter Copyright Text" id="copyright"/>
            <small class="form-text text-danger"></small>
          </div>
          <div class="form-group">
            <input type="submit" name="update" value="Update" class="btn bg-update px-5">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include_once("inc/footer.php"); ?>