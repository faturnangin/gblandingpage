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

  <body style="background-color:#f6f9fe;">
    <!-- navbar -->
    <header id="header">
      <!-- <div class="container"> -->
      <div class="row justify-content-center">
        <div class="col-lg-8">
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
                <a class="nav-item btn tombol" href="<?=BASEURL;?>"
                  ><i class="bi bi-house-up"></i
                ></a>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <!-- </div> -->
    </header>
    <!-- navbar end -->
    <!-- BreadCrumbs -->
    <section id="breadcrumbs">
      <div class="container links-header">
        <div class="row justify-content-center">
          <div class="col-10">
            <img
              class="rounded-circle mx-auto d-block mb-3"
              src="<?=BASEURL;?>/img/user.png"
              alt=""
            />
            <h3>GRAHA BAJA Purwokerto</h3>
            <h4>Solusi terpercaya untuk proyek konstruksi Anda</h4>
          </div>
        </div>
      </div>
    </section>
    <!-- BreadCrumbs Ends -->

    <section id="content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <?php foreach($data['links'] as $links) : ?>
            <a style="text-decoration:none; color:#071C4D;" href="<?=$links['link'];?>">
              <div
                class="row justify-content-between  align-items-center mb-3 links-list"
                style="padding-left:20px; padding-right:30px;"
              >
                <img src="<?=BASEURL.$links['img'];?>" class="img-fluid" />
                <h5><?=$links['name'];?></h5>
              </div>
            </a>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    </section>

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
