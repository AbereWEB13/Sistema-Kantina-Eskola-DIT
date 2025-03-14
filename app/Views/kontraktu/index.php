<?= $this->extend('layout\main') ?>

<?= $this->section('content') ?>

<div id="flash" data-flash="<?= session()->getFlashdata('flash'); ?>"></div>
<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="section-header-button">
            <a href="<?= base_url('kontraktu/add') ?>" class="btn btn-success btn-rounded btn-fw">Aumenta Kontraktu</a>
          </div>
          </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table thead-light" id="table-1">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th>ID kontraktu</th>
                  <th>Naran</th>
                  <th>Naran Fatin</th>
                  <th>Data Hahu</th>
                  <th>Data Remata</th>
                  <th>Total Osan $</th>
                  <th class="text-center">Asaun</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($kontraktu as $key => $row) : ?>
                  <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $row->id_kontraktu ?></td>
                    <td><?= $row->naran ?></td>
                    <td><?= $row->naran_fatin ?></td>
                    <td><?= $row->data_hahu ?></td>
                    <td><?= $row->data_remata ?></td>
                    <td><?= $row->total_osan ?></td>

                    <td class="text-center">
                      <div class="d-flex align-items-center" role="group" aria-label="Basic example">
                        <a href="<?= base_url('kontraktu/edit/' . $row->id_kontraktu) ?>" class="btn btn-success btn-sm btn-icon-text mr-2">
                          <i class="typcn typcn-edit btn-icon-append"></i> Hadia
                        </a>
                        <a href="<?= base_url('/kontraktu/delete/' . $row->id_kontraktu) ?>" class="btn btn-danger btn-sm btn-icon-text mr-2" id="btn-hamos">
                          <i class="typcn typcn-delete-outline btn-icon-append"></i> Apaga
                        </a>
                        <a href="<?= base_url('/kontraktu/note/' . $row->id_kontraktu) ?>" class="btn btn-info btn-sm btn-icon-text">
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