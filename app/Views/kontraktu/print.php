<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="card-header">
        <div style="text-align: center;">
            <h3>Nota Kontraktu</h3>
            <img src="<?= base_url(); ?>images/DIT.png" alt="Logo" height="100px" />
            <h6>Dili Institute Of Technology</h6>
        </div>
    </div>

    <table>
        <tr>
            <th>NO</th>
            <th>Naran</th>
            <th>Nara Fatin</th>
            <th>Data Hahu</th>
            <th>Data Remata</th>
            <th>Total Osan $</th>
        </tr>

        <?php
        $no = 1;
        foreach ($kontraktu as $key => $row) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->naran ?></td>
                <td><?= $row->naran_fatin ?></td>
                <td><?= $row->data_hahu ?></td>
                <td><?= $row->data_remata ?></td>
                <td><?= $row->total_osan ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="signature-section">
        <center>
            <h4 style="border-top: 2px solid #000; padding-top: 30px; margin-top: 50px;">(..............................)</h4>
            <h6 style="font-style: italic;">Signature</h6>
        </center>
    </div>
    <div>
        <h4>(..............................)</h4>
        <h5>Salvador Erto Marcal Gomes</h5>

    </div>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>

<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 20px;
    }

    .card-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .card-header img {
        height: 100px;
    }

    .card-header h6 {
        margin-top: 10px;
        font-size: 20px;
        font-weight: normal;
    }

    .card-header h3 {
        font-size: 24px;
        margin-top: 10px;
        font-weight: bold;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
    }

    /* Make table headers bold */
    th {
        background-color: #f4f4f4;
        color: #333;
        font-size: 16px;
        font-weight: bold;
        /* This ensures that headers are bold */
    }

    td {
        background-color: #fff;
        color: #555;
        font-size: 14px;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    .footer {
        text-align: center;
        margin-top: 30px;
    }

    .signature-section h4 {
        margin-top: 50px;
        font-size: 20px;
        font-weight: bold;
    }

    .signature-section h5 {
        font-size: 18px;
        font-weight: bold;
        margin-top: 30px;
    }

    .signature-section h6 {
        font-size: 16px;
        font-style: italic;
    }
</style>