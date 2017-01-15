<div class="col-sm-9">
		<div class="container-fluid">
			<ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href="#"><?php echo strtoupper($this->uri->Segment(1));?></a></li>
			  <li class="breadcrumb-item active"><?php echo strtoupper($this->uri->Segment(2));?></li>
			</ol>
			<div class="panel panel-info">
				<div class="panel-heading">Form</div>
				<div class="panel-body">
					<div id="FormLogin" class="col-sm-7">
						<form action="<?php echo base_url().$this->uri->Segment(1);?>/add" method="post">
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
</div>
<div class="col-sm-1">
	<a href="<?php echo base_url().$this->uri->Segment(1);?>/tambah" class="btn btn-primary" style="margin-bottom:20px;"><span class="glyphicon glyphicon-plus"></span> Tambah</a>	
	<a href="<?php echo base_url().$this->uri->Segment(1);?>/delete" class="btn btn-warning" style="margin-bottom:20px;"><span class="glyphicon glyphicon-trash"></span> Delete</a>
	<a href="<?php echo base_url().$this->uri->Segment(1);?>/update" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Edit</a>

</div>
<script>
      $(function() {
        $( '#tanggal' ).datepicker();
        $('#pukul').bootstrapMaterialDatePicker({
        	date: false,
        	format : 'HH:mm'
        });
      });
  </script>
