<?php 
	$action = base_url()."Sesdep/update/".$this->uri->segment(3);
?>
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
<div class="container" >
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url();?>fagenda">Agenda</a></li>
        <li class="breadcrumb-item active">Update Anggaran Agenda</a></li>
    </ol>
    <div class="panel panel-info">
                <div class="panel-heading">Form</div>
                <div class="panel-body">
                    <div id="FormLogin" class="col-sm-7">
                        <form action="<?php echo  $action;?>" method="post">
							<div class="form-group">
                                <label>Agenda : </label>
                                <input type="text" class="form-control" value="<?php echo $data[0]->narasi;?>" disabled/>
                            </div>
                            <div class="form-group">
                                <label>Waktu Agenda : </label>
                                <input type="text" class="form-control" value="<?php echo $data[0]->tanggal;?>" disabled/>
                            </div>
                            <div class="form-group">
								<label>Tanggal Pengajuan SPD : </label>
								<input type="text" class="form-control" id="tglPengajuanSpd" name="tglPengajuanSpd" />
							</div>
							<div class="form-group">
								<label>Tanggal SPD : </label>
                                <input type="text" class="form-control" id="tglSpd" name="tglSpd" />
							</div>
							<div class="form-group">
								<label>Tanggal Pencairan : </label>
                                <input type="text" class="form-control" id="tglPencairan" name="tglPencairan" />
							</div>
							<div class="form-group">
								<input type="submit" value="Submit" class="btn btn-primary">
								<input type="reset" value="Reset" class="btn btn-warning">
							</div>
						</form>
                    </div>
                    <div class="col-sm-5 alert alert-success">
                        <p class="heading"><h4><b>Tata Cara Pengisian</b> : </h4></p>
                        <ol>
                            <li>Mengisi Nama Kegiatan sesuai Kegiatan yang bejalan</li>
                            <li>Mengisi Waktu pelaksanaan dengan Benar</li>
                        </ol>
                    </div>
                </div>
            </div>    
</div>
</body>
</html>
<script>
      $(function() {
        $( '#tglPencairan' ).datepicker();
        $( '#tglPengajuanSpd' ).datepicker();
        $( '#tglSpd' ).datepicker();
      });
  </script>
