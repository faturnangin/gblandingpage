<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?=$data['judul'];?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= BASEURL; ?>/lib/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/lib/fontawesome/css/all.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=BASEURL;?>/css/dashboard/style.css">
  <link rel="stylesheet" href="<?=BASEURL;?>/css/dashboard/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?=BASEURL?>/img/user.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>
            <?php Flasher::flash(); ?>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="<?=BASEURL;?>/auth/login">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your username
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="<?=BASEURL;?>/auth/register">Daftar</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?=BASEURL;?>/lib/jquery/jquery-3.4.1.min.js"></script>
  <script src="<?=BASEURL;?>/lib/popper/popper.min.js"></script>
  <script src="<?=BASEURL;?>/lib/bootstrap/js/bootstrap.js"></script>
  <script src="<?=BASEURL;?>/lib/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?=BASEURL;?>/js/dashboard/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?=BASEURL;?>/js/dashboard/scripts.js"></script>
  <script src="<?=BASEURL;?>/js/dashboard/custom.js"></script>

</body>
</html>