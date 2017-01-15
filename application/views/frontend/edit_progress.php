
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

    <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline">
            <div class="container" style="margin-top: 30px;">
            <center>
                <div class="panel panel-info">
                <div class="panel-heading">Form</div>
                <div class="panel-body">
                    <div id="FormLogin" class="col-sm-7">
                        <form action="<?php echo base_url().$this->uri->Segment(1);?>/add" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Kegiatan : </label>
                                <input type="text" name="kegiatan" class="form-control" placeholder="Nama Kegiatan" required="true">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pelaksanaan : </label>
                                <input type="text" id="tanggal" name="tanggal" class="form-control" placeholder="tanggal" required="true">
                            </div>
                            <div class="form-group">
                                <label>Hasil : </label>
                                <input type="text" name="hasil" class="form-control" placeholder="Hasil" required="true">
                            </div>
                            <div class="form-group">
                                <label>Tindak Lanjut : </label>
                                <input type="text" name="tindak_ljt" class="form-control" placeholder="Tindak Lanjut" required="true">
                            </div>
                            <div class="form-group">
                                <label>Masalah : </label>
                                <input type="text" name="masalah" class="form-control" placeholder="Masalah" required="true">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Dokumentasi 1</label>
                                <input type="file" name="foto1" class="form-control" placeholder="Unit Kerja" required="true">  
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Dokumentasi 2</label>
                                <input type="file" name="foto2" class="form-control" placeholder="Unit Kerja" required="true">  
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
                    </div><div class="col-sm-9">
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

                    <div class="col-sm-5 alert alert-success">
                        <p class="heading"><h4><b>Tata Cara Pengisian</b> : </h4></p>
                        <ol>
                            <li>Mengisi Nama Kegiatan sesuai Kegiatan yang bejalan</li>
                            <li>Mengisi Waktu pelaksanaan dengan Benar</li>
                        </ol>
                    </div>
                </div>
            </div>    
            </center>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-default navbar-fixed-bottom" style="height: 130px; background-color: #6699FF">
    <div class="navbar-footer">
        <p class="pull-left" style="margin-left: 40px; margin-top: 10px; font-size: 10pt; color: white">Deputi Bidang Koordinasi Sumber Daya Alam dan Jasa<br />
        Kementerian Koordinator Bidang Kemaritiman<br />
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
