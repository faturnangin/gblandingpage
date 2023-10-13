<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Graha Baja</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Assistant&family=Inter&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="<?= BASEURL; ?>/lib/bootstrap/css/bootstrap.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="<?=BASEURL;?>/css/main/main.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="<?= BASEURL; ?>/lib/glightbox/css/glightbox.min.css"
    />
  </head>

  <body>
    <!-- navbar -->
    <header id="header">
      <!-- <div class="container"> -->
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <nav
            class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-white"
          >
            <a class="navbar-brand" href="<?=BASEURL;?>">CV GRAHA BAJA</a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup"
              aria-expanded="false"
              aria-label="Toggle navigation"
              style="border: 0px"
            >
              <!-- <i class="bi bi-list-nested"></i> -->
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="<?=BASEURL;?>"
                  >Home <span class="sr-only">(current)</span></a
                >
                <a class="nav-item nav-link scrollto" href="<?=BASEURL;?>/home/#services"
                  >Layanan Kami</a
                >
                <a class="nav-item nav-link scrollto" href="<?=BASEURL;?>/home/about"
                  >Tentang Perusahaan</a
                >
                <a class="nav-item nav-link active" href="<?=BASEURL;?>/home/portfolio">Portofolio</a>
                <a class="nav-item btn tombol" href="<?=BASEURL;?>/home/links">Kontak</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <!-- </div> -->
    </header>
    <!-- navbar end -->
    <!-- BreadCrumbs -->
    <section id="breadcrumbs" class="section-bg">
      <div class="container">
        <ol>
          <li><a href="<?=BASEURL;?>">Beranda</a></li>
          <li><a href="#">Portofolio</a></li>
        </ol>
      </div>
    </section>
    <!-- BreadCrumbs Ends -->
    <section id="content">
      <div class="container">
      <?php foreach($data['allportfolio'] as $allportfolio) : ?>
        <div class="row align-items-center content-wrapper mb-3">
          <div class="col-lg-6">
            <div class="img-about">
              <img src="<?=BASEURL.$allportfolio['img'];?>" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-6 project-info">
            <h3><?=$allportfolio['name'];?></h3>
            <ul>
              <li><strong>Kategori</strong> : <?=$allportfolio['category'];?></li>
              <li><strong>Klien</strong> : <?=$allportfolio['client'];?></li>
              <li><strong>Lokasi</strong> : <?=$allportfolio['location'];?></li>
              <li><strong>Tanggal Pelaksanaan</strong> : <?=$allportfolio['date'];?></li>
            </ul>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- bottom -->
    <div class="row bottom border-top">
      <div class="col-lg bottomleft">
        <h5>Site Map</h5>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
        </ul>
      </div>
      <div class="col-lg bottomright">
        <h5>Get Connected</h5>
        <ul class="list-unstyled">
          <li>CV Graha Baja</li>
          <li>Purwokerto, Indonesia</li>
        </ul>
      </div>
    </div>
    <!-- bottom end -->
    
    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- javascript -->
    <script src="<?=BASEURL;?>/lib/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?=BASEURL;?>/lib/bootstrap/js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?=BASEURL;?>/lib/glightbox/js/glightbox.min.js"></script>
    <script src="<?=BASEURL;?>/lib//isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?=BASEURL;?>/js/main/main.js"></script>
  </body>
</html>
