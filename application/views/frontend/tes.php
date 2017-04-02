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
	$z=0;
	$data = $kprogress->result();
	for ($i=0; $i < $kprogress->num_rows() ; $i++) { 
		# code...
		$baris[$i][1] = () ? a : b ;
	}
	?>
<script type="text/javascript">
	$(document).ready( function () {
  
	var data = <?php echo json_encode($kprogress);?>;
  var table = $('#example').DataTable({
    columns: [
        {
            name: 'first',
            title: 'ID',
        },
        {
            name: 'second',
            title: 'Name',
        },
        {
            title: 'Subject',
        }, 
        {
            title: 'Marks',
        },
    ],
    data: data,
    rowsGroup: [
      'first:name',
      'second:name'
    ],
    pageLength: '20',
    });
} );
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
		
		</tbody>
	</table>
</body>
</html>