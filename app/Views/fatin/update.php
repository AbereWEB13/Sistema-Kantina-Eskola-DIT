<?= $this->extend('layout\main') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div style="text-align: center;">
          <img src="<?= base_url(); ?>public/images/Canteen-Logo.png" alt="Logo" height="100px" />
          <h6>Kantina Dili Institute Of Technology</h6>
        </div>
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Update Fatin</h5>
        </div>
        <div class="card-body">
          <form action="<?= base_url('fatin/update') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="row">
              <div class="col-md-6"> <!-- Kolom pertama -->
                <div class="mb-3">
                  <label class="form-label" for="id_fatin">ID Fatin</label>
                  <input type="text" class="form-control" id="id_fatin" placeholder=".." name="id_fatin" value="<?= $fatin['id_fatin'] ?>">
                </div>

                <div class="mb-3">
                  <label class="form-label" for="kode_fatin">Kode fatin</label>
                  <input type="text" class="form-control" id="kode_fatin" placeholder=".." name="kode_fatin" value="<?= $fatin['kode_fatin'] ?>">
                </div>

                <div class="mb-3">
                  <label class="form-label" for="naran_fatin">Naran Fatin </label>
                  <input type="text" class="form-control" id="naran_fatin" placeholder=".." name="naran_fatin" value="<?= $fatin['naran_fatin'] ?>">
                </div>
              </div>

              <!-- Kolom kedua -->
              <div class="col-md-6">

                <div class="mb-3">
                  <label class="form-label" for="oras_loke">oras loke</label>
                  <input type="text" class="form-control" id="oras_loke" placeholder=".." name="oras_loke" value="<?= $fatin['oras_loke'] ?>">
                </div>

                <div class="mb-3">
                  <label class="form-label" for="oras_taka">oras taka</label>
                  <input type="text" class="form-control" id="oras_taka" placeholder=".." name="oras_taka" value="<?= $fatin['oras_taka'] ?>">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="image">Image</label>
                  <div class="mb-3">
                    <?php if (!empty($fatin['image'])) : ?>
                      <img id="image-preview" src="<?= base_url('uploads/' . $fatin['image']) ?>" width="110" height=110" class="mb-2" />
                    <?php else : ?>
                      <img id="image-preview" src="<?= base_url('uploads/default.png') ?>" width="100" height="100" class="mb-2" />
                    <?php endif; ?>
                    <input type="file" name="image" id="image-upload" class="form-control">
                    <input type="hidden" name="old_image" value="<?= $fatin['image'] ?>">
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success btn-icon-text">
              Edit
              <i class="typcn typcn-document btn-icon-append"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>