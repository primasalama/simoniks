s<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Login Page">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/maritim.png">
    <title>SiMoniKS :: <?php echo $this->uri->segment(1);?></title>
  <!-- Boostrap-->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
  <!-- Buat Datepicker-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/datepicker.css">
  <!-- datatablenya -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css">
  <!-- fotn awesome-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- ini jquery ui-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery-ui.css">
  <!-- Buat View Port Edge-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ie10-viewport-bug-workaround.css">
  <!-- Material Datetimepicker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-material-datetimepicker.css" />

  <!-- JQuery Wajib Jangan Ilang -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.1.min.js"></script>
  <!-- Js buat bootstrap-->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <!-- Js datatables -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
  <!-- Js buat datepicker -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/material.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/moment-with-locales.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-material-datetimepicker.js"></script>

  <!-- END -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
  <!-- js buat time picker-->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.timepicker.js"></script>
</head>

  <body style="background-color: #CBCBFE;">
  <nav class="navbar navbar-default navbar-fixed-top" style="height: 130px; background-color: #6699FF">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <div class="navbar-brand" style="text-align:center; margin-left: 300px; margin-top: -15px; color: white ">
      <img src="<?php echo base_url();?>assets/img/maritim.PNG" width="150" height="150">
      </div>
        <div class="navbar-brand" style="text-align:center; margin-top: 20px; color: white ">
        DEPUTI BIDANG KOORDINASI SUMBER DAYA DAN JASA <br /><br/>
        KEMENTRIAN KOORDINATOR BIDANG KEMARITIMAN</div>
      <?php
        if ($this->session->userdata('session')) {
            ?>
            <div  class="navbar-brand">
                <a href="<?php echo base_url();?>Auth/logout" class="pull-right btn btn-warning">Logout</a>
              </div>
            <?php
        }
       ?>
    </div>
  </div><!-- /.container-fluid -->
</nav>
<style type="text/css">
  #read{
    pointer-events: none;
       cursor: default;
  }
</style>