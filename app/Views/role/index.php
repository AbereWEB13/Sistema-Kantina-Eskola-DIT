<?= $this->extend('layout\main') ?>

<?= $this->section('content') ?>
<div id="flash" data-flash="<?= session()->getFlashdata('flash'); ?>"></div>
<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="section-header-button">
            <a href="<?= base_url('role/add') ?>" class="btn btn-success btn-rounded btn-fw">Aumenta Role</a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table thead-light" id="table-1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID Role</th>
                  <th>Naran Role</th>
                  <th class="text-center">Asaun</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($role as $key => $row) : ?>
                  <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $row['id_role'] ?></td>
                    <td><?= $row['naran_role'] ?></td>
                    <td class="text-center">
                      <div class="d-flex align-items-center" role="group" aria-label="Basic example">
                        <a href="<?= base_url('role/edit/' . $row['id_role']) ?>" class="btn btn-success btn-sm btn-icon-text mr-3">
                          <i class="typcn typcn-edit btn-icon-append"></i> Hadia
                        </a>
                        <a href="<?= base_url('/role/delete/' . $row['id_role']) ?>" class="btn btn-danger btn-sm btn-icon-text" id="btn-hamos">
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