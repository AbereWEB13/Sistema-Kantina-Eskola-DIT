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
                    <h4>View Fatin</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th width="10%">Kode Fatin</th>
                                    <td><?= $fatin['kode_fatin'] ?></td>
                                </tr>
                                <tr>
                                    <th>Naran Fatin</th>
                                    <td><?= $fatin['naran_fatin'] ?></td>
                                </tr>
                                <tr>
                                    <th>Oras Loke</th>
                                    <td><?= $fatin['oras_loke'] ?></td>
                                </tr>
                                <tr>
                                    <th>Oras Taka</th>
                                    <td><?= $fatin['oras_taka'] ?></td>
                                </tr>
                                <tr>
                                    <th>Lokasaun</th>
                                    <td>
                                        <?php if (!empty($fatin['image'])) : ?>
                                            <img src="<?= base_url('uploads/' . $fatin['image']) ?>" alt=" Fatin Photo" width="100">
                                        <?php else : ?>
                                            No Image Available
                                        <?php endif; ?>
                                    </td>
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