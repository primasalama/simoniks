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
	//print_r($kprogress->num_rows());die();
	$z=1;
	$data = $kprogress->result();
	for ($i=0; $i <= $kprogress->num_rows() ; $i++) { 
		# code...
		if ($i != $kprogress->num_rows()) {
			if ($data[$i]->narasiKebijakan != $data[$i+1]->narasiKebijakan) {
				# code...
				$baris[$i][0] = $z ;$z++;
			}else{
				$baris[$i][0] = $z ;
			}
		}else{
			$baris[$i][0] = $z ;
		}
		$baris[$i][1] = $data[$i]->narasi;
		$baris[$i][2] = $data[$i]->uraian;
		$baris[$i][3] = $data[$i]->tindak_ljt;
		$baris[$i][4] = $data[$i]->masalah;
	}
	?>
<script type="text/javascript">
	$(document).ready( function () {
  
	var data = <?php echo json_encode($baris);?>;
	console.log(data);
});
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
		
		</tbody>
	</table>
</body>
</html>