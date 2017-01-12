<div class="col-sm-2 sidebar">
	<ul class="nav nav-sidebar">
        <li class="activer"><a href="<?php echo site_url();?>admin">Dashboard <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="<?php echo site_url();?>berita">Berita <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="<?php echo site_url();?>foto"">Foto</a></li>
        <li class="active"><a href="<?php echo site_url();?>testimonial">Testimonial</a></li>
    </ul>
</div>
<div class="col-sm-9">
		<div class="container-fluid">
			<ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
			  <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
			  <li class="breadcrumb-item active">Add</li>
			</ol>
			<div class="panel panel-info">
				<div class="panel-heading">Form</div>
				<div class="panel-body">
					<div id="FormLogin" class="text-centered">
						<form action="<?php echo base_url();?>Auth" method="post">
							<div class="form-group">
								<label>Narasi : </label>
								<textarea class="form-control" name="narasi" placeholder="Narasi"></textarea>
							</div>
							<div class="form-group">
								<label>Status : </label>
								<input type="text" name="status" class="form-control" placeholder="Status" required="true">
							</div>
							<div class="form-group">
								<label>Indikator : </label>
								<input type="text" name="status" class="form-control" placeholder="Status" required="true">
							</div>
							<div class="form-group">
								<label>PIC : </label>
								<input type="text" name="status" class="form-control" placeholder="Status" required="true">
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
				</div>
			</div>
	</div>
</div>
