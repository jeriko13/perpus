<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $judul; ?></h3>
        </div>

        <form method="post" action="<?= base_url() ?>anggota/view" class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Id Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_anggota" value="<?= $data['id_anggota']; ?>" class="form-control" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nama Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_anggota" value="<?= $data['nama_anggota']; ?>" class="form-control" placeholder="Nama Anggota" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="jenkel" class="form-control" readonly>
                            <?php
                            if ($data['jenkel'] == "Laki-laki") { ?>
                                <option value="Laki-laki" selected> Laki-laki </option>
                                <option value="Perempuan"> Perempuan </option>
                            <?php } else { ?>
                                <option value="Laki-laki"> Laki-laki </option>
                                <option value="Perempuan" selected> Perempuan </option>
                            <?php }
                            ?>

                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" cols="30" rows="5" readonly><?= $data['alamat']; ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nama Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_hp" value="<?= $data['no_hp']; ?>" class="form-control" placeholder="No. HP" readonly>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>