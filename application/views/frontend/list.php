
<div class="container" style="margin-top:80px;" >
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">SIMONIK</a></li>
		<li class="breadcrumb-item">Beranda</li>
		<li class="breadcrumb-item active">Kebijakan</li>
	</ol>
	<table id="kebijakan" class="table table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>Narasi</th>
							<th>Status</th>
							<th>Indikator</th>
							<th>PIC</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$i=1;
						foreach ($data as $key) {
						?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $key->narasi;?></td>
							<td><?php echo $key->status;?></td>
							<td><?php echo $key->indikator;?></td>
							<td><?php echo $key->pic;?></td>
						</tr>
						<?php
						$i++;}
					 ?>
					</tbody>
				</table>
</div>
</body>
</html>

<script type="text/javascript">
            $(document).ready(function() {
              $('#kebijakan').DataTable();
          } );
</script>
