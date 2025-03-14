<?= $this->extend('layout\main') ?>

<?= $this->section('content') ?>


<div id="flash" data-flash="<?= session()->getFlashdata('flash'); ?>"></div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="section-header-button">
                        <a href="<?= base_url('order/add') ?>" class="btn btn-success btn-rounded btn-fw">Aumenta Order</a>
                    </div>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table thead-light" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>ID Order</th>
                                    <th>Naran Costumer</th>
                                    <th>Produtu</th>
                                    <th>Presu $</th>
                                    <th>Kuantidade</th>
                                    <th>Total Presu $</th>
                                    <th class="text-center">Asaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($order as $key => $row) : ?>
                                    <tr>
                                        <td><?= ++$key ?></td>
                                        <td><?= $row->id_order ?></td>
                                        <td><?= $row->naran ?></td>
                                        <td><?= $row->naran_produtu ?></td>
                                        <td><?= $row->presu ?></td>
                                        <td><?= $row->kuantidade ?></td>
                                        <td><?= $row->total_presu = $row->presu * $row->kuantidade  ?></td>
                                        <td class="text-center">
                                            <div class="d-flex align-items-center" role="group" aria-label="Basic example">
                                                <a href="<?= base_url('order/edit/' . $row->id_order) ?>" class="btn btn-success btn-sm btn-icon-text mr-2">
                                                    <i class="typcn typcn-edit btn-icon-append"></i> Hadia
                                                </a>
                                                <a href="<?= base_url('/order/delete/' . $row->id_order) ?>" class="btn btn-danger btn-sm btn-icon-text mr-2" id="btn-hamos">
                                                    <i class="typcn typcn-delete-outline btn-icon-append"></i> Apaga
                                                </a>
                                                <a href="<?= base_url('/order/note/' . $row->id_order) ?>" class="btn btn-info btn-sm btn-icon-text">
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