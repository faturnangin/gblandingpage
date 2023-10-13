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
    <link
      rel="stylesheet"
      href="<?= BASEURL; ?>/lib/bootstrap/css/bootstrap.css"
    />
    <link rel="stylesheet" href="<?= BASEURL; ?>/lib/fontawesome/css/all.css" />

    <!-- CSS Libraries -->
    <link
      rel="stylesheet"
      href="<?=BASEURL?>/lib/summernote/summernote-bs4.css"
    />

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
                <a
                  href="<?=BASEURL;?>/auth/logout/"
                  class="dropdown-item has-icon text-danger"
                >
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
              <li class="nav-item dropdown">
                <a href="<?=BASEURL.'/dashboard';?>" class="nav-link"
                  ><i class="fas fa-user-cog"></i><span>Dashboard</span></a
                >
              </li>
              <li class="menu-header">Home Page</li>

              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"
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
              <h1>Kelola Beranda</h1>
            </div>

            <div class="row">
              <div class="col-lg-12 col-sm-6">
                <?php Flasher::flash(); ?>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-sm-6 col-lg-7">
                <div class="card">
                  <div id="header" class="card-header">
                    <h4>Header</h4>
                    <div class="card-header-action">
                      <a
                        data-collapse="#mycard-collapse"
                        class="btn btn-icon btn-info"
                        href="#"
                        ><i class="fas fa-minus"></i
                      ></a>
                    </div>
                  </div>
                  <div class="collapse show" id="mycard-collapse">
                    <form
                      action="<?=BASEURL;?>/dashboard/editheader"
                      method="post"
                      enctype="multipart/form-data"
                    >
                      <div class="card-body pb-0">
                        <div class="form-group">
                          <label>Headline</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="far fa-newspaper"></i>
                              </div>
                            </div>
                            <input
                              name="headline"
                              type="text"
                              class="form-control"
                              value="<?=$data['header']['headline'];?>"
                            />
                          </div>

                          <label class="mt-3">Deck</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-quote-right"></i>
                              </div>
                            </div>
                            <input
                              name="deck"
                              type="text"
                              class="form-control"
                              value="<?=$data['header']['deck'];?>"
                            />
                          </div>

                          <label class="mt-3">Background</label>
                          <input
                            type="hidden"
                            name="oldimg"
                            value="<?=$data['header']['bg'];?>"
                            id="oldimg"
                          />
                          <div class="mb-3">
                            <img
                              alt="image"
                              src="<?=BASEURL.$data['header']['bg'];?>"
                              class="img-fluid"
                            />
                          </div>
                          <div class="custom-file">
                            <input
                              type="file"
                              name="newimg"
                              class="custom-file-input"
                              id="customFile"
                            />
                            <label class="custom-file-label" for="customFile"
                              >Choose file</label
                            >
                          </div>
                          <div class="mt-3">
                            <button type="submit" class="btn btn-primary">
                              Edit Header
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- About -->
              <div class="col-12 col-sm-6 col-lg-5">
                <div class="card">
                  <div id="about" class="card-header">
                    <h4>Tentang</h4>
                    <div class="card-header-action">
                      <a
                        data-collapse="#aboutus"
                        class="btn btn-icon btn-info"
                        href="#"
                        ><i class="fas fa-minus"></i
                      ></a>
                    </div>
                  </div>
                  <div class="collapse show" id="aboutus">
                    <form
                      action="<?=BASEURL;?>/dashboard/editabout"
                      method="post"
                      enctype="multipart/form-data"
                    >
                      <div class="card-body pb-0">
                        <div class="form-group">
                          <label>Thumbnail</label>
                          <input
                            type="hidden"
                            name="oldimg"
                            value="<?=$data['about']['img'];?>"
                            id="oldimg"
                          />
                          <div class="mb-3">
                            <img
                              alt="image"
                              src="<?=BASEURL.$data['about']['img'];?>"
                              class="img-fluid"
                            />
                          </div>
                          <div class="custom-file">
                            <input
                              type="file"
                              name="newimg"
                              class="custom-file-input"
                              id="customFile"
                            />
                            <label class="custom-file-label" for="customFile"
                              >Choose file</label
                            >
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Content</label>
                          <textarea name="content" class="summernote-simple">
                          <?=$data['about']['content'];?>
                          </textarea>
                          <div class="mt-3">
                            <button type="submit" class="btn btn-primary">
                              Edit Tentang
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- Services -->
              <div class="col-12 col-sm-6 col-lg-5">
                <div class="card">
                  <div id="services" class="card-header">
                    <h4>Layanan</h4>
                    <div class="card-header-action">
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-toggle="modal"
                        data-target="#addservices"
                      >
                        Tambah Data
                      </button>
                      <a
                        data-collapse="#services"
                        class="btn btn-icon btn-info"
                        href="#"
                        ><i class="fas fa-minus"></i
                      ></a>
                    </div>
                  </div>
                  <div class="collapse show" id="services">
                    <div class="table-responsive">
                      <table class="table table-striped mb-0">
                        <thead>
                          <tr>
                            <th hidden>id</th>
                            <th>Layanan</th>
                            <th>Thumbnail</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($data['services'] as $services) : ?>
                          <tr>
                            <td hidden><?=$services['id']; ?></td>
                            <td>
                              <?=$services['service'];?>
                            </td>
                            <td>
                              <img
                                src="<?=BASEURL.$services['img'];?>"
                                alt="avatar"
                                class="img-fluid"
                                style="height: 100px; margin: 5px 0px 5px 0px"
                              />
                            </td>
                            <td>
                              <a
                                class="btn btn-primary btn-action mr-1"
                                title="Edit"
                                data-toggle="modal"
                                data-target="#editservice<?=$services['id'];?>"
                                ><i class="fas fa-pencil-alt"></i
                              ></a>
                              <a
                                class="btn btn-danger btn-action"
                                data-toggle="tooltip"
                                title="Delete"
                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                data-confirm-yes="location.href='<?=BASEURL;?>/dashboard/deleteservice/<?=$services['id'];?>'"
                                ><i class="fas fa-trash"></i
                              ></a>
                            </td>
                          </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- KeyFeatures -->
              <div class="col-12 col-sm-6 col-lg-7">
                <div class="card">
                  <div id="keyfeatures" class="card-header">
                    <h4>Nilai Perusahaan</h4>
                    <div class="card-header-action">
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-toggle="modal"
                        data-target="#modal-addkeyfeatures"
                      >
                        Tambah Data
                      </button>
                      <a
                        data-collapse="#keyfeatures"
                        class="btn btn-icon btn-info"
                        href="#"
                        ><i class="fas fa-minus"></i
                      ></a>
                    </div>
                  </div>
                  <div class="collapse show" id="keyfeatures">
                    <div class="table-responsive">
                      <table class="table table-striped mb-0">
                        <thead>
                          <tr>
                            <th hidden>id</th>
                            <th>Nilai</th>
                            <th>Keterangan</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($data['keyfeatures'] as $keyfeatures) : ?>
                          <tr>
                            <td hidden><?=$keyfeatures['id']; ?></td>
                            <td>
                              <img
                                src="<?=BASEURL.$keyfeatures['img'];?>"
                                alt="avatar"
                                width="30"
                                class="rounded-circle mr-1"
                              />
                              <?=$keyfeatures['nilai'];?>
                            </td>
                            <td>
                              <?=$keyfeatures['keterangan'];?>
                            </td>
                            <td>
                              <a
                                class="btn btn-primary btn-action mr-1"
                                title="Edit"
                                data-toggle="modal"
                                data-target="#ekf<?=$keyfeatures['id'];?>"
                                ><i class="fas fa-pencil-alt"></i
                              ></a>
                              <a
                                class="btn btn-danger btn-action"
                                data-toggle="tooltip"
                                title="Delete"
                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                data-confirm-yes="location.href='<?=BASEURL;?>/dashboard/deletekeyfeatures/<?=$keyfeatures['id'];?>'"
                                ><i class="fas fa-trash"></i
                              ></a>
                            </td>
                          </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- Contacts -->
              <div class="col-12 col-sm-6 col-lg-5">
                <div class="card">
                  <div id="contact" class="card-header">
                    <h4>Kontak</h4>
                    <div class="card-header-action">
                      <a
                        data-collapse="#contacts"
                        class="btn btn-icon btn-info"
                        href="#"
                        ><i class="fas fa-minus"></i
                      ></a>
                    </div>
                  </div>
                  <div class="collapse show" id="contacts">
                    <form
                      action="<?=BASEURL;?>/dashboard/editcontacts"
                      method="post"
                    >
                      <div class="card-body pb-0">
                        <div class="form-group">
                          <label>Alamat</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-map-marker-alt"></i>
                              </div>
                            </div>
                            <input
                              name="adress"
                              type="text"
                              class="form-control"
                              value="<?=$data['contacts']['adress'];?>"
                              required
                            />
                          </div>

                          <label class="mt-3">Email</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-at"></i>
                              </div>
                            </div>
                            <input
                              name="email"
                              type="text"
                              class="form-control"
                              value="<?=$data['contacts']['email'];?>"
                              required
                            />
                          </div>

                          <label class="mt-3">Telepon</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-mobile-alt"></i>
                              </div>
                            </div>
                            <input
                              name="phone"
                              type="text"
                              class="form-control"
                              value="<?=$data['contacts']['phone'];?>"
                              required
                            />
                          </div>

                          <label class="mt-3">Google Maps Embed</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-map-marked-alt"></i>
                              </div>
                            </div>
                            <input
                              name="maps"
                              type="text"
                              class="form-control"
                              value="<?=$data['contacts']['maps'];?>"
                              required
                            />
                          </div>

                          <div class="mt-3">
                            <button type="submit" class="btn btn-primary">
                              Edit Info Kontak
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Portfolio -->
              <div class="col-12 col-sm-6 col-lg-7">
                <div class="card">
                  <div id="portfolio" class="card-header">
                    <h4>Portofolio</h4>
                    <div class="card-header-action">
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-toggle="modal"
                        data-target="#addportfolio"
                      >
                        Tambah Data
                      </button>
                      <a
                        data-collapse="#portfolio"
                        class="btn btn-icon btn-info"
                        href="#"
                        ><i class="fas fa-minus"></i
                      ></a>
                    </div>
                  </div>
                  <div class="collapse show" id="portfolio">
                    <div class="table-responsive">
                      <table class="table table-striped mb-0">
                        <thead>
                          <tr>
                            <th hidden>id</th>
                            <th>Judul</th>
                            <th>Lokasi</th>
                            <th>Thumbnail</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($data['portfolio'] as $portfolio) : ?>
                          <tr>
                            <td hidden><?=$portfolio['id']; ?></td>
                            <td>
                              <?=$portfolio['title'];?>
                            </td>
                            <td>
                              <?=$portfolio['location'];?>
                            </td>
                            <td>
                              <img
                                src="<?=BASEURL.$portfolio['img'];?>"
                                alt="avatar"
                                class="img-fluid"
                                style="height: 100px; margin: 5px 0px 5px 0px"
                              />
                            </td>
                            <td>
                              <a
                                class="btn btn-primary btn-action mr-1"
                                title="Edit"
                                data-toggle="modal"
                                data-target="#editporto<?=$portfolio['id'];?>"
                                ><i class="fas fa-pencil-alt"></i
                              ></a>
                              <a
                                class="btn btn-danger btn-action"
                                data-toggle="tooltip"
                                title="Delete"
                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                data-confirm-yes="location.href='<?=BASEURL;?>/dashboard/deleteportfolio/<?=$portfolio['id'];?>'"
                                ><i class="fas fa-trash"></i
                              ></a>
                            </td>
                          </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
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

    <!-- Validate Img Form -->
    <script>
      function validateImageInput() {
        const imageInputs = document.querySelectorAll('input[type="file"]');
        const allowedTypes = ["jpg", "jpeg", "png", "webp"];
        const maxSize = 2 * 1024 * 1024;

        imageInputs.forEach(function (input) {
          input.addEventListener("change", function () {
            const file = input.files[0];
            if (!file) return;
            const fileName = file.name.toLowerCase();
            const fileSize = file.size;
            const fileType = fileName.split(".").pop();

            if (!allowedTypes.includes(fileType)) {
              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: "Format file tidak didukung.",
              });
              input.value = "";
              return false;
            }

            if (fileSize > maxSize) {
              Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: "Ukuran file terlalu besar.",
              });
              input.value = "";
              return false;
            }

            return true;
          });
        });
      }
      validateImageInput();
    </script>
    
    <!-- General JS Scripts -->
    <script src="<?=BASEURL;?>/lib/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?=BASEURL;?>/lib/popper/popper.min.js"></script>
    <script src="<?=BASEURL;?>/lib/bootstrap/js/bootstrap.js"></script>
    <script src="<?=BASEURL;?>/lib/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?=BASEURL;?>/js/dashboard/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?=BASEURL?>/lib/summernote/summernote-bs4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Template JS File -->
    <script src="<?=BASEURL;?>/js/dashboard/scripts.js"></script>
    <script src="<?=BASEURL;?>/js/dashboard/custom.js"></script>
  </body>
</html>
