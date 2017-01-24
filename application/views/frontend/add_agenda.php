<?php 
	if ($this->session->userdata('session')[0]->role == 'admin') {
		$action = base_url()."Agenda/add";
	}else{
		$action = base_url().$this->uri->Segment(1)."/add";
	}
?>
<div class="container" >
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url();?>">SIMONIK</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url();?>progress">Progress</a></li>
    </ol>
    <div class="panel panel-info">
                <div class="panel-heading">Form</div>
                <div class="panel-body">
                    <div id="FormLogin" class="col-sm-7">
                        <form action="<?php echo $action;?>" method="post">
							<div class="form-group">
								<label>Nama Kegiatan : </label>
								<input type="text" name="kegiatan" class="form-control" placeholder="Nama Kegiatan" required="true">
							</div>
							<div class="form-group">
								<label>Tanggal Pelaksanaan : </label>
								<input type="text" id="tanggal" name="tanggal" class="form-control" placeholder="tanggal" required="true">
							</div>
							<div class="form-group">
								<label>Waktu Pelaksanaan : </label>
								<input type="text" id="pukul" name="pukul" class="form-control" placeholder="Waktu Pelaksanaan" required="true">
							</div>
							<div class="form-group">
								<label>Tempat Pelaksanaan : </label>
								<input type="text" name="tempat" class="form-control" placeholder="Tempat Pelaksanaan" required="true">
							</div>
							<div class="form-group">
								<label>Unit Kerja : </label>
								<input type="text" name="unit" class="form-control" placeholder="Unit Kerja" required="true">
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
        $( '#tanggal' ).datepicker();
        $('#pukul').bootstrapMaterialDatePicker({
        	date: false,
        	format : 'HH:mm'
        });
      });
  </script>
