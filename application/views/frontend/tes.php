<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th width="2%">No.</th>
				<th width="30%">Narasi</th>
				<th width="20%">Kegiatan</th>
				<th width="20%">Hasil</th>
			</tr>
		</thead>
		<tbody>
		<?php 
		$i = 1;
		foreach ($kebijakan as $key) {
		$data = $this->M_progress->getProgressKebijakan($key->no);
		if (count($data->result()) > 0) {
		?>
			<tr>
				<td rowspan="<?php echo count($data->result());?>"><?php echo $i;?></td>
				<td rowspan="<?php echo count($data->result());?>"><?php echo nl2br($key->narasi);?></td>
				<td><?php echo nl2br($data->result()[0]->uraian);?></td>
				<td><?php echo nl2br($data->result()[0]->hasil);?></td>
			</tr>
			<?php 
			for($x=1;$x<$data->num_rows();$x++){
			?>
			<tr>
				<td><?php echo nl2br($data->result()[$x]->uraian);?></td>
				<td><?php echo nl2br($data->result()[$x]->hasil);?></td>
			</tr>
		<?php
				}	$i++;
			}
		} ?>
		</tbody>
	</table>
</body>
</html>