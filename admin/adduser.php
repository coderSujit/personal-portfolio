<?php include_once("inc/header.php"); ?>
<div class="row">
  <div class="col-md-8 col-lg-8 m-auto">
    <div class="card">
      <div class="card-header text-white">
        Add User
      </div>
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" name="fname" class="form-control" placeholder="Enter First Name" id="fname"/>
            <small class="form-text text-danger"></small>
          </div>
          <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" id="lname"/>
            <small class="form-text text-danger"></small>
          </div>
          <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username" id="username"/>
            <small class="form-text text-danger"></small>
          </div>
          <div class="form-group">
            <label for="user-img">User Image</label>
            <input type="file" name="user-img" class="form-control-file" id="user-img"/>
            <small class="form-text text-danger"></small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control" placeholder="Enter Password" id="password"/>
            <small class="form-text text-danger"></small>
          </div>
          <div class="form-group">
            <input type="submit" name="adduser" value="Add User" class="btn bg-update px-5">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include_once("inc/footer.php"); ?>