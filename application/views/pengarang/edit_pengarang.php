<div class="col-md-12">
	<div class="box box-info">
		<div class="box-header with-border">
			<h3 class="box-title"><?= $judul;?></h3>
		</div>

		<form method="post" action="<?= base_url()?>pengarang/update" class="form-horizontal">
			<div class="box-body">

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Id Pengarang</label>
					<div class="col-sm-10">
						<input type="text" name="id_pengarang" value="<?= $data['id_pengarang'];?>" class="form-control" readonly>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Nama Pengarang</label>
					<div class="col-sm-10">
						<input type="text" name="nama_pengarang" value="<?= $data['nama_pengarang'];?>" class="form-control" placeholder="Nama Pengarang" required>
					</div>
				</div>

			</div>

			<div class="box-footer">
				<a href="<?= base_url()?>pengarang" class="btn btn-warning">Cancel</a>
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>

	</div>
</div>