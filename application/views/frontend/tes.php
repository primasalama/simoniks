<!DOCTYPE html>
<html>
<head>
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" media="screen">

<link href="<?php echo base_url();?>assets/css/jquery.dataTables.css" rel="stylesheet" media="screen">
	<title></title>
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
            <script src="//cdn.rawgit.com/ashl1/datatables-rowsgroup/v1.0.0/dataTables.rowsGroup.js"></script>

</head>
<body>
	<style type="text/css">
body {
  font: 90%/1.45em "Helvetica Neue", HelveticaNeue, Verdana, Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
  color: #333;
  background-color: #fff;
}


div.container {
  min-width: 980px;
  margin: 0 auto;
}


	</style>
<script type="text/javascript">
            $(document).ready(function() {
              $('#kebijakan').DataTable();
          } );
</script>
<?php 
	//print_r($kprogress->num_rows());die();
	$z=1;
	$data = $kprogress->result();
	for ($i=0; $i < $kprogress->num_rows() ; $i++) { 
		# code...
		if ($i+1 != $kprogress->num_rows()) {
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
	 var table = $('#example').DataTable({
    columns: [
        {
            name: 'first',
            title: 'No',
        },
        {
            name: 'second',
            title: 'Narasi',
        },
        {
            title: 'Uraian',
        }, 
        {
            title: 'Tindak Lanjut',
        },
        {
            title: 'Masalah',
        },

    ],
    data: data,
    rowsGroup: [
      'first:name',
      'second:name',
    ],
    pageLength: '10',
    });
});
</script>
	<table id="example" border="1">
		
	</table>
</body>
</html>