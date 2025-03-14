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
          <h5 class="mb-0">Aumenta Role</h5>
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

          <form action="<?= base_url('role/store') ?>" method="post">
            <div class="mb-3">
              <label class="form-label" for="basic-default-company">ID Role</label>
              <input type="text" class="form-control" id="basic-default-company" placeholder="Prense ID.." name="id_role">
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-default-company">Naran Role</label>
              <input type="text" class="form-control" id="basic-default-company" placeholder="Hatama Naran role.." name="naran_role">
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
</div>
<?= $this->endSection() ?>