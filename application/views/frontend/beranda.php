<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
<div class="well well-sm">
    <div class="container">
        <div class="row">
        	<div class="col-md-12">
                <ol class="breadcrumb" style="margin-bottom: 0;">
                    <li class="active">
                    <a href="index.php">
                        <span class="glyphicon glyphicon-home"></span> Beranda
                    </a>
                    </li>
                </ol>
        	</div>
        </div>
    </div>
</div>
<div class="container">
	<div class="panel panel-default">
    	<div class="panel-body">
        <div class="well well-sm">
    <div class="container">
                <ol class="breadcrumb" style="margin-left: -20px;">
                    <li class="breadcrumb-item active">Kebijakan</li>
					<li class="pull-right">
                        <div class="btn-group">
                          <button type="button" class="btn btn-xs btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Export <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>beranda/excels/kebijakan/asdep1">Asdep1</a></li>
                            <li><a href="<?php echo base_url();?>beranda/excels/kebijakan/asdep2">Asdep2</a></li>
                            <li><a href="<?php echo base_url();?>beranda/excels/kebijakan/asdep3">Asdep3</a></li>
                            <li><a href="<?php echo base_url();?>beranda/excels/kebijakan/asdep4">Asdep4</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url();?>beranda/excels/kebijakan">Semua Kebijakan</a></li>
                          </ul>
                        </div>
                    </li>
                </ol>
	<table id="kebijakan" class="table table-bordered">
					<thead>
						<tr>
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
							<td><?php echo nl2br($key->narasi);?></td>
							<td><?php echo nl2br($key->status);?></td>
							<td><?php echo nl2br($key->indikator);?></td>
							<td><?php echo nl2br($key->pic);?></td>
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
	<br/>
	<?php 
	if ($this->session->userdata('session')) {
	?>
	<ol class="breadcrumb" style="margin-top:-20px;">
        <li class="breadcrumb-item active">Progress</li>
		<li class="pull-right">
                        <div class="btn-group">
                          <button type="button" class="btn btn-xs btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Export <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>beranda/excels/progress/asdep1">Asdep1</a></li>
                            <li><a href="<?php echo base_url();?>beranda/excels/progress/asdep2">Asdep2</a></li>
                            <li><a href="<?php echo base_url();?>beranda/excels/progress/asdep3">Asdep3</a></li>
                            <li><a href="<?php echo base_url();?>beranda/excels/progress/asdep4">Asdep4</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url();?>beranda/excels/progress">Semua Progress</a></li>
                          </ul>
                        </div>
                    </li>
	</ol>
	
	<table id="progress" class="table table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>Narasi</th>
							<th>Waktu/Tanggal</th>
							<th>Uraian</th>
							<th>Tindak Lanjut</th>
							<th>Masalah</th>
							<th>Dokumentasi</th>
                            <th>Output</th>
							<?php 
							if ($this->uri->segment(3)) {
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
							<td  width="0%"><?php echo $i;?></td>
							<td><?php echo nl2br($key->narasi);?></td>
							<td><?php echo nl2br($key->tanggal);?></td>
							<td><?php echo nl2br($key->uraian);?></td>
							<td><?php echo nl2br($key->tindak_ljt);?></td>
							<td><?php echo nl2br($key->masalah);?></td>
                            
							<td>
								<img style="width:90px;" src="<?php echo base_url();?>assets/images/uploads/<?php echo $key->dokumentasi1;?>"></img>
								<img style="width:90px;" src="<?php echo base_url();?>assets/images/uploads/<?php echo $key->dokumentasi2;?>"></img>
							</td>
                            <td width="15%"><?php echo nl2br($key->hasil);?></td>
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
		<li class="breadcrumb-item active">Agenda</li>
		<li class="pull-right">
                        <div class="btn-group">
                          <button type="button" class="btn btn-xs btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Export <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>beranda/excels/agenda/asdep1">Asdep1</a></li>
                            <li><a href="<?php echo base_url();?>beranda/excels/agenda/asdep2">Asdep2</a></li>
                            <li><a href="<?php echo base_url();?>beranda/excels/agenda/asdep3">Asdep3</a></li>
                            <li><a href="<?php echo base_url();?>beranda/excels/agenda/asdep4">Asdep4</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url();?>beranda/excels/agenda">Semua Agenda</a></li>
                          </ul>
                        </div>
                    </li>
	</ol>
	<table id="agenda" class="table table-bordered" >
					<thead>
						<tr>
							<th>No.</th>
							<th>Narasi</th>
							<th>Waktu/Tanggal</th>
							<th>Uraian</th>
							<th>Output</th>
							<?php 
							if ($this->session->userdata('session') and $this->uri->segment(2)) {
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
							<td><?php echo nl2br($key->narasi);?></td>
              				<td><?php echo nl2br($key->tanggal);?></td>
							<td><?php echo nl2br($key->uraian);?></td>
							<td><?php echo nl2br($key->hasil);?></td>
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
				<?php
				}
				?>
				</div>
			</div>
</div>
</div>
</div>
<script type="text/javascript">
            $(document).ready(function() {
              $('#kebijakan').DataTable();
              $('#agenda').DataTable();
              $('#progress').DataTable();
          } );
</script>
