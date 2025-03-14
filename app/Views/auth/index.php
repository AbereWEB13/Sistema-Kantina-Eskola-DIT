<?= $this->extend('layout\main') ?>

<?= $this->section('content') ?>

<div id="flash" data-flash="<?= session()->getFlashdata('flash'); ?>"></div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="section-header-button">
                        <a href="<?= base_url('user/add') ?>" class="btn btn-success btn-rounded btn-fw">Aumenta User</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table thead-light" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>E-Mail</th>
                                    <th>Ativu</th>
                                    <th class="text-center">Asaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($user as $key => $row) : ?>
                                    <tr>
                                        <td class="text-center"><?= ++$key ?></td>
                                        <td><?= $row->username ?></td>
                                        <td><?= $row->naran_role ?></td>
                                        <td><?= $row->email ?></td>
                                        <td>
                                            <div class="badges">
                                                <span class="<?= ($row->ativu == 'Sim') ? 'badge badge-primary' : (($row->ativu == 'Lae') ? 'badge badge-danger' : 'badge badge-secondary'); ?>">
                                                    <?= $row->ativu ?>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex align-items-center" role="group" aria-label="Basic example">
                                                <a href="<?= base_url('user/edit/' . $row->id_user) ?>" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                    <i class="typcn typcn-edit btn-icon-append"></i> Hadia
                                                </a>
                                                <a href="<?= base_url('/user/delete/' . $row->id_user) ?>" class="btn btn-danger btn-sm btn-icon-text" id="btn-hamos">
                                                    <i class="typcn typcn-delete-outline btn-icon-append"></i> Apaga
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>