<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>public/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?= base_url(); ?>public/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>public/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url(); ?>public/images/Canteen-Logo.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div style="text-align: center;">
                <img src="<?= base_url(); ?>public/images/Canteen-Logo.png" alt="Logo" height="100px" />
              </div>
              <h4>Bemvidu Kantina Login</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form method="POST" action="<?= base_url('/auth/login') ?>" class="needs-validation" novalidate="">


                <div class="form-group">
                  <label for="email">Username</label>
                  <input id="username" type="text" class="form-control" name="username" tabindex="1" required>
                  <div class="invalid-feedback">
                    Please fill in your email
                  </div>
                </div>

                <div class="form-group">
                  <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                    <div class="float-right">
                    </div>
                  </div>
                  <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                  <div class="invalid-feedback">
                    please fill in your password
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-rounded btn-fw" tabindex="4">
                    Login
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="#" class="text-primary">Create</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="<?= base_url(); ?>public/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>public/js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>public/js/hoverable-collapse.js"></script>
  <script src="<?= base_url(); ?>public/js/template.js"></script>
  <script src="<?= base_url(); ?>public/js/settings.js"></script>
  <script src="<?= base_url(); ?>public/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>