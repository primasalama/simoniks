<div class="container-fluid">
	<div class="col-sm-offset-3 col-sm-9">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
		  <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
		  <li class="breadcrumb-item active">Add</li>
		</ol>
		<div class="panel panel-info">
			<div class="panel-heading">Login</div>
			<div class="panel-body">
				<div id="FormLogin" class="text-centered">
					<form action="<?php echo base_url();?>Auth" method="post">
						<div class="form-group">
							<label>Username : </label>
							<input type="text" name="username" class="form-control" placeholder="Username" required="true">
						</div>
						<div class="form-group">
							<label>Password : </label>
							<input type="password" name="password" class="form-control" placeholder="Password" required="true">
						</div>
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
