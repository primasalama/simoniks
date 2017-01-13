<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
      <a class="navbar-brand" href="<?php echo base_url();?>admin">Dashboard SIMONIKS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
          <li><a data-toggle="modal" href="#admin"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('sesi')['nama'];?></a></li>
          <li><a href="<?php echo base_url();?>login/logout"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>