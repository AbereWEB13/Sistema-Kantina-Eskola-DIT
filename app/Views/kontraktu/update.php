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
                    <h5 class="mb-0">Update kontraktu </h5>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <p>Error: <?= esc($error) ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('kontraktu/update') ?>" method="post">
                        <input type="hidden" name="id_kontraktu" value="<?= $kontraktu['id_kontraktu'] ?>">

                        <div class="row">
                            <div class="col-md-6"> <!-- Kolom pertama -->
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">ID kontraktu</label>
                                    <input type="text" class="form-control" id="basic-default-company" name="id_kontraktu" value="<?= $kontraktu['id_kontraktu'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Naran Alumni</label>
                                    <select class="form-control" name="id_costumer">
                                        <?php foreach ($costumer as $row): ?>
                                            <option value="<?= $row['id_costumer']; ?>" <?= $row['id_costumer'] == $kontraktu['id_costumer'] ? 'selected' : '' ?>><?= $row['naran']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Naran Fatin</label>
                                    <select class="form-control" name="id_fatin">
                                        <?php foreach ($fatin as $row): ?>
                                            <option value="<?= $row['id_fatin']; ?>" <?= $row['id_fatin'] == $kontraktu['id_fatin'] ? 'selected' : '' ?>><?= $row['naran_fatin']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Data Hahu</label>
                                    <input type="text" class="form-control" id="basic-default-company" name="data_hahu" value="<?= $kontraktu['data_hahu'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6"> <!-- Kolom kedua -->

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Data Remata</label>
                                    <input type="text" class="form-control" id="basic-default-company" name="data_remata" value="<?= $kontraktu['data_remata'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Total Osan $</label>
                                    <input type="text" class="form-control" id="basic-default-company" name="total_osan" value="<?= $kontraktu['total_osan'] ?>">
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