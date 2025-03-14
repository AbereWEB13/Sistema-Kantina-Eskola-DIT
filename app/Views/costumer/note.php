<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="section-body">
    <div class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <div style="text-align: center;">
                        <img src="<?= base_url(); ?>public/images/DIT.png" alt="Logo" height="100px" />
                        <h6>Dili Institute Of Technology</h6>
                    </div>
                    <h4>View Costumer</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th width="10%">Naran Costumer</th>
                                    <td><?= $costumer['naran'] ?></td>
                                </tr>
                                <tr>
                                    <th>Seksu</th>
                                    <td><?= $costumer['seksu'] ?></td>
                                </tr>
                                <tr>
                                    <th>Numeru Telemovel</th>
                                    <td><?= $costumer['numeru_telemovel'] ?></td>
                                </tr>
                                <tr>
                                    <th>Enderesu</th>
                                    <td><?= $costumer['enderesu'] ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?= $costumer['email'] ?></td>
                                </tr>
                                <tr>
                                    <th>Foto</th>
                                    <td>
                                        <?php if (!empty($costumer['image'])) : ?>
                                            <img src="<?= base_url('uploads/' . $costumer['image']) ?>" alt="Costumer Photo" width="100">
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