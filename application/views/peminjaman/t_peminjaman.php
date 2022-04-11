<?php 
	$tgl_pinjam = date('Y-m-d');

	$tujuh_hari = mktime(0,0,0,date("n"),date("j") + 7, date("Y"));
	$tgl_kembali = date('Y-m-d', $tujuh_hari);
?>

<div class="col-md-12">
	<div class="box box-info">
		<div class="box-header with-border">
			<h3 class="box-title"><?= $judul;?></h3>
		</div>

		<form method="post" action="<?= base_url()?>peminjaman/simpan" class="form-horizontal">
			<div class="box-body">

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Id Peminjaman</label>
					<div class="col-sm-10">
						<input type="text" name="id_pm" value="<?= $id_peminjaman;?>" class="form-control" readonly>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Peminjam</label>
					<div class="col-sm-10">
						<select name="id_anggota" class="form-control select2">
							<option value=""> - Pilih Peminjam - </option>
							<?php 
								foreach ($peminjam as $row) {?>
									<option value="<?= $row->id_anggota;?>"><?= $row->nama_anggota;?></option>
								<?php }
							?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Buku</label>
					<div class="col-sm-10">
						<select name="id_buku" id="id_buku" class="form-control select2">
							<option value=""> - Pilih Buku - </option>
							<?php 
								foreach ($buku as $row) {?>
									<option value="<?= $row->id_buku;?>"><?= $row->judul_buku;?></option>
								<?php }
							?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Tanggal Peminjaman</label>
					<div class="col-sm-10">
						<input type="date" name="tgl_pinjam" value="<?= $tgl_pinjam;?>" class="form-control" readonly>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Tanggal Pengembalian</label>
					<div class="col-sm-10">
						<input type="date" name="tgl_kembali" value="<?= $tgl_kembali;?>" class="form-control" readonly>
					</div>
				</div>

			</div>

			<div class="box-footer">
				<a href="<?= base_url()?>buku" class="btn btn-warning">Cancel</a>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>

	</div>
</div>


<script>

	$('#id_buku').change(function(){
		var id = $(this).val();
		$.ajax({
			url : '<?= base_url()?>peminjaman/jumlah_buku',
			data : {id:id},
			method : 'post',
			dataType : 'json',
			success:function(hasil){
				var jumlah = JSON.stringify(hasil.jumlah);
				var jumlah1 = jumlah.split('"').join('');
				if (jumlah1 <= 0) {
					alert('Maaf, Stok untuk buku ini sedang kosong');
					location.reload();
				}
			}
		});
	});

</script>