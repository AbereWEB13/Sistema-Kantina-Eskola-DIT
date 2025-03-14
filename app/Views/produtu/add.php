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
          <h5 class="mb-0">Aumenta Produtu</h5>
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
          <form action="<?= base_url('produtu/store') ?>" method="post">
            <?= csrf_field() ?>

            <div class="row">
              <div class="col-md-6"> <!-- Kolom pertama -->
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">ID Produtu</label>
                  <input type="text" class="form-control" id="basic-default-company" placeholder="Hatama ID.." name="id_produtu">
                  </input>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Naran Produtu</label>
                  <input type="text" class="form-control" id="basic-default-company" placeholder="Hatama naran_produtu.." name="naran_produtu">
                </div>
              </div>
              <!-- taka koluna primeriu -->

              <div class="col-md-6"> <!-- Kolom Kedua-->

                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Kategoria</label>
                  <select class="form-control" name="id_kategoria">
                    <?php foreach ($kategoria as $key => $row): ?>
                      <option value="<?= $row['id_kategoria']; ?>"><?= $row['naran_kategoria']; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Presu $</label>
                  <input type="decimal" class="form-control" id="basic-default-company" placeholder=" $" name="presu">
                </div>
              </div>
              <!-- taka koluna segundu -->
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