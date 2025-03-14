<?= $this->extend('layout\main') ?>

<?= $this->section('content') ?>
<div id="flash" data-flash="<?= session()->getFlashdata('flash'); ?>"></div>
<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="section-header-button">
            <a href="<?= base_url('costumer/add') ?>" class="btn btn-success btn-rounded btn-fw">Aumenta Costumer</a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table thead-light" id="table-1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID Costumer</th>
                  <th>Naran</th>
                  <th>Seksu</th>
                  <th>Telefone</th>
                  <th>Enderesu</th>
                  <th>Email</th>
                  <th>Foto</th>
                  <th class="text-center">Asaun</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($costumer as $key => $row) : ?>
                  <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $row['id_costumer'] ?></td>
                    <td><?= $row['naran'] ?></td>
                    <td><?= $row['seksu'] ?></td>
                    <td><?= $row['numeru_telemovel'] ?></td>
                    <td><?= $row['enderesu'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>
                      <img src="<?= base_url('uploads/' . ($row['image'] ? $row['image'] : 'default.png')) ?>" width="50" height="50">
                    </td>
                    <td class="text-center">
                      <div class="d-flex align-items-center" role="group" aria-label="Basic example">
                        <a href="<?= base_url('costumer/edit/' . $row['id_costumer']) ?>" class="btn btn-success btn-sm btn-icon-text mr-2">
                          <i class="typcn typcn-edit btn-icon-append"></i> Hadia
                        </a>
                        <a href="<?= base_url('/costumer/delete/' . $row['id_costumer']) ?>" class="btn btn-danger btn-sm btn-icon-text mr-2" id="btn-hamos">
                          <i class="typcn typcn-delete-outline btn-icon-append"></i> Apaga
                        </a>
                        <a href="<?= base_url('/costumer/note/' . $row['id_costumer']) ?>" class="btn btn-info btn-sm btn-icon-text">
                          <i class="typcn typcn-document-text btn-icon-append"></i> View
                        </a>
                      </div>
                    </td>
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