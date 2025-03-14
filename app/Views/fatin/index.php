<?= $this->extend('layout\main') ?>

<?= $this->section('content') ?>

<div id="flash" data-flash="<?= session()->getFlashdata('flash'); ?>"></div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="section-header-button">
                        <a href="<?= base_url('fatin/add') ?>" class="btn btn-success btn-rounded btn-fw">Aumenta Fatin</a>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table thead-light" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>ID Fatin</th>
                                    <th>Kode Fatin</th>
                                    <th>Naran Fatin</th>
                                    <th>Oras Loke</th>
                                    <th>Oras Taka</th>
                                    <th>Lokasaun</th>
                                    <th class="text-center">Asaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($fatin as $key => $row) : ?>
                                    <tr>
                                        <td><?= ++$key ?></td>
                                        <td><?= $row->id_fatin ?></td>
                                        <td><?= $row->kode_fatin ?></td>
                                        <td><?= $row->naran_fatin ?></td>
                                        <td><?= $row->oras_loke ?></td>
                                        <td><?= $row->oras_taka ?></td>
                                        <td>
                                            <img src="<?= base_url('uploads/' . ($row->image ? $row->image : 'default.png')) ?>" width="50" height="50">
                                        </td>

                                        <td class="text-center">
                                            <div class="d-flex align-items-center" role="group" aria-label="Basic example">
                                                <a href="<?= base_url('fatin/edit/' . $row->id_fatin) ?>" class="btn btn-success btn-sm btn-icon-text mr-2">
                                                    <i class="typcn typcn-edit btn-icon-append"></i> Hadia
                                                </a>
                                                <a href="<?= base_url('/fatin/delete/' . $row->id_fatin) ?>" class="btn btn-danger btn-sm btn-icon-text mr-2" id="btn-hamos">
                                                    <i class="typcn typcn-delete-outline btn-icon-append"></i> Apaga
                                                </a>
                                                <a href="<?= base_url('/fatin/note/' . $row->id_fatin) ?>" class="btn btn-info btn-sm btn-icon-text">
                                                    <i class="typcn typcn-document-text btn-icon-append"></i> View
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