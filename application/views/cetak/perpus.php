<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Cetak Anggota</title>
</head>

<body>
    <h1>Data Anggota</h1>
    <table class="table" border="1" width="100%">
        <thead>
            <tr>
                <th style="text-align:center">No</th>
                <th style="text-align:center">Nama Anggota</th>
                <th style="text-align:center">Jenis Kelamin</th>
                <th style="text-align:center">Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($dataWisata as $row) : ?>
                <tr>
                    <th style="text-align:center">
                        <?= $no++ ?>
                    </th>
                    <td>
                        <?= $row->nama_anggota ?>
                    </td>
                    <td>
                        <?= $row->jenkel?>
                    </td>
                    <td style="text-align:left">
                        <?= $row->alamat ?>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</body>

</html>