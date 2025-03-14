<?= $this->extend('layout\main') ?>
<?= $this->section('content') ?>
<div id="flash" data-flash="<?= session()->getFlashdata('flash'); ?>"></div>
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div style="text-align: center;">
          <img src="<?= base_url(); ?>public/images/Canteen-Logo.png" alt="Logo" height="100px" />
          <h6>Kantina Dili Institute Of Technology</h6>
        </div>
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Update User</h5>
        </div>
        <div class="card-body">
          <form action="<?= base_url('user/update/' . $user['id_user']) ?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
            <?= csrf_field() ?>
            <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">

            <div class="row">
              <div class="col-md-6"> <!-- Kolom pertama -->
                <div class="mb-3">
                  <label class="form-label" for="naran_kompletu">Naran Kompletu</label>
                  <input type="text" class="form-control" id="naran_kompletu" placeholder="Hatama naran kompletu" name="naran_kompletu" value="<?= old('naran_kompletu', $user['naran_kompletu']) ?>" required>
                  <div class="invalid-feedback">
                    Favor hatama naran kompletu!
                  </div>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="username">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Hatama user name" name="username" value="<?= old('username', $user['username']) ?>" required>
                  <div class="invalid-feedback">
                    Favor hatama user name!
                  </div>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Hatama password" name="password">
                  <div class="invalid-feedback">
                    Favor hatama password uniqu!
                  </div>
                </div>
              </div>

              <div class="col-md-6"> <!-- Kolom kedua -->
                <div class="mb-3">
                  <label class="form-label" for="email">E-mail</label>
                  <input type="email" class="form-control" id="email" placeholder="Hatama email" name="email" value="<?= old('email', $user['email']) ?>" required>
                  <div class="invalid-feedback">
                    Favor hatama email!
                  </div>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="id_role">Role</label>
                  <select class="form-control" name="id_role">
                    <?php foreach ($role as $key => $row) : ?>
                      <option value="<?= $row['id_role'] ?>" <?= ($row['id_role'] == $user['id_role']) ? 'selected' : '' ?>><?= $row['naran_role'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>


                <div class="mb-3">
                  <label class="form-label" for="jenis_kelamin">Ativu</label>
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="ativu" id="membershipRadios1" value="Sim" class="custom-switch-input" <?= $user['ativu'] == 'Sim' ? 'checked' : '' ?>>
                          Sim
                          <i class="input-helper"></i></label>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="ativu" id="membershipRadios2" value="Lae" class="custom-switch-input" <?= $user['ativu'] == 'Lae' ? 'checked' : '' ?>>
                          Lae
                          <i class="input-helper"></i></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success btn-icon-text">
              Edit
              <i class="typcn typcn-document btn-icon-append"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>