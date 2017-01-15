
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
            <div class="container">
                <div class="col-sm-5">
                <ol class="breadcrumb" style="margin-top: -90px; margin-left: -20px; text-align: left; opacity: 0.8">
                    <li class="breadcrumb-item"><a href="#">SiMoniKS</a></li>
                    <li class="breadcrumb-item">Beranda</li>
                    <li class="breadcrumb-item active">Agenda Asisten Deputi 3</li>
                </ol>
                </div>
            <center>
                <table id="agenda" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kegiatan</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Tempat</th>
                            <th>Unit</th>
                            <?php 
                            if ($this->uri->segment(2)) {
                                ?><th>Action</th><?php
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=1;
                        foreach ($data as $key) {
                        ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $key->kegiatan;?></td>
                            <td><?php echo $key->tanggal;?></td>
                            <td><?php echo $key->pukul;?></td>
                            <td><?php echo $key->tempat;?></td>
                            <td><?php echo $key->unit;?></td>
                            <?php 
                            if ($this->uri->segment(2) == 'delete') {
                                ?><td>
                                    <a class="btn btn-danger" href="<?php echo base_url().$this->uri->Segment(1);?>/delete/<?php echo $key->no;?>"><span class="glyphicon glyphicon-trash"></span></a>
                                </td><?php
                            }
                            ?>
                            <?php 
                            if ($this->uri->segment(2) == 'update') {
                                ?><td>
                                    <a class="btn btn-warning" href="<?php echo base_url().$this->uri->Segment(1);?>/edit/<?php echo $key->no;?>"><span class="glyphicon glyphicon-edit"></span></a>
                                </td><?php
                            }
                            ?>
                        </tr>
                        <?php
                        $i++;}
                     ?>
                    </tbody>
                </table>
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
