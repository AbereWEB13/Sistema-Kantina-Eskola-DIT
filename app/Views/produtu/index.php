<?= $this->extend('layout\main') ?>

<?= $this->section('content') ?>


<div id="flash" data-flash="<?= session()->getFlashdata('flash'); ?>"></div>
<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="section-header-button">
            <a href="<?= base_url('produtu/add') ?>" class="btn btn-success btn-rounded btn-fw">Aumenta Produtu</a>
          </div>
          </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table thead-light" id="table-1">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th>ID Produtu </th>
                  <th>Naran Produtu</th>
                  <th>Kategoria</th>
                  <th>Presu $</th>

                  <th class="text-center">Asaun</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($produtu as $key => $row) : ?>
                  <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $row->id_produtu ?></td>
                    <td><?= $row->naran_produtu ?></td>
                    <td><?= $row->naran_kategoria ?></td>
                    <td><?= $row->presu ?></td>
                    <td class="text-center">
                      <div class="d-flex align-items-center" role="group" aria-label="Basic example">
                        <a href="<?= base_url('produtu/edit/' . $row->id_produtu) ?>" class="btn btn-success btn-sm btn-icon-text mr-2">
                          <i class="typcn typcn-edit btn-icon-append"></i> Hadia
                        </a>
                        <a href="<?= base_url('/produtu/delete/' . $row->id_produtu) ?>" class="btn btn-danger btn-sm btn-icon-text mr-2" id="btn-hamos">
                          <i class="typcn typcn-delete-outline btn-icon-append"></i> Apaga
                        </a>
                        <a href="<?= base_url('/produtu/note/' . $row->id_produtu) ?>" class="btn btn-info btn-sm btn-icon-text">
                          <i class="typcn typcn-document-text btn-icon-append"></i> View
                        </a>
                      </div>
                    </td>
                  <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?= $this->endSection() ?>