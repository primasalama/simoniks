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
	<div class="collapse navbar-collapse">
        <ul class="nav navbar-nav" style="text-align:center">
            <a href="<?php echo base_url();?>agenda/asdep1" class="btn btn-default navbar-btn" style="background-color:#0067b5; color: #CCCCCC;">Agenda Asdep1</a>
            <a href="<?php echo base_url();?>agenda/asdep2" class="btn btn-default navbar-btn" style="background-color:#0067b5; color: #CCCCCC;">Agenda Asdep2</a>
            <a href="<?php echo base_url();?>agenda/asdep3" class="btn btn-default navbar-btn" style="background-color: #0067b5; color: #CCCCCC;">Agenda Asdep3</a>
            <a href="<?php echo base_url();?>agenda/asdep4" class="btn btn-default navbar-btn" style="background-color: #0067b5; color: #CCCCCC;">Agenda Asdep4</a>
        </ul>
	</div>
	<div class="panel panel-default">
    	<div class="panel-body">
        <div class="well well-sm">
    <div class="container">

	
	<ol class="breadcrumb" style="margin-top: 30px;">
  <?php 
  
  if ($this->uri->segment(2) != null) {
    ?>
    <li class="breadcrumb-item"><a href="<?php echo base_url().$this->uri->segment(1);?>"><?php echo $this->uri->segment(1);?></a></li>
    <li class="breadcrumb-item active"><?php echo $this->uri->segment(2);?></li>
    <?php
  }else{
    ?>
    <li class="breadcrumb-item active"><?php echo $this->uri->segment(1);?></li>
    <?php
  }
  if ($this->uri->segment(2) != null) {
    ?>
     <li class="pull-right"><a href="<?php echo base_url();?>Beranda/excels/agenda/<?php echo $this->session->userdata('session')[0]->role;?> " class="btn btn-xs btn-warning">Export</a></li><?php
  }else{
    ?>
     <li class="pull-right"><a href="<?php echo base_url();?>Beranda/excels/agenda/" class="btn btn-xs btn-warning">Export</a></li>
    <?php
  }
  if ($this->session->userdata('session')[0]->role == 'admin' or $this->session->userdata('session')) {
    echo '<li class="pull-right"><a href="'.base_url().'fagenda/" class="btn btn-xs btn-info">Tambah</a></li>';
  }
  ?>
  
 
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
							if ($this->uri->segment(2) or $this->session->userdata('session')[0]->role == 'admin') {
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
							if ($this->uri->segment(2) or $this->session->userdata('session')[0]->role == 'admin') {
								?>
								<td>
									<?php 
                  if ($this->session->userdata('session')[0]->role == 'admin') {
                    ?>
                    <a href="#" id="hapus" class="btn btn-md btn-danger"  data-href="<?php echo base_url();?>Agenda/delete/<?php echo $key->no;?>" data-book="<?php echo $key->kegiatan;?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus"></span></a>
                    <?php
                  }else{
                    ?>
                    <a href="#" id="hapus" class="btn btn-md btn-danger"  data-href="<?php echo base_url();?>fagenda/delete/<?php echo $key->no;?>" data-book="<?php echo $key->kegiatan;?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus"></span></a>
                    <?php
                  }
                  ?>
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
			</div>
</div>
</div>
</div>
<style>
.datepicker{z-index:1151 !important;}
</style>
<script type="text/javascript">
            $(document).ready(function() {
              $('#kebijakan').DataTable();
              $('#agenda').DataTable();
              $('#progress').DataTable();
              $('#myModal').on('shown.bs.modal', function () {
				  
				})
          } );
            $(function() {
			    $("body").delegate("#tanggal", function(){
			        $(this).datepicker();
			    });
});
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
        <form action="<?php echo base_url();?>fagenda/add" method="post">
							<div class="form-group">
								<label>Nama Kegiatan : </label>
								<input type="text" name="kegiatan" class="form-control" placeholder="" required="true">
							</div>
							<div class="form-group">
								<label>Tanggal Pelaksanaan : </label>
								<input type="text" id="tanggal" name="tanggal" class="form-control" placeholder="" required="true">
							</div>
							<div class="form-group">
								<label>Waktu Pelaksanaan : </label>
								<input type="text" id="pukul" name="pukul" class="form-control" placeholder="" required="true">
							</div>
							<div class="form-group">
								<label>Tempat Pelaksanaan : </label>
								<input type="text" name="tempat" class="form-control" placeholder="" required="true">
							</div>
							<div class="form-group">
								<label>Unit Kerja : </label>
								<input type="text" name="unit" class="form-control" placeholder="" required="true">
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
                                <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus Agenda</h4>
                            </div>
                        
                            <div class="modal-body">
                                <p>Anda ingin menghapus?</p>
                                Agenda Kegiatan :  <strong><span class="debug-url"></span></strong>
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