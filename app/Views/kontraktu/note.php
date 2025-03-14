<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="section-body">
    <div class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                <div style="text-align: center;">
                        <img src="<?= base_url(); ?>images/DIT.png" alt="Logo" height="100px" />
                        <h6>Dili Institute Of Technology</h6>
                    </div>
                    <h4>View Kontraktu</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th width="10%">Naran</th>
                                    <td><?= $kontraktu['naran'] ?></td>
                                </tr>
                                <tr>
                                    <th>Naran Fatin</th>
                                    <td><?= $kontraktu['naran_fatin'] ?></td>
                                </tr>
                                <tr>
                                    <th>Data Hahu</th>
                                    <td><?= $kontraktu['data_hahu'] ?></td>
                                </tr>
                                <tr>
                                    <th>Data Remata</th>
                                    <td><?= $kontraktu['data_remata'] ?></td>
                                </tr>
                                <tr>
                                    <th>Total Osan $</th>
                                    <td><?= $kontraktu['total_osan'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>