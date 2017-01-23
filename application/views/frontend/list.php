<style>
    .datepicker {
      z-index: 1600 !important; /* has to be larger than 1050 */
    }
</style>
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
					<li class="breadcrumb-item active"><?php echo $this->session->userdata('session')[0]->role;?></li>
					<li class="pull-right" style="margin-right: -20px;"><a href="<?php echo base_url();?>beranda/excel/kebijakan/<?php echo $this->session->userdata('session')[0]->role;?>" class="btn btn-xs btn-warning">Export</a></li>
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
							if ($this->uri->segment(3)) {
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
							if ($this->uri->segment(3) == $this->session->userdata('session')[0]->role) {
								?><td>
									<a class="btn btn-danger" href="<?php echo base_url().$this->uri->Segment(1);?>/delete/<?php echo $key->no;?>"><span class="glyphicon glyphicon-trash"></span></a>
									<a class="btn btn-warning" href="<?php echo base_url().$this->uri->Segment(1);?>/edit/<?php echo $key->no;?>"><span class="glyphicon glyphicon-edit"></span></a>
								</td><?php
							}?>
						</tr>
						<?php
						$i++;}
					 ?>
					</tbody>
				</table>
	
	<ol class="breadcrumb" style="margin-top: -20px;">
		<li class="breadcrumb-item active">Progress</li>
		<li class="breadcrumb-item active"><?php echo $this->session->userdata('session')[0]->role;?></li>
		<li class="pull-right"><a href="<?php echo base_url();?>fprogress" class="btn btn-info btn-xs">Tambah</a></li>
		<li class="pull-right"><a href="<?php echo base_url();?>beranda/excel/progress/<?php echo $this->session->userdata('session')[0]->role;?>" class="btn btn-xs btn-warning">Export</a></li>
	</ol>
	<table id="progress" class="table table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>Kegiatan</th>
							<th>Tanggal</th>
							<th>Hasil</th>
							<th>Tindak Lanjut</th>
							<th>Masalah</th>
							<th>Dokumentasi</th>
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
							if ($this->uri->segment(3) == $this->session->userdata('session')[0]->role) {
								?><td>
									<a href="#" class="btn btn-md btn-danger"  data-href="<?php echo base_url();?>fprogress/delete/<?php echo $key->no;?>" data-book="<?php echo $key->kegiatan;?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus"></span></a>
									<a class="btn btn-warning" href="<?php echo base_url();?>fprogress/edit/<?php echo $key->no;?>"><span class="glyphicon glyphicon-edit"></span></a>
									
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
</div>
</div>
<script>
        $(function () {
            $('#tanggal').datepicker({
            });
            $('#tanggal1').datepicker({
            });
        });
    </script>
<script type="text/javascript">
            $(document).ready(function() {
              $('#kebijakan').DataTable();
              $('#agenda').DataTable();
              $('#progress').DataTable();
          } );
</script>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:black;">Tambah Progress</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url();?>fprogress/add" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Kegiatan : </label>
                                <input type="text" name="kegiatan" class="form-control" placeholder="Nama Kegiatan" required="true">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pelaksanaan : </label>
                                <input type="text" id="tanggal" name="tanggal" class="form-control" placeholder="tanggal" required="true">
                            </div>
                            <div class="form-group">
                                <label>Hasil : </label>
                                <input type="text" name="hasil" class="form-control" placeholder="Hasil" required="true">
                            </div>
                            <div class="form-group">
                                <label>Tindak Lanjut : </label>
                                <input type="text" name="tindak_ljt" class="form-control" placeholder="Tindak Lanjut" required="true">
                            </div>
                            <div class="form-group">
                                <label>Masalah : </label>
                                <input type="text" name="masalah" class="form-control" placeholder="Masalah" required="true">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Dokumentasi 1</label>
                                <input type="file" name="foto1" class="form-control" placeholder="Unit Kerja" required="true">  
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Dokumentasi 2</label>
                                <input type="file" name="foto2" class="form-control" placeholder="Unit Kerja" required="true">  
                            </div>
      </div>
      <div class="modal-footer">
        <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary">
                                <input type="reset" value="Reset" class="btn btn-warning">
                            </div>
                        </form>
      </div>
    </div>

  </div>
</div>

<!-- Delete -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Konfirmasi Progress</h4>
                            </div>
                        
                            <div class="modal-body">
                                <p>Anda ingin menghapus?</p>
                                Nama Kegiatan :  <strong><span class="debug-url"></span></strong>
                            </div>
                            
                            <div class="modal-footer">
                                <a class="btn btn-danger btn-ok">Hapus</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Gagal</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $('#confirm-delete').on('show.bs.modal', function(e) {
                        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                        $('.debug-url').html($(e.relatedTarget).data('book'));
                    });
                </script>

 <!-- Delete -->
<div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Update Progress</h4>
                            </div>
                        
                            <div class="modal-body">
                                <form action="<?php echo base_url();?>fprogress/add" method="post" enctype="multipart/form-data">
	                            <div class="form-group">
	                                <label>Nama Kegiatan : </label>
	                                <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Nama Kegiatan" required="true">
	                            </div>
	                            <div class="form-group">
	                                <label>Tanggal Pelaksanaan : </label>
	                                <input type="text" id="tanggal1" name="tanggal" class="form-control" placeholder="tanggal" required="true">
	                            </div>
	                            <div class="form-group">
	                                <label>Hasil : </label>
	                                <input type="text" name="hasil" id="hasil" class="form-control" placeholder="Hasil" required="true">
	                            </div>
	                            <div class="form-group">
	                                <label>Tindak Lanjut : </label>
	                                <input type="text" name="tindak_ljt" id="tindak_ljt" class="form-control" placeholder="Tindak Lanjut" required="true">
	                            </div>
	                            <div class="form-group">
	                                <label>Masalah : </label>
	                                <input type="text" name="masalah" id="masalah" class="form-control" placeholder="Masalah" required="true">
	                            </div>
	                            <div class="form-group col-sm-6">
	                                <label>Dokumentasi 1</label>
	                                <input type="file" name="foto1" class="form-control" placeholder="Unit Kerja" required="true">  
	                            </div>
	                            <div class="form-group col-sm-6">
	                                <label>Dokumentasi 2</label>
	                                <input type="file" name="foto2" class="form-control" placeholder="Unit Kerja" required="true">  
	                            </div>
	                            </form>
                            </div>
                            
                            <div class="modal-footer">
                                <a class="btn btn-danger btn-ok">Hapus</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Gagal</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $('#modal-update').on('show.bs.modal', function(e) {
                    	var tgl = $(e.relatedTarget).data('tanggal');
                    	console.log('data :',tanggal);
                        $(this).find('#kegiatan').val($(e.relatedTarget).data('kegiatan'));
                        $(this).find('#hasil').val($(e.relatedTarget).data('hasil'));
                        $(this).find('#tindak_ljt').val($(e.relatedTarget).data('tindaklanjut'));
                        $(this).find('#masalah').val($(e.relatedTarget).data('masalah'));
                        $(this).find('#tanggal1').val($(e.relatedTarget).data('tanggal'));
                        //$('').html($(e.relatedTarget).data('book'));
                    });
                </script>