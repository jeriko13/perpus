<div class="col-md-12">
	<div class="box box-info">
		<div class="box-header with-border">
			<h3 class="box-title"><?= $judul;?></h3>
		</div>

		<form method="post" action="<?= base_url()?>penerbit/simpan" class="form-horizontal">
			<div class="box-body">

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Nama Penerbit</label>
					<div class="col-sm-10">
						<input type="text" name="nama_penerbit" class="form-control" placeholder="Nama Penerbit" required>
					</div>
				</div>

			</div>

			<div class="box-footer">
				<a href="<?= base_url()?>penerbit" class="btn btn-warning">Cancel</a>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>

	</div>
</div>