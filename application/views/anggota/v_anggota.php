<?php
if (!empty($this->session->flashdata('info'))) { ?>
	<div class="alert alert-success" role="alert"><?= $this->session->flashdata('info'); ?></div>
<?php }
?>

<div class="row">
	<div class="col-md-12">
		<?php
		if ($this->session->userdata('level') == 'Admin') { ?>
			<a href="<?= base_url() ?>anggota/tambah_anggota" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Anggota</a>
		<?php } ?>
	</div>
</div>

<br>

<div class="box">
	<div class="box-header">
		<h3 class="box-title">Data Table With Full Features</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Id Anggota</th>
					<th>Nama Anggota</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>No. Telpon</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
				foreach ($data as $row) { ?>
					<tr>
						<td><?= $row->id_anggota; ?></td>
						<td><?= $row->nama_anggota; ?></td>
						<td><?= $row->jenkel; ?></td>
						<td><?= $row->alamat; ?></td>
						<td><?= $row->no_hp; ?></td>

						<td>
							<a href="<?= base_url() ?>anggota/view/<?= $row->id_anggota; ?>" class="btn btn-primary btn-xs">View</a>
							<?php
							if ($this->session->userdata('level') == 'Admin') { ?>
								<a href="<?= base_url() ?>anggota/edit/<?= $row->id_anggota; ?>" class="btn btn-warning btn-xs">Edit</a>
								<a href="<?= base_url() ?>anggota/hapus/<?= $row->id_anggota; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin mau menghapus ?');">Hapus</a>
							<?php } ?>
							<a href="<?= base_url() ?>laporan/cetakdata/<?= $row->id_anggota; ?>" class="btn btn-success btn-xs" target="_blank">Cetak</a>
						</td>

					</tr>
				<?php }
				?>
			</tbody>
		</table>
	</div>
</div>