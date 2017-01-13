
<script type="text/javascript">
            $(document).ready(function() {
              $('#kebijakan').DataTable();
          } );
</script>

<div class="col-sm-9">
		<div class="container-fluid">
			<ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href="<?php echo base_url().$this->uri->segment(1);?>">Kegiatan</a></li>
			  <li class="breadcrumb-item active">List</li>
			</ol>
			<div class="container">
				<table id="kebijakan" class="table table-responsive">
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
		</div>
</div>
<div class="col-sm-1">
	<a href="<?php echo base_url().$this->uri->Segment(1);?>/tambah" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
</div>