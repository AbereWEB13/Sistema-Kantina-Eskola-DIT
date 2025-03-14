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
                    <h4>View Kategoria</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th width="10%">Naran Kategoria</th>
                                    <td><?= $kategoria['naran_kategoria'] ?></td>
                                </tr>
                                <tr>
                                    <th>Deskrisaun</th>
                                    <td><?= $kategoria['deskrisaun'] ?></td>
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