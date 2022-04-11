<?php
if (!empty($this->session->flashdata('info'))) { ?>
	<div class="alert alert-success" role="alert"><?= $this->session->flashdata('info'); ?></div>
<?php }
?>

<div class="row">
	<div class="col-md-12">
		<?php
		if ($this->session->userdata('level') == 'Admin') { ?>
			<a href="<?= base_url() ?>pengarang/tambah_pengarang" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Pengarang</a>
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
					<th>Id Pengarang</th>
					<th>Nama Pengarang</th>
					<?php
					if ($this->session->userdata('level') == 'Admin') { ?>
						<th>Aksi</th>
					<?php } ?>
				</tr>
			</thead>

			<tbody>
				<?php
				foreach ($data as $row) { ?>
					<tr>
						<td><?= $row->id_pengarang; ?></td>
						<td><?= $row->nama_pengarang; ?></td>
						<?php
						if ($this->session->userdata('level') == 'Admin') { ?>
							<td>
								<a href="<?= base_url() ?>pengarang/edit/<?= $row->id_pengarang; ?>" class="btn btn-success btn-xs"> Edit</a>
								<a href="<?= base_url() ?>pengarang/hapus/<?= $row->id_pengarang; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin mau menghapus ?');"> Hapus</a>
							</td>
						<?php } ?>
					</tr>
				<?php }
				?>
			</tbody>
		</table>
	</div>
</div>