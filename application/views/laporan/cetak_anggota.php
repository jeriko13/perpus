<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }
    </style>
</head>

<body>
    <img src="<?= base_url() ?>assets/dist/img/ump.png" style="position: absolute; width: 60px; height: auto;">
    <center>
        <h2>
            <script type='text/javascript'>
                //<![CDATA[

                /*
                Teks berganti-ganti warna 
                Featured on JavaScript Kit, visit http://www.javascriptkit.com/script/script2/rainbowtext.shtml
                */

                var text = "LAPORAN CETAK DATA MENGGUNAKAN PARAMETER ID" //Ganti dengan teks anda
                var speed = 80 //Kecepatan ganti warna

                if (document.all || document.getElementById) {
                    document.write('<span id="highlight">' + text + '</span>')
                    var storetext = document.getElementById ? document.getElementById("highlight") : document.all.highlight
                } else
                    document.write(text)
                var hex = new Array("00", "14", "28", "3C", "50", "64", "78", "8C", "A0", "B4", "C8", "DC", "F0")
                var r = 1
                var g = 1
                var b = 1
                var seq = 1

                function changetext() {
                    rainbow = "#" + hex[r] + hex[g] + hex[b]
                    storetext.style.color = rainbow
                }

                function change() {
                    if (seq == 6) {
                        b--
                        if (b == 0)
                            seq = 1
                    }
                    if (seq == 5) {
                        r++
                        if (r == 12)
                            seq = 6
                    }
                    if (seq == 4) {
                        g--
                        if (g == 0)
                            seq = 5
                    }
                    if (seq == 3) {
                        b++
                        if (b == 12)
                            seq = 4
                    }
                    if (seq == 2) {
                        r--
                        if (r == 0)
                            seq = 3
                    }
                    if (seq == 1) {
                        g++
                        if (g == 12)
                            seq = 2
                    }
                    changetext()
                }

                function starteffect() {
                    if (document.all || document.getElementById)
                        flash = setInterval("change()", speed)
                }
                starteffect()

                //]]>
            </script>
        </h2>
    </center>
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1.6; font-weight: bold;">
                    UNIVERSITAS MUHAMMADIYAH PURWOKERTO
                    <br> INDONESIA
                </span>
            </td>
        </tr>
    </table>

    <hr class="line-title">
    <hr color="blue">
    <p align="center">
        <b>LAPORAN DATA ANGGOTA </b> <br>
        <b>Perpustakaan</b>
    </p>
    <link rel="stylesheet" href="">
    <style type="text/css">
        body {
            margin: 20px 150px
        }

        .center {
            margin-left: auto;
            margin-right: auto;
        }

        table {
            border-collapse: collapse;
        }

        td {
            padding: 20px;
        }
    </style>
    </head>

    <body onload="window.print()">
        <table border="1" width="100%;">
            <tr>
            </tr>
        </table>

        <table class="center">


            <tr>
                <td style="text-align:center; font-weight:bold; font-family:sans-serif; font-size:14px;">Nama Anggota</td>
                <td style="text-align:center; font-weight:bold; font-family:sans-serif; font-size:14px;">:</td>
                <td style="text-align:center; font-weight:bold; font-family:sans-serif; font-size:14px;"><?php echo $data->nama_anggota ?></td>
            </tr>
            <tr>
                <td style="text-align:center; font-weight:bold; font-family:sans-serif; font-size:14px;">Jenis Kelamin</td>
                <td style="text-align:center; font-weight:bold; font-family:sans-serif; font-size:14px;">:</td>
                <td style="text-align:center; font-weight:bold; font-family:sans-serif; font-size:14px;"><?php echo $data->jenkel ?></td>
            </tr>
            <tr>
                <td style="text-align:center; font-weight:bold; font-family:sans-serif; font-size:14px;">Alamat</td>
                <td style="text-align:center; font-weight:bold; font-family:sans-serif; font-size:14px;">:</td>
                <td style="text-align:center; font-weight:bold; font-family:sans-serif; font-size:14px;"><?php echo $data->alamat ?></td>
            </tr>
            <tr>
                <td style="text-align:center; font-weight:bold; font-family:sans-serif; font-size:14px;">Nomer Hp</td>
                <td style="text-align:center; font-weight:bold; font-family:sans-serif; font-size:14px;">:</td>
                <td style="text-align:center; font-weight:bold; font-family:sans-serif; font-size:14px;"><?php echo $data->no_hp ?></td>
            </tr>
        </table>
        <hr color="green">
        <hr color="red">
    </body>

</html>