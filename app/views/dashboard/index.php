<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
      name="viewport"
    />
    <title><?=$data['title'];?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/lib/fontawesome/css/all.css">


    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?=BASEURL?>/lib/summernote/summernote-bs4.css" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=BASEURL;?>/css/dashboard/style.css" />
    <link rel="stylesheet" href="<?=BASEURL;?>/css/dashboard/components.css" />
  </head>

  <body>
    <div id="app">
      <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
          <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
              <li>
                <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"
                  ><i class="fas fa-bars"></i
                ></a>
              </li>
            </ul>
          </form>
          <ul class="navbar-nav navbar-right">
            <li class="dropdown">
              <a
                href="#"
                data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user"
              >
                <i class="fas fa-user-circle"></i>
                <div class="d-sm-none d-lg-inline-block">
                  Hi, Administrator
                </div></a
              >
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in</div>
                <a href="<?=BASEURL;?>/dashboard/userprofile" class="dropdown-item has-icon">
                  <i class="far fa-user"></i> Profile Setup
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?=BASEURL;?>/auth/logout/" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
          <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
              <a href="index.html">Admin</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
              <a href="index.html">Ad</a>
            </div>

            <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href="<?=BASEURL.'/dashboard';?>" class="nav-link"
                  ><i class="fas fa-user-cog"></i><span>Dashboard</span></a
                >
              </li>
              <li class="menu-header">Home Page</li>

              <li class="nav-item dropdown">
                <a href="" class="nav-link has-dropdown"
                  ><i class="fas fa-home"></i> <span>Beranda</span></a
                >
                <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="<?=BASEURL;?>/dashboard/beranda/#header"
                      ><i class="fas fa-heading"></i>Header</a
                    >
                  </li>
                  <li>
                    <a class="nav-link" href="<?=BASEURL;?>/dashboard/beranda/#about"
                      ><i class="fas fa-info-circle"></i>Tentang</a
                    >
                  </li>
                  <li>
                    <a class="nav-link" href="<?=BASEURL;?>/dashboard/beranda/#services"
                      ><i class="fas fa-briefcase"></i>Layanan</a
                    >
                  </li>
                  <li>
                    <a class="nav-link" href="<?=BASEURL;?>/dashboard/beranda/#keyfeatures"
                      ><i class="fas fa-trophy"></i>Nilai Perusahaan</a
                    >
                  </li>
                  <li>
                    <a class="nav-link" href="<?=BASEURL;?>/dashboard/beranda/#contact"
                      ><i class="fas fa-id-card"></i>Kontak</a
                    >
                  </li>
                  <li>
                    <a class="nav-link" href="<?=BASEURL;?>/dashboard/beranda/#portfolio"
                      ><i class="fas fa-file-alt"></i>Portfolio</a
                    >
                  </li>
                </ul>
              </li>

              <li>
                <a class="nav-link" href="<?=BASEURL.'/dashboard/about';?>"
                  ><i class="fas fa-info"></i> <span>Company Profile</span></a
                >
              </li>

              <li>
                <a class="nav-link" href="<?=BASEURL.'/dashboard/services';?>"
                  ><i class="fas fa-file-alt"></i></i><span>Katalog Layanan</span></a
                >
              </li>

              <li>
                <a class="nav-link" href="<?=BASEURL.'/dashboard/portfolio';?>"
                  ><i class="fas fa-file-contract"></i>
                  <span>Portofolio</span></a
                >
              </li>

              <li>
                <a class="nav-link" href="<?=BASEURL.'/dashboard/links';?>"
                  ><i class="fas fa-link"></i><span>Daftar Link</span></a
                >
              </li>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a
                href="<?=BASEURL;?>"
                class="btn btn-primary btn-lg btn-block btn-icon-split"
              >
                <i class="fas fa-external-link-alt"></i>Kunjungi Website
              </a>
            </div>
          </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="section-header">
              <h1>Dashboard</h1>
            </div>
            <div class="row">
              <div class="col-12 mb-4">
                <div class="hero bg-primary text-white">
                  <div class="hero-inner">
                    <h2>Selamat Datang Kembali, Admin</h2>
                    <p class="lead">
                      Anda dapat mengubah isi website dan juga mengubah
                      informasi akun.
                    </p>
                    <div class="mt-4">
                      <a
                        href="<?=BASEURL;?>/dashboard/userprofile"
                        class="btn btn-outline-white btn-lg btn-icon icon-left"
                        ><i class="far fa-user"></i> Setup Account</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </section>
        </div>
        <footer class="main-footer">
          <div class="footer-left">
            Copyright &copy; 2018
            <div class="bullet"></div>
            Stisla
          </div>
          <div class="footer-right">2.3.0</div>
        </footer>
      </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?=BASEURL;?>/lib/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?=BASEURL;?>/lib/popper/popper.min.js"></script>
    <script src="<?=BASEURL;?>/lib/bootstrap/js/bootstrap.js"></script>
    <script src="<?=BASEURL;?>/lib/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?=BASEURL;?>/js/dashboard/stisla.js"></script>



    <!-- JS Libraies -->
    <script src="<?=BASEURL?>/lib/summernote/summernote-bs4.js"></script>

    <!-- Template JS File -->
    <script src="<?=BASEURL;?>/js/dashboard/scripts.js"></script>
    <script src="<?=BASEURL;?>/js/dashboard/custom.js"></script>

  </body>
</html>
