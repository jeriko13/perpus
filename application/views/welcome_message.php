<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Multi Upload File CI </title>
</head>

<body>
	<center>
		<h2>
			<script type='text/javascript'>
				//<![CDATA[

				/*
				Teks berganti-ganti warna 
				Featured on JavaScript Kit, visit http://www.javascriptkit.com/script/script2/rainbowtext.shtml
				*/

				var text = "MENGUNGGAH FILE PDF/DOCUMENT KE DATABASE" //Ganti dengan teks anda
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
	<?= form_open_multipart('welcome/prosesUpload'); ?>
	<p>File Gambar/PDF</p>
	<input type="file" name="upload[]" multiple><br><br>
	<button>Upload Gambar/FIle</button> <br> <br>
	<a href="<?= base_url() ?>dashboard"></i> Kembali ke Home</a></li>

	<?= form_close(); ?>

</body>

</html>