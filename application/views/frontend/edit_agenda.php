
<div class="container" style="margin-top:120px;" >
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url();?>">SIMONIK</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url();?>progress">Progress</a></li>
    </ol>
    <div class="panel panel-info">
                <div class="panel-heading">Form</div>
                <div class="panel-body">
                    <div id="FormLogin" class="col-sm-7">
                        <form action="<?php echo base_url();?>fagenda/update/<?php echo $data[0]->no;?>" method="post">
							<div class="form-group">
								<label>Nama Kegiatan : </label>
								<input type="text" name="kegiatan" class="form-control" value="<?php echo $data[0]->kegiatan;?>" placeholder="Nama Kegiatan" required="true">
							</div>
							<div class="form-group">
								<label>Tanggal Pelaksanaan : </label>
								<input type="text" id="tanggal" name="tanggal" class="form-control" value="<?php echo substr($data[0]->tanggal, 5,2)."/".substr($data[0]->tanggal, 8,2)."/".substr($data[0]->tanggal, 0,4);?>" placeholder="tanggal" required="true">
							</div>
							<div class="form-group">
								<label>Waktu Pelaksanaan : </label>
								<input type="text" id="pukul" name="pukul" class="form-control" value="<?php echo $data[0]->pukul;?>" placeholder="Waktu Pelaksanaan" required="true">
							</div>
							<div class="form-group">
								<label>Tempat Pelaksanaan : </label>
								<input type="text" name="tempat" class="form-control" value="<?php echo $data[0]->tempat;?>" placeholder="Tempat Pelaksanaan" required="true">
							</div>
							<div class="form-group">
								<label>Unit Kerja : </label>
								<input type="text" name="unit" class="form-control" placeholder="Unit Kerja" value="<?php echo $data[0]->unit;?>" required="true">
							</div>
							
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
