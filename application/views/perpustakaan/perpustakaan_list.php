<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Belajar Dompdf | Jeri</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/vendor/semantic/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.semanticui.min.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<style media="screen">
    .ui.center.header {
        padding-top: 50px;
    }
</style>

<body>
    <div class="ui container">
        <h1 class="ui center aligned header">Belajar Dompdf | Jeri</h1>

        <div class="ui grid">
            <div class="fifteen wide column">
                <table class="ui celled table" id="table_id">
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
                                    <?= $row->jenkel ?>
                                </td>
                                <td>
                                    <?= $row->alamat ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <div class="one wide column">
                <a href="<?= site_url('perpus/cetak_perpus') ?>" target="_blank" type="button" class="ui primary button">Print</a> <br></br>
                <a href="<?= base_url('home') ?>" target="_blank" type="button" class="ui success button">Back</a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url('assets') ?>/vendor/semantic/dist/semantic.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.semanticui.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_id').DataTable({
                "order": []
            });
        });
    </script>
</body>

</html>