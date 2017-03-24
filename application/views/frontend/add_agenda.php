<?php 
	if ($this->session->userdata('session')[0]->role == 'admin') {
		$action = base_url()."Agenda/add";
	}else{
		$action = base_url().$this->uri->Segment(1)."/add";
	}
?>
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
<div class="container" >
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url();?>agenda">Agenda</a></li>
        <li class="breadcrumb-item active">Tambah Agenda</li>
    </ol>
    <div class="panel panel-info">
                <div class="panel-heading">Form</div>
                <div class="panel-body">
                    <div id="FormLogin" class="col-sm-7">
                        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Narasi</label>
                                        <select class="form-control" name="narasiKebijakan">
                                                <?php 
                                                foreach ($data as $key) {
                                                    ?>
                                                    <option value="<?php echo $key->no?>"><?php echo $key->narasi?></option>
                                                    <?php
                                                }
                                                ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pengajuan : </label>
                                        <input type="text" name="tanggal" id="tanggal" class="form-control" placeholder="Tanggal Pengajuan" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label>Rencana Tanggal Pelaksanaan Kegiatan : </label>
                                        <input type="text" class="form-control" id="tglPengajuan" name="tglPengajuan" placeholder="Rencana Tanggal Pelaksanaan Kegiatan" required="true"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Anggaran (Rp) : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon3">Rp. </span>
                                            <input type="number" class="form-control" name="anggaran" required="true"/>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Uraian : </label>
                                        <textarea class="form-control" name="uraian" rows="5" placeholder="Uraian" required="true"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Output : </label>
                                        <textarea class="form-control" name="hasil" rows="5" placeholder="Output" required="true"></textarea>
                                    </div>
                                    

                                    <?php 
                                    if ($this->session->userdata('session')[0]->role == 'admin') {
                                        ?>
                                         <div class="form-group">
                                            <label>Asisten Deputi</label>
                                            <select class="form-control" name="deputi">
                                                <option value="asdep1">Asisten Deputi 1</option>
                                                <option value="asdep2">Asisten Deputi 2</option>
                                                <option value="asdep3">Asisten Deputi 3</option>
                                                <option value="asdep4">Asisten Deputi 4</option>
                                            </select>
                                        </div>
                                        <?php 
                                    }
                                    ?>                                    
                                    <!--
                                    <div class="form-group">
                                        <label>Status : </label>
                                        <input type="text" name="status" class="form-control" placeholder="Status" required="true">
                                    </div>
                                    -->
                                    <div class="form-group">
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                        <input type="reset" value="Reset" class="btn btn-warning">
                                    </div>
                                </form>
                    </div>
                    <div class="col-sm-5 alert alert-success">
                        <p class="heading"><h4><b>Tata Cara Pengisian</b> : </h4></p>
                        <ol>
                            <li>Memilih narasi kebijakan sesuai dengan agenda yang akan dilakukan</li>
                            <li>Mengisi Waktu/Tanggal dengan format. Contoh: Minggu I Januari/ 04</li>
                            <li>Mengisi Uraian tentang isi dari agenda yang akan dilakukan</li>
                            <li>Mengisi Output dari agenda</li>
                        </ol>
                    </div>
                </div>
            </div>    
</div>
</body>
</html>
<script>
      $(function() {
        $( '#tanggal' ).datepicker();
        $( '#tglPengajuan' ).datepicker();
        $('#pukul').bootstrapMaterialDatePicker({
        	date: false,
        	format : 'HH:mm'
        });
      });
  </script>
