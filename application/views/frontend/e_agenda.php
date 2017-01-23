<?php
	$nama_file = "Agenda_".$filename."_".date("Ymd").".xls";
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
	<td colspan="5" align="center"><h2><strong>KEBIJAKAN STRATEGIS</strong></h2></td>
</tr>
<tr>
    <td colspan="5" align="center"><h2><strong>ASISTEN DEPUTI SUMBER DAYA HAYATI</strong></h2></td>
</tr>
<tr>
	<td colspan="5" align="center"><h2><strong>TAHUN 2016</strong></h2></td>
</tr>
<tr height="20">
</tr>
<tr>
	<td align="center">NO</td>
	<td align="center">Narasi</td>
	<td align="center">Status Saat Ini</td>
	<td align="center">Indikator Keberhasilan</td>
	<td align="center">PIC</td>
	
</tr>
<?PHP
$i=1;
foreach($data as $key)
{
?>
<tr>
	<td ><?php echo $i;?></td>
	<td ><?php echo $key->narasi;?></td>
	<td ><?php echo $key->status;?></td>
	<td><?php echo $key->indikator;?></td>
	<td><?php echo $key->pic;?></td>
</tr>
<?php
$i++;
}
?>	
</table>