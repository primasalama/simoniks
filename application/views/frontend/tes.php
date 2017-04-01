<!DOCTYPE html>
<html>
<head>
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" media="screen">
	<title></title>
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
</head>
<body>
<script type="text/javascript">
            $(document).ready(function() {
              $('#kebijakan').DataTable();
          } );
</script>
<?php 
	$i=1;
	foreach ($kebijakan as $key) {
		$data = $this->M_progress->getProgressKebijakan($key->no);
		if (count($data->result()) > 0) {
			//print_r($data->num_rows());echo "<br/>";
			$z=0;
			
			foreach ($data->result() as $x) {
				//echo $z;
				$baris[$z][0] = $i;
				$baris[$z][1] = $key->narasi;
				$baris[$z][2] = $x->uraian;
				$baris[$z][3] = $x->tanggal;
				$baris[$z][4] = $x->tindak_ljt;
				$z++;
			}
		$i++;
		}
	}
	print_r($baris);
	?>
<script type="text/javascript">
	var data = <?php echo json_encode($baris);?>;
  console.log(data);
</script>
	<table id="" border="1">
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