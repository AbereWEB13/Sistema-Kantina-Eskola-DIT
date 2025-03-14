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
                    <h5 class="mb-0">Aumenta Fatin</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('fatin/store') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="row">
                            <div class="col-md-6"> <!-- Kolom pertama -->

                                <div class="mb-3">
                                    <label class="form-label" for="id_fatin">ID Fatin</label>
                                    <input type="text" class="form-control" id="id_fatin" placeholder="Prense id.." name="id_fatin" value="<?= old('id_fatin') ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="kode_fatin">Kode Fatin</label>
                                    <input type="text" class="form-control" id="kode_fatin" placeholder="Prense kode fatin" name="kode_fatin" value="<?= old('kode_fatin') ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="naran_fatin">Naran Fatin</label>
                                    <input type="text" class="form-control" id="naran_fatin" placeholder="Prense naran fatin.." name="naran_fatin" value="<?= old('naran_fatin') ?>">
                                </div>
                            </div>


                            <div class="col-md-6"><!-- Kolom kedua -->

                                <div class="mb-3">
                                    <label class="form-label" for="oras_loke">Oras Loke </label>
                                    <input type="text" class="form-control" id="oras_loke" placeholder="Prense oras Loke" name="oras_loke" value="<?= old('oras_loke') ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="oras_taka">Oras Taka</label>
                                    <input type="text" class="form-control" id="oras_taka" placeholder="Prense oras taka" name="oras_taka" value="<?= old('oras_taka') ?>">
                                </div>

                                <label class="form-label" for="image">Lokasaun</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control file-upload-info" name="image" placeholder="Choose Image">
                                    <span class="input-group-append">
                                    </span>
                                </div>
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
</div>
<?= $this->endSection() ?>