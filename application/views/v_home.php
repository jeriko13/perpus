<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-maroon">
      <div class="inner">
        <h3><?= $anggota; ?></h3>

        <p>Anggota</p>
      </div>
      <div class="icon">
        <i class="fa fa-users"></i>
      </div>
      <a href="<?= base_url() ?>anggota" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-olive">
      <div class="inner">
        <h3><?= $buku; ?></h3>

        <p>Buku</p>
      </div>
      <div class="icon">
        <i class="fa fa-book"></i>
      </div>
      <a href="<?= base_url() ?>buku" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?= $pinjam; ?></h3>

        <p>Buku Yang di Pinjam</p>
      </div>
      <div class="icon">
        <i class="fa fa-industry"></i>
      </div>
      <a href="<?= base_url() ?>peminjaman" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-purple">
      <div class="inner">
        <h3><?= $kembali ?></h3>

        <p>Buku Sudah di Kembalikan</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="<?= base_url() ?>pengembalian" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>