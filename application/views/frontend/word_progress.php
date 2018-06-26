<?php 
header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
	header("Content-Type: application/force-download");
	header("Content-Type: application/octet-stream");
	header("Content-Type: application/download");
header("Content-type: application/msword");
header("Content-disposition: inline; filename=laporan.doc");
header("Content-Transfer-Encoding: binary ");

?>

<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			align-self: center;
		}
		ul{
			list-style-type: upper-alpha;
		}
		.bagian1{
			padding-right: 75px;
			padding-left: 75px;
		}
		#cell1{
			width: 250px;
		}
	</style>
</head>
<body>
	<h1>
		<center>Laporan Mingguan</center>
	</h1>
	<div class="bagian1">
		<p>
			<table>
				<tr>
					<td id="cell1">Unit Kerja</td>
					<td> : Asdep/Deputi</td>
				</tr>
				<tr>
					<td id="cell1">Tipe Laporan</td>
					<td> : Mingguan</td>
				</tr>
				<tr>
					<td id="cell1">Judul Laporan</td>
					<td> : Kebijakan Deputi/Asdep</td>
				</tr>
			</table>
		</p>
	</div>
	<div>
		<ul>
			<li>
				<span>Progress</span>
				<p>Program</p>
				<p>Capaian</p>
				<p>Keterangan</p>
			</li>
			<li>
				<span>Kendala</span>
				<p>Kendala</p>
			</li>
			<li>
				<span>Hasil & Tindak Lanjut</span>
				<p>Kendala</p>
			</li>
		</ul>
	</div>
	
</body>
</html>