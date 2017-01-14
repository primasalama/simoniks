<div class="col-sm-9">
		<div class="container-fluid">
			<ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href="#"><?php echo $this->uri->Segment(1);?></a></li>
			  <li class="breadcrumb-item active"><?php echo $this->uri->Segment(2);?></li>
			</ol>
			<div class="panel panel-info">
				<div class="panel-heading">Form</div>
				<div class="panel-body">
					<div id="FormLogin" class="col-sm-7">
						<form action="<?php echo base_url().$this->uri->Segment(1);?>/update/<?php echo $data[0]->no;?>" method="post">
							<div class="form-group">
								<label>Nama Kegiatan : </label>
								<input type="text" name="kegiatan" class="form-control" value="<?php echo $data[0]->kegiatan;?>" placeholder="Nama Kegiatan" required="true">
							</div>
							<div class="form-group">
								<label>Tanggal Pelaksanaan : </label>
								<input type="text" id="tanggal" name="tanggal" class="form-control" value="<?php echo substr($data[0]->tanggal, 5,2)."/".substr($data[0]->tanggal, 8,2)."/".substr($data[0]->tanggal, 0,4);?>" placeholder="tanggal" required="true">
							</div>
							<div class="form-group">
								<label>Hasil : </label>
								<input type="text" name="hasil" class="form-control" value="<?php echo $data[0]->hasil;?>" placeholder="Hasil" required="true">
							</div>
							<div class="form-group">
								<label>Tindak Lanjut : </label>
								<input type="text" name="tindak_ljt" class="form-control" value="<?php echo $data[0]->tindak_ljt;?>" placeholder="Tindak Lanjut" required="true">
							</div>
							<div class="form-group">
								<label>Masalah : </label>
								<input type="text" name="masalah" class="form-control" value="<?php echo $data[0]->masalah;?>" placeholder="Masalah" required="true">
							</div>
							<div class="form-group col-sm-6">
								<label>Dokumentasi 1</label>
								<input type="file" name="foto1" class="form-control" placeholder="Unit Kerja" >	
							</div>
							<div class="form-group col-sm-6">
								<label>Dokumentasi 2</label>
								<input type="file" name="foto2" class="form-control" placeholder="Unit Kerja">	
							</div>
							
							<!--
							<div class="form-group">
								<label>Status : </label>
								<input type="text" name="status" class="form-control" placeholder="Status" required="true">
							</div>
							-->
							<div class="form-group">
								<input type="submit" value="Login" class="btn btn-primary">
								<input type="reset" value="Reset" class="btn btn-warning">
							</div>
						</form>
					</div>
					<div class="col-sm-5">
						<div class="alert alert-warning">
							<p class="heading"><h4><b>Tata Cara Pengisian</b> : </h4></p>
							<ol>
								<li>Mengisi Nama Kegiatan sesuai Kegiatan yang bejalan</li>
								<li>Mengisi Waktu pelaksanaan dengan Benar</li>
							</ol>
						</div>
						<div class="panel panel-warning">
							<div class="panel-heading">Dokumentasi</div>
							<div class="panel-body">
								<img style="width:170px;margin:5px'" class="img img-responsive" src="<?php echo base_url();?>assets/images/uploads/<?php echo $data[0]->dokumentasi1;?>"></img>
								<img style="width:170px;margin:5px;" class="img img-responsive" src="<?php echo base_url();?>assets/images/uploads/<?php echo $data[0]->dokumentasi2;?>"></img>
							</div>
						</div>
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
