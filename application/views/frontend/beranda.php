
<div class="container" style="margin-top:120px;" >

	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>">SiMoniKS</a></li>
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>beranda">Beranda</a></li>
		<li class="breadcrumb-item active">Kebijakan</li>
		<li class="pull-right"><a href="<?php echo base_url();?>beranda/excel/kebijakan" class="btn btn-xs btn-warning">Export</a></li>
	</ol>
	<table id="kebijakan" class="table table-bordered">
					<thead>
						<tr style="">
							<th>No.</th>
							<th>Narasi</th>
							<th>Status</th>
							<th>Indikator</th>
							<th>PIC</th>
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
						foreach ($kebijakan as $key) {
						?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $key->narasi;?></td>
							<td><?php echo $key->status;?></td>
							<td><?php echo $key->indikator;?></td>
							<td><?php echo $key->pic;?></td>
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

	<ol class="breadcrumb" style="margin-top: 30px;">
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>">SiMoniKS</a></li>
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>beranda">Beranda</a></li>
		<li class="breadcrumb-item active">Progress</li>
	</ol>
	<table id="progress" class="table table-bordered">
					<thead>
						<tr style="background-color: #6699FF; color: white;">
							<th>No.</th>
							<th>Kegiatan</th>
							<th>Tanggal</th>
							<th>Hasil</th>
							<th>Tindak Lanjut</th>
							<th>Masalah</th>
							<th>Dokumentasi</th>
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
						foreach ($progress as $key) {
						?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $key->kegiatan;?></td>
							<td><?php echo $key->tanggal;?></td>
							<td><?php echo $key->hasil;?></td>
							<td><?php echo $key->tindak_ljt;?></td>
							<td><?php echo $key->masalah;?></td>
							<td>
								<img style="width:90px;" src="<?php echo base_url();?>assets/images/uploads/<?php echo $key->dokumentasi1;?>"></img>
								<img style="width:90px;" src="<?php echo base_url();?>assets/images/uploads/<?php echo $key->dokumentasi2;?>"></img>
							</td>
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

	<ol class="breadcrumb" style="margin-top: 30px;">
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>">SiMoniKS</a></li>
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>beranda">Beranda</a></li>
		<li class="breadcrumb-item active">Agenda</li>
	</ol>
	<table id="agenda" class="table table-bordered" >
					<thead>
						<tr style="background-color: #6699FF; color: white;">
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
						foreach ($agenda as $key) {
						?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $key->kegiatan;?></td>
							<td><?php echo $key->tanggal;?></td>
							<td><?php echo $key->pukul;?></td>
							<td><?php echo $key->tempat;?></td>
							<td><?php echo $key->unit;?></td>
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
</body>
</html>

<script type="text/javascript">
            $(document).ready(function() {
              $('#kebijakan').DataTable();
              $('#agenda').DataTable();
              $('#progress').DataTable();
          } );
</script>
