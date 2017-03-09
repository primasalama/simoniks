<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
<div class="well well-sm">
    <div class="container">
        <div class="row">
        	<div class="col-md-12">
                <ol class="breadcrumb" style="margin-bottom: 0;">
                    <li class="active">
                    <a href="<?php echo base_url();?>">
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
             <a href="<?php echo base_url();?>agenda/asdep4" class="btn btn-default navbar-btn" style="background-color: #0067b5; color: #CCCCCC;">SESDEP</a>
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
                            <li><a href="<?php echo base_url();?>beranda/excels/agenda">Semua</a></li>
                          </ul>
                        </div>
                    </li><?php
  }else{
    ?>
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
                            <li><a href="<?php echo base_url();?>beranda/excels/agenda">Semua</a></li>
                          </ul>
                        </div>
                    </li>
    <?php
  }
  if ($this->uri->segment(2) != null) {
    if ($this->session->userdata('session')[0]->role == 'admin' or $this->session->userdata('session')[0]->role != 'admin') {
      echo '<li class="pull-right"><a href="'.base_url().'fagenda/index/'.$this->uri->segment(2).'" class="btn btn-xs btn-info">Tambah</a></li>';
    }
  }
  ?>
  
 
</ol>


	<table id="agenda" class="table table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>Narasi</th>
							<th>Waktu/Tanggal</th>
              <th>Tanggal Pengajuan</th>
              <th>Anggaran</th>
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
						foreach ($data as $key) {
						?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $key->narasi;?></td>
              <td><?php echo $key->tanggal;?></td>
              <td></td>
              <td></td>
							<td><?php echo nl2br($key->uraian);?></td>
							<td><?php echo nl2br($key->hasil);?></td>
							<?php 
							if ($this->session->userdata('session') and $this->uri->segment(2)) {
								?>
								<td>
									<?php 
                  if ($this->session->userdata('session')[0]->role == 'admin') {
                    ?>
                    <a href="#" id="hapus" class="btn btn-md btn-danger"  data-href="<?php echo base_url();?>Agenda/delete/<?php echo $key->no;?>" data-book="<?php echo $key->narasi;?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus"></span></a>
                    <?php
                  }else{
                    ?>
                    <a href="#" id="hapus" class="btn btn-md btn-danger"  data-href="<?php echo base_url();?>fagenda/delete/<?php echo $key->no;?>" data-book="<?php echo $key->narasi;?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus"></span></a>
                    <?php
                  }
                  ?>
									<a class="btn btn-warning" href="<?php echo base_url()."f".$this->uri->segment(1);?>/edit/<?php echo $key->no."/".$this->uri->segment(2);?>"><span class="glyphicon glyphicon-edit"></span></a>
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