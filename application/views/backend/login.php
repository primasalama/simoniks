
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/maritim.png">
    <title>SIMONIKS :: <?php echo $this->uri->segment(1);?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/one-page-wonder.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
   <nav class="navbar navbar-default navbar-fixed-top" style="height: 130px; background-color: #6699FF;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <div class="navbar-brand" style="text-align:center; margin-left: 300px; margin-top: -15px; color: white ">
    <img src="<?php echo base_url();?>assets/img/maritim.PNG" width="150" height="150">
    </div>
      <div class="navbar-brand" style="text-align:center; margin-top: 20px; color: white ">
      DEPUTI BIDANG KOORDINASI SUMBER DAYA DAN JASA <br /><br/>
      KEMENTRIAN KOORDINATOR BIDANG KEMARITIMAN</div>
    </div>
  </div><!-- /.container-fluid -->
</nav>

        <div class="headline">
            <div class="container" style="background-color: #CBCBFE">
	<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
		
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
</div>
</header>
    

    <nav class="navbar navbar-default navbar-fixed-bottom" style="height: 130px; background-color: #6699FF">
    <div class="navbar-footer">
        <p class="pull-left" style="margin-left: 40px; margin-top: 10px; font-size: 10pt; color: white">Deputi Bidang Koordinasi Sumber Daya Alam dan Jasa<br />
        Kementerian Koordinator Bidang Kemaritiman</p>
        <p class="pull-right" style="margin-right: 40px; margin-top: 10px; font-size: 10pt; color: white">
        Jl. M. H. Thamrin No. 8, Gedung I BPPT Lt.8 ,Jakarta Pusat 10340<br />
        Telpon (021) 22392589, Fax (021) 22392589<br />
        Email : deputi2_sdaj@maritim.go.id <br />
        Jawa Barat, Indonesia</p>
    </div>
</nav>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>

</html>

