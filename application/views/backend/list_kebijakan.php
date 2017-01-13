
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
					</tbody>
				</table>
			</div>
		</div>
</div>