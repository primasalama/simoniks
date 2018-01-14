
<script type="text/javascript">
            $(document).ready(function() {
              $('#kebijakan').DataTable();
          } );
</script>

<div class="col-sm-9">
		<div class="container-fluid">
			<ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href="#"><?php echo strtoupper($this->uri->Segment(1));?></a></li>
			  <li class="breadcrumb-item active"><?php echo strtoupper($this->uri->Segment(2));?></li>
			</ol>
			<div class="container">
				<table id="kebijakan" class="table table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th>Narasi</th>
							<th>Status</th>
							<th>Indikator</th>
							<th>PIC</th>
							<th>Author</th>
							<?php 
							if ($this->uri->segment(2)) {
								?><th>Action</th><?php
							}
							?>
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
							<td><?php echo $key->name." - ".$key->role;?></td>
							<?php 
							if ($this->uri->segment(2) == 'delete') {
								?><td>
									<a class="btn btn-danger" href="<?php echo base_url().$this->uri->Segment(1);?>/delete/<?php echo $key->no;?>"><span class="glyphicon glyphicon-trash"></span></a>
								</td><?php
							}
							?>
							<?php 
							if ($this->uri->segment(2) == 'update') {
								?><td>
									<a class="btn btn-warning" href="<?php echo base_url().$this->uri->Segment(1);?>/edit/<?php echo $key->no;?>"><span class="glyphicon glyphicon-edit"></span></a>
								</td><?php
							}
							?>
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
	<a href="<?php echo base_url().$this->uri->Segment(1);?>/tambah" class="btn btn-primary" style="margin-bottom:20px;"><span class="glyphicon glyphicon-plus"></span> Tambah</a>	
	<a href="<?php echo base_url().$this->uri->Segment(1);?>/delete" class="btn btn-warning" style="margin-bottom:20px;"><span class="glyphicon glyphicon-trash"></span> Delete</a>
	<a href="<?php echo base_url().$this->uri->Segment(1);?>/update" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Edit</a>

</div>