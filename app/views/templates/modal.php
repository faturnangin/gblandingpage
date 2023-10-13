<!-- Modal tambah key features -->
<div
  class="modal fade"
  id="modal-addkeyfeatures"
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
          action="<?=BASEURL;?>/dashboard/addkeyfeatures"
          method="post"
          enctype="multipart/form-data"
        >
          <div class="form-group">
            <label for="nilai">Nilai:</label>
            <input type="text" class="form-control" id="nilai" name="nilai" required/>
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan:</label>
            <textarea
              class="form-control"
              id="keterangan"
              name="keterangan"
              required
            ></textarea>
          </div>

          <div class="form-group">
            <label for="newimg">Gambar (resolusi 80px*80px disarankan):</label>
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

<!-- Modal edit key features -->
<?php foreach ($data['keyfeatures'] as $keyfeatures) : ?>
<div
  class="modal fade"
  id="ekf<?=$keyfeatures['id'];?>"
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
          <?=$keyfeatures['nilai'];?>
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
          action="<?=BASEURL;?>/dashboard/editkeyfeatures"
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
              value="<?=$keyfeatures['id'];?>"
            />
            <label for="nilai">Nilai:</label>
            <input
              type="text"
              class="form-control"
              id="nilai"
              name="nilai"
              value="<?=$keyfeatures['nilai'];?>"
            />
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan:</label>
            <input
              type="text"
              class="form-control"
              id="keterangan"
              name="keterangan"
              value="<?=$keyfeatures['keterangan'];?>"
            />
          </div>
          <div class="form-group">
            <img
              id="preview"
              src="<?=BASEURL.$keyfeatures['img'];?>"
              alt="Gambar Terdahulu"
              style="max-width: 200px; max-height: 200px"
            />
          </div>
          <div class="form-group">
            <label for="newimg">Gambar (resolusi 80px*80px disarankan):</label>
            <input
              name="oldimg"
              type="hidden"
              class="form-control"
              value="<?=$keyfeatures['img'];?>"
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

<!-- Modal tambah services -->
<div
  class="modal fade"
  id="addservices"
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
          action="<?=BASEURL;?>/dashboard/addservice"
          method="post"
          enctype="multipart/form-data"
        >
          <div class="form-group">
            <label for="layanan">Layanan:</label>
            <input
              type="text"
              class="form-control"
              id="layanan"
              name="service"
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

<!-- Modal edit services -->
<?php foreach ($data['services'] as $services) : ?>
<div
  class="modal fade"
  id="editservice<?=$services['id'];?>"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Form Edit Data</h5>
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
          action="<?=BASEURL;?>/dashboard/editservice"
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
              value="<?=$services['id'];?>"
            />
            <label for="layanan">Layanan:</label>
            <input
              type="text"
              class="form-control"
              id="layanan"
              name="service"
              value="<?=$services['service'];?>"
            />
          </div>
          <div class="form-group">
            <img
              id="preview"
              src="<?=BASEURL.$services['img'];?>"
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
              value="<?=$services['img'];?>"
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

<!-- Modal tambah portfolio -->
<div
  class="modal fade"
  id="addportfolio"
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
          action="<?=BASEURL;?>/dashboard/addportfolio"
          method="post"
          enctype="multipart/form-data"
        >
          <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" id="title" name="title" required/>
          </div>
          <div class="form-group">
            <label for="location">Lokasi:</label>
            <input
              type="text"
              class="form-control"
              id="location"
              name="location"
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

<!-- Modal edit portfolio -->
<?php foreach ($data['portfolio'] as $portfolio) : ?>
<div
  class="modal fade"
  id="editporto<?=$portfolio['id'];?>"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Form Edit Data</h5>
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
          action="<?=BASEURL;?>/dashboard/editportfolio"
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
              value="<?=$portfolio['id'];?>"
            />
            <label for="title">Judul:</label>
            <input
              type="text"
              class="form-control"
              id="title"
              name="title"
              value="<?=$portfolio['title'];?>"
            />
          </div>
          <div class="form-group">
            <label for="location">Lokasi:</label>
            <input
              type="text"
              class="form-control"
              id="location"
              name="location"
              value="<?=$portfolio['location'];?>"
            />
          </div>
          <div class="form-group">
            <img
              id="preview"
              src="<?=BASEURL.$portfolio['img'];?>"
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
              value="<?=$portfolio['img'];?>"
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
    const allowedTypes = ['jpg', 'jpeg', 'png', 'webp'];
    const maxSize = 2 * 1024 * 1024;

    imageInputs.forEach(function(input) {
      input.addEventListener('change', function() {
        const file = input.files[0];
        if (!file) return;
        const fileName = file.name.toLowerCase();
        const fileSize = file.size;
        const fileType = fileName.split('.').pop();

        if (!allowedTypes.includes(fileType)) {
          Swal.fire({
              icon: "error",
              title: "Oops...",
              text: "Something went wrong!",
              footer: "Format file tidak didukung.",
            });
          input.value = '';
          return false;
        }

        if (fileSize > maxSize) {
          Swal.fire({
              icon: "error",
              title: "Oops...",
              text: "Something went wrong!",
              footer: "Ukuran file terlalu besar.",
            });
          input.value = '';
          return false;
        }

        return true;
      });
    });
  }
  validateImageInput();
</script>

