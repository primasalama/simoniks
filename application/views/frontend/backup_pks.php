<?php
	$nama_file = "KebijakanStrategis_".$filename."_".date("Ymd").".xls";
	if ($filename == null) {
		$span = 8;
	}else{
		$span = 7;
	}
	/*header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
	header("Content-type: application/vnd-ms-excel");
	header("Content-Type: application/force-download");
	header("Content-Type: application/octet-stream");
	header("Content-Type: application/download");
	header("Content-Disposition: attachment;filename=".$nama_file."");
	header("Content-Transfer-Encoding: binary ");*/
?>
<table width="100%" border="1" cellpadding="5" cellspacing="0">
<tr>
	<td colspan="<?php echo $span;?>" align="center"><h2><strong>LAPORAN PROGRESS KEBIJAKAN STRATEGIS</strong></h2></td>
</tr>
<tr>
<?php 
	if ($filename != null) {
		switch ($filename) {
			case 'asdep1':
				$title ="ASISTEN DEPUTI SUMBER DAYA HAYATI";
				echo '<td colspan="'.$span.'" align="center"><h2><strong>'.$title.'</strong></h2></td>';
				break;
			case 'asdep2':
				$title ="ASISTEN DEPUTI SUMBER DAYA MINERAL, ENERGI, DAN NON KONVESIONAL";
				echo '<td colspan="'.$span.'" align="center"><h2><strong>'.$title.'</strong></h2></td>';
				break;
			case 'asdep3':
				$title ="ASISTEN DEPUTI JASA KEMARITIMAN";
				echo '<td colspan="'.$span.'" align="center"><h2><strong>'.$title.'</strong></h2></td>';
				break;
			case 'asdep4':
				$title ="ASISTEN DEPUTI LINGKUNGAN DAN KEBENCANAAN MARITIM";
				echo '<td colspan="'.$span.'" align="center"><h2><strong>'.$title.'</strong></h2></td>';
				break;
			default:
				//echo "a";
				break;
		}
	}
?>
</tr>
<tr>
	<td colspan="<?php echo $span;?>" align="center"><h2><strong>TAHUN <?php echo date("Y");?></strong></h2></td>
</tr>
<tr height="20">
</tr>
<tr>
	<td align="center" style="vertical-align:top;">NO</td>
	<td align="center" style="vertical-align:top;">Kegiatan</td>
	<td align="center" style="vertical-align:top;">Capaian</td>
	<td align="center" style="vertical-align:top;">Tanggal</td>
	<td align="center" style="vertical-align:top;" >Kendala</td>
	<td align="center" style="vertical-align:top;">Tindak Lanjut</td>
	<td align="center" style="vertical-align:top;">Arahan yang diperlukan Menko Kemaritiman</td>
	
</tr>
<?php 
	$z=1;
	$n = $data->num_rows();
	$result = $data->result();
	//print_r($n);die();
	for($i=0;$i<$n;$i++) {
		 if ($result[$i]->tanggal1 != $result[$i]->tanggal2) {
	                  $jam1 = substr($result[$i]->tanggal1, 11,5);
	                  $jam2 = substr($result[$i]->tanggal2, 11,5);
	              }else{
	                  //$tanggal2 = substr($data[0]->tanggal2, 5,2)."/".substr($data[0]->tanggal2, 8,2)."/".substr($data[0]->tanggal2, 0,4);
	                  $jam1 = substr($result[$i]->tanggal1, 11,5);
	              }
		if ($result[$i]->narasiKebijakan != $result[$i+1]->narasiKebijakan) {
			?>
			<tr>
					<td align="center" ><?php echo $z;?></td>
					<td align="center" ><?php echo $result[$i]->narasi;?></td>
					<td align="center" ><?php echo $result[$i]->uraian?></td>
					<td><?php 
	                            if ($result[$i]->lokasi == '') {
	                              $tempat = '';
	                            }else{
	                              $tempat = " Di ".$result[$i]->lokasi;
	                            }

	                            if ($result[$i]->tanggal1 == $result[$i]->tanggal2) {
	                               echo date("d-M-Y",strtotime($result[$i]->tanggal1))." ".$jam1.$tempat;
	                            }else{
	                                echo date("d-M-Y",strtotime($result[$i]->tanggal1))." ".$jam1."s/d ".date("d-M-Y",strtotime($result[$i]->tanggal2))." ".$jam2.$tempat;
	                            }
	                            ?></td>
					<td align="center" ><?php echo nl2br($result[$i]->masalah);?></td>
					<td align="center" ><?php echo nl2br($result[$i]->tindak_ljt);?></td>
					<td align="center" ><?php echo nl2br($result[$i]->arahan);?></td>
				</tr>
			<?php 
		}else{
			?>
			<tr>
					<td align="center" ><?php echo $z;?></td>
					<td align="center" ><?php echo $result[$i]->narasi;?></td>
					<td align="center" ><?php echo $result[$i]->uraian?></td>
					<td><?php 
	                            if ($result[$i]->lokasi == '') {
	                              $tempat = '';
	                            }else{
	                              $tempat = " Di ".$result[$i]->lokasi;
	                            }

	                            if ($result[$i]->tanggal1 == $result[$i]->tanggal2) {
	                               echo date("d-M-Y",strtotime($result[$i]->tanggal1))." ".$jam1.$tempat;
	                            }else{
	                                echo date("d-M-Y",strtotime($result[$i]->tanggal1))." ".$jam1."s/d ".date("d-M-Y",strtotime($result[$i]->tanggal2))." ".$jam2.$tempat;
	                            }
	                            ?></td>
					<td align="center" ><?php echo nl2br($result[$i]->masalah);?></td>
					<td align="center" ><?php echo nl2br($result[$i]->tindak_ljt);?></td>
					<td align="center" ><?php echo nl2br($result[$i]->arahan);?></td>
				</tr>
			<?php
		}
	$z++;
	}
?>
</table>