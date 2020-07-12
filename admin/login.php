<!doctype html>
<html lang="en-US">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../css/all.min.css">
    <!-- Fontawesome CSS -->
    <link type="text/css" rel="stylesheet" href="../css/fontawesome.min.css">
    <!-- Jquery UI CSS -->
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/responsive.css">

    <title>Dashboard</title>
  </head>
  <body class="bg-theme bg-theme1">
    <div class="wrapper">
      <section class="login-area align-item-center">
        <div class="container">
          <div class="row">
            <div class="col-12 my-4">
              <div class="admin-area text-center">
                <h3><i class="fa fa-stethoscope mr-2 text-dark"></i>Online Service Management System</h3>
                <h4 class="mt-2"><i class="fa fa-user-secret mr-2 text-dark fa-1x"></i>Admin Area(Demo)</h4>
              </div>
            </div>
            <div class="col-md-10 col-lg-8 m-auto">
              <div class="card">
                <div class="card-header text-white text-center">
                  <h4>Admin Login</h4>
                </div>
                <div class="card-body">
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="email"><i class="fa fa-envelope mr-2"></i>Email</label>
                      <input type="text" name="email" class="form-control" placeholder="Enter Your Valid Email" id="email"/>
                      <small class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                      <label for="password"><i class="fa fa-key mr-2"></i>Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Enter Your Password" id="password"/>
                      <small class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="login" value="Login" class="btn bg-update px-5">
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center">
                  <a href="forgetpassword.php" class="btn text-white">Forget Password</a>
                </div>
              </div>
            </div>
            <div class="col-12 text-center">
              <a href="../index.php" class="btn btn-danger px-4">Go Back</a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
