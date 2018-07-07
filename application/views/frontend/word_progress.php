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


		if ($data[0]->lokasi == '') {
                              $tempat = '';
                            }else{
                              $tempat = " Di ".$data[0]->lokasi;
                            }

                            if ($data[0]->tanggal1 == $data[0]->tanggal2) {
                               $keterangan =  date("d-M-Y",strtotime($data[0]->tanggal1))." ".$tempat;
                            }else{
                                //echo date("d-M-Y",strtotime($data[0]->tanggal1))." "."s/d ".date("d-M-Y",strtotime($data[0]->tanggal2))." ".$tempat;
                                $keterangan = date("d-M-Y",strtotime($data[0]->tanggal1))." ".$tempat;
                            }	

?>

<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			align-self: center;
			font-family: "Times New Roman", Times, serif;

		}
		pre{
			font-family: "Times New Roman", Times, serif;
			font-size: 1em;
		}
		p{
			font-family: "Times New Roman", Times, serif;
		}
		ul{
			list-style-type: upper-alpha;
		}
		.bagian1{
			padding-right: 75px;
			font-family: "Times New Roman", Times, serif;
			padding-left: 75px;
		}
		#cell1{
			width: 250px;
			font-family: "Times New Roman", Times, serif;
		}
	</style>
</head>
<body>
	<h1>
		<center>Laporan Kegiatan</center>
	</h1>
	<div class="bagian1">
		<p>
			<table style="align:"center">
				<tr>
					<td id="cell1">Unit Kerja</td>
					<td> : <?php echo $data[0]->label;?></td>
				</tr>
				<tr>
					<td id="cell1">Tipe Laporan</td>
					<td> : Mingguan</td>
				</tr>
				<tr>
					<td id="cell1">Judul Laporan</td>
					<td> : <?php echo $data[0]->narasi?></td>
				</tr>
			</table>
		</p>
	</div>
	<div>
		<ul>
			<li>
				<span>Progress</span>
				<p>Program : <?php echo $data[0]->narasi;?></p>
				<p><?php echo $keterangan;?></p>
				<pre>Komponen Kegiatan<?php echo $data[0]->uraian;?></pre>

			</li>
			<li>
				<span>Kendala</span>
				<p><?php echo $data[0]->masalah;?></p>
			</li>
			<li>
				<span>Hasil & Tindak Lanjut</span>
				<p><?php echo $data[0]->tindak_ljt;?></p>
				<p>Arahan MENKO :  <?php if($data[0]->arahan != ""){echo $data[0]->arahan;}else{echo "-";}?></p>
			</li>
		</ul>
	</div>
	<style type="text/css">
		table { table-layout: fixed; }
	td { width: 33%; }
	</style>
	<table>
		<tr>
			<td>Kepala Bidang</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>Asisten Deputi</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td>Kepala Bidang</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>Asisten Deputi</td>
		</tr>
	</table>
</body>
</html>