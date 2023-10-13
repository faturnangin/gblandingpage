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

              <li class="nav-item dropdown">
                <a
                  href="<?=BASEURL;?>/dashboard/beranda"
                  class="nav-link has-dropdown"
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

              <li class="active">
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
              <h1>Kelola Link</h1>
            </div>

            <div class="row">
              <div class="col-lg-12 col-sm-6">
                <?php Flasher::flash(); ?>
              </div>
            </div>

            <div class="row">
              <div class="col-12 mb-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Daftar Link</h4>
                    <div class="card-header-action">
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-toggle="modal"
                        data-target="#addlinks"
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
                            <th>Url</th>
                            <th>Icon</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($data['links'] as $links) : ?>
                          <tr>
                            <td hidden><?=$links['id']; ?></td>
                            <td>
                              <?=$links['name'];?>
                            </td>
                            <td>
                              <?=$links['link'];?>
                            </td>
                            <td>
                              <img
                                src="<?=BASEURL.$links['img'];?>"
                                alt="icon"
                                class="img-fluid"
                                style="
                                  height: 50px;
                                  width: 50px;
                                  margin: 5px 0px 5px 0px;
                                "
                              />
                            </td>
                            <td>
                              <a
                                style="margin: 5px 0px 5px 0px"
                                class="btn btn-primary btn-action mr-1"
                                title="Edit"
                                data-toggle="modal"
                                data-target="#editlink<?=$links['id'];?>"
                                ><i class="fas fa-pencil-alt"></i
                              ></a>
                              <a
                                style="margin: 5px 0px 5px 0px"
                                class="btn btn-danger btn-action"
                                data-toggle="tooltip"
                                title="Delete"
                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                data-confirm-yes="location.href='<?=BASEURL;?>/dashboard/deletelink/<?=$links['id'];?>'"
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

    <!-- Modal tambah links -->
    <div
      class="modal fade"
      id="addlinks"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">
              Form Tambah Data
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form
              action="<?=BASEURL;?>/dashboard/addlink"
              method="post"
              enctype="multipart/form-data"
            >
              <div class="form-group">
                <label for="name">Judul</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                  required
                />
              </div>

              <div class="form-group">
                <label for="link">Url</label>
                <input
                  type="text"
                  class="form-control"
                  id="link"
                  name="link"
                  value="http://"
                  required
                />
              </div>
              
              <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input
                  type="file"
                  class="form-control-file"
                  id="newimg"
                  name="newimg"
                  required
                />
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Batal
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal edit links -->
    <?php foreach ($data['links'] as $links) : ?>
    <div
      class="modal fade"
      id="editlink<?=$links['id'];?>"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">
              Form Edit Data
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form
              action="<?=BASEURL;?>/dashboard/editlink"
              method="post"
              enctype="multipart/form-data"
            >
              <div class="form-group">
                <input
                  name="id"
                  type="hidden"
                  class="form-control"
                  required
                  autofocus
                  value="<?=$links['id'];?>"
                />
                <label for="name">Judul</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                  value="<?=$links['name'];?>"
                />
              </div>
              
              <div class="form-group">
                <label for="link">Url:</label>
                <input
                  type="text"
                  class="form-control"
                  id="link"
                  name="link"
                  value="<?=$links['link'];?>"
                />
              </div>

              <div class="form-group">
                <img
                  id="preview"
                  src="<?=BASEURL.$links['img'];?>"
                  alt="Gambar Terdahulu"
                  style="max-width: 200px; max-height: 200px"
                />
              </div>
              <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input
                  name="oldimg"
                  type="hidden"
                  class="form-control"
                  value="<?=$links['img'];?>"
                />
                <input
                  type="file"
                  class="form-control-file"
                  id="newimg"
                  name="newimg"
                />
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Batal
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach ?>

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
