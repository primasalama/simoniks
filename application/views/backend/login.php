<div class="container">
	<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
		<center>
			<a href="https://maritim.go.id/">
				<img style="width:240px;" src="<?php echo base_url();?>assets/img/maritim.png" class="img img-responsive">
			</a>
			<br/>
			
		</center>
		<div class="panel panel-info">
			<div class="panel-heading">Login</div>
			<div class="panel-body">
				<?php 
					echo $data;
				?>
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
