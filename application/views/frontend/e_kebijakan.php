<?php
	$nama_file = "Kebijakan_".$filename."_".date("Ymd").".xls";
	if ($filename == null) {
		$span = 6;
	}else{
		$span = 5;
	}
	header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
	header("Content-type: application/vnd-ms-excel");
	header("Content-Type: application/force-download");
	header("Content-Type: application/octet-stream");
	header("Content-Type: application/download");
	header("Content-Disposition: attachment;filename=".$nama_file."");
	header("Content-Transfer-Encoding: binary ");
?>
<table width="100%" border="1" cellpadding="5" cellspacing="0">
<tr>
	<td colspan="<?php echo $span;?>" align="center"><h2><strong>LAPORAN KEBIJAKAN STRATEGIS</strong></h2></td>
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
				echo "a";
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
	<td align="center" style="vertical-align:top;">Narasi</td>
	<td align="center" style="vertical-align:top;">Status Saat Ini</td>
	<td align="center" style="vertical-align:top;">Indikator Keberhasilan</td>
	<td align="center" style="vertical-align:top;">PIC</td>
	<td align="center" style="vertical-align: top">Keterangan</td>
	<?php if ($filename == null) {
		echo '<td align="center"style="vertical-align:top;">Pembuat</td>';
	}?>
</tr>
<?PHP
$i=1;
foreach($data->result() as $key)
{
?>
<tr>
	<td style="vertical-align:top;"><?php echo $i;?></td>
	<td style="vertical-align:top;"><?php echo $key->narasi;?></td>
	<td style="vertical-align:top;"><?php echo $key->status;?></td>
	<td style="vertical-align:top;"><?php echo $key->indikator;?></td>
	<td style="vertical-align:top;"><?php echo $key->pic;?></td>
	 <td style="vertical-align:top;"> <?php echo $key->kabid."<br/><b>".$key->label_kabid."</b><br/>".$key->nip_kabid;?></td>
	<?php if ($filename == null) {
		echo '<td style="vertical-align:top;">'.$key->role.'</td>';
	}?>
</tr>
<?php
$i++;
}
?>	
</table>