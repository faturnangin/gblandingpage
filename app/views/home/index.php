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
                <a class="nav-item nav-link active" href="<?=BASEURL;?>"
                  >Home <span class="sr-only">(current)</span></a
                >
                <a class="nav-item nav-link scrollto" href="<?=BASEURL.'/home/services'?>"
                  >Layanan Kami</a
                >
                <a class="nav-item nav-link scrollto" href="#aboutus"
                  >Tentang Perusahaan</a
                >
                <a class="nav-item nav-link" href="#portfolio">Portofolio</a>
                <a class="nav-item btn tombol" href="<?=BASEURL.'/home/links'?>"
                  >Kontak</a
                >
              </div>
            </div>
          </nav>
        </div>
      </div>
      <!-- </div> -->
    </header>
    <!-- navbar end -->

    <!-- jumbotron -->
    <div
      class="jumbotron jumbotron-fluid"
      style="
        background-image: url('<?=BASEURL.$data['header']['bg'];?>');
        background-size: cover;
      "
    >
      <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1><?=$data['header']['headline'];?></h1>
        <h2><?=$data['header']['deck'];?></h2>
        <div class="d-flex justify-content-center">
          <a href="#aboutus" class="btn btn-outline-light">Selengkapnya</a>
        </div>
      </div>
    </div>
    <!-- jumbotron end -->

    <!-- panels -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10 panels">
          <div class="row justify-content-center">
            <?php foreach($data['keyfeatures'] as $keyfeatures) : ?>
            <div class="col-lg-3 col-md-6">
              <div class="float-left">
                <img src="<?=BASEURL.$keyfeatures['img'];?>" alt="header-bg" />
              </div>
              <h4><?=$keyfeatures['nilai'];?></h4>
              <p><?=$keyfeatures['keterangan'];?></p>
            </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
    <!-- panels end -->

    <!-- Services -->
    <section id="services" class="services section-bg">
      <div class="container services" data-aos="fade-up">
        <div class="section-title">
          <h2>Layanan <i class="bi bi-info-square"></i></h2>
        </div>

        <!-- New Services -->
        <div class="row justify-content-center">
          <?php foreach($data['services'] as $services) : ?>
          <div
            class="col-lg-3 col-md-6"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div
              class="box"
              style="background-image: url(<?=BASEURL.$services['img'];?>)"
            >
              <h3><?=$services['service'];?></h3>
            </div>
          </div>
          <?php endforeach ?>
        </div>
        <!-- New Services -->
      </div>
    </section>
    <!-- Services Ends -->

    <!-- About Us -->
    <section id="aboutus" class="aboutus">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Tentang Kami <i class="bi bi-file-earmark-person"></i></h2>
        </div>

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="img-about">
              <img
                src="<?=BASEURL.$data['about']['img'];?>"
                class="img-fluid"
              />
            </div>
          </div>
          <div class="col-lg-6">
            <?=$data['about']['content'];?>
            <a href="<?=BASEURL.'/home/about';?>" class="btn tombolenable mt-3"
              >Selengkapnya</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- About Us Ends -->

    <!-- EXPERIMENTAL -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Portfolio <i class="bi bi-briefcase"></i></h2>
        </div>

        <div
          class="row portfolio-container"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <?php foreach($data['portfolio'] as $portfolio) : ?>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <img
              src="<?=BASEURL.$portfolio['img'];?>"
              class="img-fluid"
              alt=""
            />
            <div class="portfolio-info">
              <h4><?=$portfolio['title'];?></h4>
              <p><?=$portfolio['location'];?></p>
              <a
                href="<?=BASEURL.$portfolio['img'];?>"
                data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link"
                ><i class="bi bi-zoom-in"></i
              ></a>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
      <div class="row justify-content-center">
        <a href="<?=BASEURL.'/home/portfolio';?>" class="btn tombolenable mt-3">Selengkapnya</a>
      </div>
    </section>
    <!-- End Portfolio Section -->
    <!-- EXPERIMENTAL -->

    <!-- Contact Us -->
    <section class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Hubungi Kami <i class="bi bi-person-lines-fill"></i></h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <iframe
              class="mb-4 mb-lg-0"
              src="<?=$data['contacts']['maps'];?>"
              frameborder="0"
              style="border: 0; width: 100%; height: 405.56px"
              allowfullscreen
            ></iframe>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col">
                <div class="info-box mb-4">
                  <i class="bi bi-map"></i>
                  <h4>Alamat</h4>
                  <p><?=$data['contacts']['adress'];?></p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="info-box mb-4">
                  <i class="bi bi-envelope-at"></i>
                  <h4>E-Mail</h4>
                  <p><?=$data['contacts']['email'];?></p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="info-box mb-4">
                  <i class="bi bi-whatsapp"></i>
                  <h4>Telepon</h4>
                  <p><?=$data['contacts']['phone'];?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Us End -->

    <!-- bottom -->
    <div class="row bottom border-top">
      <div class="col-lg bottomleft">
        <h5>Site Map</h5>
        <ul class="list-unstyled">
          <li><a href="<?=BASEURL;?>">Beranda</a></li>
          <li><a href="<?=BASEURL;?>/home/about">Tentang</a></li>
          <li><a href="<?=BASEURL;?>/home/portfolio">Portofolio</a></li>
          <li><a href="<?=BASEURL;?>/home/links">Link</a></li>
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
