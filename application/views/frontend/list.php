<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
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
	<div class="panel panel-default">
    	<div class="panel-body">
        <div class="well well-sm">
    <div class="container">
                <ol class="breadcrumb" style="margin-left: -20px;">
					<li class="breadcrumb-item active">Kebijakan</li>
					<li class="breadcrumb-item active"><?php echo $this->session->userdata('session')[0]->role;?></li>
                    
					<li class="pull-right" style="margin-right: -20px;"><a href="<?php echo base_url();?>beranda/excels/kebijakan/<?php echo $this->uri->segment(3);?>" class="btn btn-xs btn-warning">Export</a></li>
                     <?php 
                    if ($this->session->userdata('session')[0]->role == 'admin') {
                       ?>
                        <li class="pull-right"><a href="<?php echo base_url();?>Fkebijakan/index/<?php echo $this->uri->segment(3);?>" class="btn btn-info btn-xs">Tambah</a></li>
                        <li class="pull-right"><a href="<?php echo base_url();?>Fkebijakan/kabid/" class="btn btn-default btn-xs">Data Kabid</a></li>
                        
                       <?php
                    }
                    ?>
                </ol>
	<table id="kebijakan" class="table table-bordered">
					<thead>
						<tr>
							<th width="2%">No.</th>
							<th width="20%">Narasi</th>
							<th width="20%">Status</th>
							<th width="20%">Indikator</th>
							<th width="20%">PIC</th>
                            <th width="20%">Keterangan</th>
                            
							<?php 
							if ($this->uri->segment(2) == 'view' and $this->session->userdata('session')[0]->role == 'admin' ) {
								?><th width="15%">Action</th><?php
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
                                <?php 
                                if (strlen($key->status) > 300) {
                                    ?><td><?php echo substr(nl2br($key->status), 0,300);?><span id="status_<?php echo $i;?>" class="collapse"><?php echo substr(nl2br($key->status), 300) ?></span><a data-toggle="collapse" data-target="#status_<?php echo $i;?>"> Readmore..</a></td><?php
                                }else{
                                    ?> <td><?php echo nl2br($key->status);?></td><?php 
                                }
                                ?>
                                <?php 
                                if (strlen($key->indikator) > 300) {
                                    ?><td><?php echo substr(nl2br($key->indikator), 0,300);?><span id="Indikator_<?php echo $i;?>" class="collapse"><?php echo substr(nl2br($key->indikator), 300) ?></span><a data-toggle="collapse" data-target="#Indikator_<?php echo $i;?>"> Readmore..</a></td><?php
                                }else{
                                    ?> <td><?php echo nl2br($key->indikator);?></td><?php 
                                }
                                ?>
                                <td><?php echo nl2br($key->pic);?></td>
                                <td><?php echo $key->kabid."<br/><b>".$key->label_kabid."</b><br/>".$key->nip_kabid;?></td>
							<?php 
							if ($this->uri->segment(2) == 'view' and $this->session->userdata('session')[0]->role == 'admin') {
								?><td>
									<?php 
                                      if ($this->session->userdata('session')[0]->role == 'admin') {
                                        ?>
                                        <a href="#" id="hapus" class="btn btn-md btn-danger"  data-href="<?php echo base_url();?>Kebijakan/delete/<?php echo $key->no;?>" data-book="<?php echo $key->narasi;?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus"></span></a>
                                        <?php
                                      }else{
                                        ?>
                                        <a href="#" id="hapus" class="btn btn-md btn-danger"  data-href="<?php echo base_url();?>fkebijakan/delete/<?php echo $key->no;?>" data-book="<?php echo $key->narasi;?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus"></span></a>
                                        <?php
                                      }
                                      ?>
                                    <a class="btn btn-warning" href="<?php echo base_url();?>fkebijakan/edit/<?php echo $key->no;?>/<?php echo $this->uri->segment(3);?>"><span class="glyphicon glyphicon-edit"></span></a>

								</td><?php
							}?>
						</tr>
						<?php
						$i++;}
					 ?>
					</tbody>
				</table>
	<br/>
	<ol class="breadcrumb" style="margin-top: -20px;">
		<li class="breadcrumb-item active">Progress</li>
		<li class="breadcrumb-item active"><?php echo $this->session->userdata('session')[0]->role;?></li>
		<li class="pull-right"><a href="<?php echo base_url();?>fprogress/index/<?php echo $this->uri->segment(3);?>" class="btn btn-info btn-xs">Tambah</a></li>
		<li class="pull-right"><a href="<?php echo base_url();?>beranda/excels/progress/<?php echo $this->uri->segment(3);?>" class="btn btn-xs btn-warning">Export</a></li>
	</ol>
	<table id="progress" class="table table-bordered">
					<thead style="vertical-align:middle">
						<tr>
							<th style="vertical-align:middle">No.</th>
							<th style="vertical-align:middle" width="15%">Kegiatan</th>
							<th style="vertical-align:middle">Waktu/Tanggal</th>
                            <th style="vertical-align:middle">Sub Komponen</th>
                            <th style="vertical-align:middle">Kegiatan</th>
							<th style="vertical-align:middle" width="20%">Komponen Kegiatan</th>
                            <th style="vertical-align:middle" width="20%">Masalah</th>
                            <th style="vertical-align:middle" width="10%">Output</th>
							<th style="vertical-align:middle" width="20%">Tindak Lanjut</th>
                            <th style="vertical-align:middle">Arahan Untuk Kemenko Maritim</th>
							<th style="vertical-align:middle">Dokumentasi</th>
							<?php 
							if ($this->uri->segment(3)) {
								?><th style="vertical-align:middle" width="5%">Action</th><?php
							}
							?>
						</tr>
					</thead>
					<tbody>
					<?php
						$i=1;
						foreach ($progress as $key) {
                            if ($key->tanggal1 != $key->tanggal2) {
                              $jam1 = substr($key->tanggal1, 11,5);
                              $jam2 = substr($key->tanggal2, 11,5);
                          }else{
                              //$tanggal2 = substr($data[0]->tanggal2, 5,2)."/".substr($data[0]->tanggal2, 8,2)."/".substr($data[0]->tanggal2, 0,4);
                              $jam1 = substr($key->tanggal1, 11,5);
                          }
						?>
						<tr>
							<td><?php echo $i;?></td>
                            <td ><?php echo nl2br($key->narasi);?></td>
                            <td><?php 
                            if ($key->lokasi == '') {
                              $tempat = '';
                            }else{
                              $tempat = " Di ".$key->lokasi;
                            }

                            if ($key->tanggal1 == $key->tanggal2) {
                               echo date("d-M-Y",strtotime($key->tanggal1));
                            }else{
                                //echo date("d-M-Y",strtotime($key->tanggal1))." "."s/d ".date("d-M-Y",strtotime($key->tanggal2))." ".$tempat;
                                echo date("d-M-Y",strtotime($key->tanggal1));
                            }
                            ?></td>
                            <td><?php echo $key->sub_komponen;?></td>
                            <td><?php echo $key->kegiatan;?></td>
                            <?php 
                                if (strlen($key->uraian) > 100) {
                                    ?><td><?php echo substr(nl2br($key->uraian), 0,100);?><span id="uraian_<?php echo $i;?>" class="collapse"><?php echo substr(nl2br($key->uraian), 200) ?></span><a data-toggle="collapse" data-target="#uraian_<?php echo $i;?>"> Readmore..</a></td><?php
                                }else{
                                    ?> <td><?php echo nl2br($key->uraian);?></td><?php 
                                }
                            ?>
                            <?php 
                                if (strlen($key->masalah) > 100) {
                                    ?><td><?php echo substr(nl2br($key->masalah), 0,100);?><span id="masalah_<?php echo $i;?>" class="collapse"><?php echo substr(nl2br($key->masalah), 300) ?></span><a data-toggle="collapse" data-target="#masalah_<?php echo $i;?>"> Readmore..</a></td><?php
                                }else{
                                    ?> <td><?php echo nl2br($key->masalah);?></td><?php 
                                }
                            ?>
                            <?php 
                                if (strlen($key->hasil) > 100) {
                                    ?><td><?php echo substr(nl2br($key->hasil), 0,100);?><span id="hasil_<?php echo $i;?>" class="collapse"><?php echo substr(nl2br($key->hasil), 150) ?></span><a data-toggle="collapse" data-target="#hasil_<?php echo $i;?>"> Readmore..</a></td><?php
                                }else{
                                    ?> <td><?php echo nl2br($key->hasil);?></td><?php 
                                }
                            ?>
                            <?php 
                                if (strlen($key->tindak_ljt) > 100) {
                                    ?><td><?php echo substr(nl2br($key->tindak_ljt), 0,100);?><span id="tindak_ljt_<?php echo $i;?>" class="collapse"><?php echo substr(nl2br($key->tindak_ljt), 300) ?></span><a data-toggle="collapse" data-target="#tindak_ljt_<?php echo $i;?>"> Readmore..</a></td><?php
                                }else{
                                    ?> <td><?php echo nl2br($key->tindak_ljt);?></td><?php 
                                }
                            ?>
                            <?php 
                                if (strlen($key->arahan) > 100) {
                                    ?><td><?php echo substr(nl2br($key->arahan), 0,100);?><span id="arahan_<?php echo $i;?>" class="collapse"><?php echo substr(nl2br($key->arahan), 200) ?></span><a data-toggle="collapse" data-target="#arahan_<?php echo $i;?>"> Readmore..</a></td><?php
                                }else{
                                    ?> <td><?php echo nl2br($key->arahan);?></td><?php 
                                }
                            ?>
                           <td>
                                <?php if ($key->dokumentasi1 != "") {
                                    ?><a href="<?php echo base_url();?>assets/images/uploads/<?php echo $key->dokumentasi1;?>" data-lightbox="<?php echo $key->dokumentasi1?>" data-title="<?php echo $key->dokumentasi2;?>">
                                <img style="width:90px;" src="<?php echo base_url();?>assets/images/uploads/<?php echo $key->dokumentasi1;?>"></img></a><?php
                                }
                                if ($key->dokumentasi2 != "") {
                                    ?>
                                    <a href="<?php echo base_url();?>assets/images/uploads/<?php echo $key->dokumentasi2;?>" data-lightbox="<?php echo $key->dokumentasi1?>" data-title="<?php echo $key->dokumentasi1;?>">
                                <img style="width:90px;" src="<?php echo base_url();?>assets/images/uploads/<?php echo $key->dokumentasi2;?>"></img>
                                </a>
                                    <?php
                                }
                                ?>
                            </td>
							<?php 
							if ($this->uri->segment(3) == $this->session->userdata('session')[0]->role or $this->session->userdata('session')[0]->role == 'admin') {
								?><td>
									<a href="#" class="btn btn-md btn-danger"  data-href="<?php echo base_url();?>fprogress/delete/<?php echo $key->no;?>/<?php echo $this->uri->segment(3);?>" data-book="<?php echo $key->uraian;?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus"></span></a>
									<a class="btn btn-warning" href="<?php echo base_url();?>fprogress/edit/<?php echo $key->no."/".$this->uri->segment(3);?>"><span class="glyphicon glyphicon-edit"></span></a>
									<a class="btn btn-info" href="<?php echo base_url();?>fprogress/word/<?php echo $key->no."/".$this->uri->segment(3);?>"><span class="glyphicon glyphicon glyphicon-download"></span></a>
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