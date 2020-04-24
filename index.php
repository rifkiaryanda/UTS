<!DOCTYPE html>
<html>
<head>
	<title>Jawaban UTS</title>

	<style>
		h1 {
			text-align: center;
		}
		form {
			width: 500px;
			margin: auto;
		}
		input {
			width: 100%;
			margin: 3px 0;
		}
		table {
			width: 100%;
		}
	</style>

</head>
<body>
	<h1>DATA PASIEN VIRUS CIVID-19</h1>
	<hr>
	<br>
	<!-- Form input data -->
	<form method="get">
		<table>
			<tr>
				<td width="130">Nama Wilayah</td>
				<td>:</td>
				<td>
					<select name="namaWilayah">
						<option>Nama Wilayah</option>
						<option value="DKI Jakarta">DKI Jakarta</option>
						<option value="Jawa Barat">Jawa Barat</option>
						<option value="Banten">Banten</option>
						<option value="Jawa Tengah">Jawa Tengah</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jumlah Positif</td>
				<td>:</td>
				<td>
					<input type="text" name="jmlPositif">
				</td>
			</tr>
			<tr>
				<td>Jumlah Dirawat</td>
				<td>:</td>
				<td>
					<input type="text" name="jmlDirawat">
				</td>
			</tr>
			<tr>
				<td>Jumlah Sembuh</td>
				<td>:</td>
				<td>
					<input type="text" name="jmlSembuh">
				</td>
			</tr>
			<tr>
				<td>Jumlah Meninggal</td>
				<td>:</td>
				<td>
					<input type="text" name="jmlMeninggal">
				</td>
			</tr>
			<tr>
				<td>Nama Operator</td>
				<td>:</td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td>NIM Mahasiswa</td>
				<td>:</td>
				<td>
					<input type="text" name="nim">
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<button name="btn-submit" type="submit">SIMPAN</button>
				</td>
			</tr>
		</table>
	</form>
	<br><br><br><br>

	<!-- Output -->
	<?php if (isset($_GET['nama'])) { ?>
		<center><h1>Data Pemantauan COVID19 Wilayah <?php echo $_GET['namaWilayah']; ?> <br>
			<?php $dt = new DateTime('now', new DateTimezone('Asia/Jakarta')); ?>
			Per <?php echo $dt->format("d-F-y H:i:s"); ?> <br>
			<?php echo $_GET['nama']; ?> 
			<?php echo $_GET['nim']; ?>
			<table border="1">
				<tr>
					<th>Positif</th>
					<th>Dirawat</th>
					<th>Sembuh</th>
					<th>Meninggal</th>
				</tr>
				<tr>
					<th><?php echo $_GET['jmlPositif']; ?></th>
					<th><?php echo $_GET['jmlDirawat']; ?></th>
					<th><?php echo $_GET['jmlSembuh']; ?></th>
					<th><?php echo $_GET['jmlMeninggal']; ?></th>
				</tr>
			</table></h1></center>
			<?php
			if(isset($_GET['nama']))
			{
				$namaWilayah=$_GET['namaWilayah'];
				$jmlPositif=$_GET['jmlPositif'];
				$jmlDirawat=$_GET['jmlDirawat'];
				$jmlSembuh=$_GET['jmlSembuh'];
				$jmlMeninggal=$_GET['jmlMeninggal'];
				$nama=$_GET['nama'];
				$nim=$_GET['nim'];
				$fp = fopen('db.html', 'a');
				fwrite($fp, "Nama Wilayah: " . $namaWilayah . "\n");
				fwrite($fp, "Jumlah Positif: " . $jmlPositif . "\n");
				fwrite($fp, "Jumlah Dirawat: " . $jmlDirawat . "\n");
				fwrite($fp, "Jumlah Sembuh: " . $jmlSembuh . "\n");
				fwrite($fp, "Jumlah Meninggal: " . $jmlMeninggal . "\n");
				fwrite($fp, "Nama: " . $nama . "\n");
				fwrite($fp, "NIM: " . $nim . "\n\n");
				fclose($fp);
			}
			?>
	<?php } ?>
	
	</body>
	</html>