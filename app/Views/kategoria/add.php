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
          <h5 class="mb-0">Aumenta kategoria</h5>
        </div>

        <div class="card-body">
          <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger alert-dismissible show fade">
              <div class="alert-body">
                <button class="close" data-dismiss="alert">
                  <span>×</span>
                </button>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                  Error: <?= esc($error) ?>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>

          <form action="<?= base_url('kategoria/store') ?>" method="post">
            <div class="mb-3">
              <label class="form-label" for="basic-default-company">ID Kategoria</label>
              <input type="text" class="form-control" id="basic-default-company" placeholder="Hatama ID.." name="id_kategoria">
            </div>
            <div class="mb-3">
              <label class="form-label" for="jenis_kelamin">Kategoria</label>
              <div class="form-group row">
                <div class="col-sm-4">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="naran_kategoria" id="membershipRadios1" value="Makanan" checked="">
                      Makanan
                      <i class="input-helper"></i></label>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="naran_kategoria" id="membershipRadios2" value="Minuman">
                      Minuman
                      <i class="input-helper"></i></label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Deskrisaun</label>
                <textarea class="form-control" id="exampleTextarea1" name="deskrisaun" rows="4"></textarea>
              </div>

              <button type="submit" class="btn btn-success btn-icon-text">
                <i class="typcn typcn-document btn-icon-prepend"></i>
                Submit
              </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?= $this->endSection() ?>