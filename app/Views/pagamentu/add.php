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
          <h5 class="mb-0">Aumenta Pagamentu</h5>
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
          <form action="<?= base_url('pagamentu/store') ?>" method="post">
            <?= csrf_field() ?>

            <div class="row">
              <div class="col-md-6"> <!-- Kolom pertama -->


                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">ID Pagamentu</label>
                  <input type="text" class="form-control" id="basic-default-company" placeholder="Hatama ID Pagamentu.." name="id_pagamentu">
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Naran Costumer
                  </label>
                  <select class="form-control" name="id_costumer">
                    <?php foreach ($costumer as $key => $row): ?>
                      <option value="<?= $row['id_costumer']; ?>"><?= $row['naran']; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Osan $</label>
                  <input type="text" class="form-control" id="basic-default-company" placeholder="$" name="osan">
                </div>
              </div>

              <div class="col-md-6"> <!-- Kolom kedua -->
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Data Pagamentu</label>
                  <input type="date" class="form-control" id="basic-default-company" placeholder="Data Pagamentu.." name="data_pagamentu">
                </div>

                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Status</label>
                  <input type="text" class="form-control" id="basic-default-company" placeholder="Status.." name="estatutu">
                </div>


                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Data Atualiza</label>
                  <input type="date" class="form-control" id="basic-default-company" placeholder="Hatama Data Atualiza.." name="data_atualiza">
                </div>
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