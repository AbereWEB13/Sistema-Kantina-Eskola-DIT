<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Relatóriu Fatin</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Relatóriu Fatin</h2>
    <table>
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
</body>
</html>
