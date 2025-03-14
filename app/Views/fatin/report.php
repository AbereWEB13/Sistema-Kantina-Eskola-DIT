<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="section-body">
    <h2 class="section-title">Relatóriu Fatin</h2>

    <div class="card">
        <div class="card-header">
            <h4>Detalhes Fatin</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ID Fatin</th>
                    <td><?= $fatin['id_fatin'] ?></td>
                </tr>
                <tr>
                    <th>Kode Fatin</th>
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
                    <td><img src="<?= base_url('uploads/' . ($fatin['image'] ? $fatin['image'] : 'default.png')) ?>" width="100"></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>