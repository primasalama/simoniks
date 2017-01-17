
<div class="container" style="margin-top:120px;" >
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>">SiMoniKS</a></li>
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>agenda">Agenda</a></li>
		<li class="pull-right"><a href="<?php echo base_url();?>Fagenda/tambah" class="btn btn-xs btn-primary">Tambah</a></li>
	</ol>
	<table id="agenda" class="table table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th>Kegiatan</th>
							<th>Tanggal</th>
							<th>Jam</th>
							<th>Tempat</th>
							<th>Unit</th>
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
							<td><?php echo $key->kegiatan;?></td>
							<td><?php echo $key->tanggal;?></td>
							<td><?php echo $key->pukul;?></td>
							<td><?php echo $key->tempat;?></td>
							<td><?php echo $key->unit;?></td>
							<?php 
							if ($this->uri->segment(2)) {
								?>
								<td>
									<a class="btn btn-danger" href="<?php echo base_url()."f".$this->uri->segment(1);?>/delete/<?php echo $key->no;?>"><span class="glyphicon glyphicon-trash"></span></a>
									<a class="btn btn-warning" href="<?php echo base_url()."f".$this->uri->segment(1);?>/edit/<?php echo $key->no;?>"><span class="glyphicon glyphicon-edit"></span></a>
								</td>
								<?php
							}
							?>
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
              $('#agenda').DataTable();
          } );
</script>
