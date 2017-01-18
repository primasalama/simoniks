<style type="text/css">
body{
    color:black;
}
::-webkit-input-placeholder {
   color: grey;
}

:-moz-placeholder { /* Firefox 18- */
   color: grey;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: grey;  
}

:-ms-input-placeholder {  
   color: grey;  
}
</style>
<div class="well well-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb" style="margin-bottom: 0;">
                    <li class="active">
                    <a href="index.php">
                        <span class="glyphicon glyphicon-home"></span> Beranda
                    </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="well well-sm">
                <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">SiMoniKS</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>kebijakan">Kebijakan</a></li>
                </ol>
                <div class="panel panel-info">
                            <div class="panel-heading">Form</div>
                            <div class="panel-body">
                                <div id="FormLogin" class="col-sm-7">
                                    <form action="<?php echo base_url().$this->uri->Segment(1);?>/add" method="post">
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
                                            <input type="text" name="indikator" class="form-control" placeholder="indikator" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label>PIC : </label>
                                            <input type="text" name="pic" class="form-control" placeholder="pic" required="true">
                                        </div>
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
        </div>
    </div>
</div>

<script type="text/javascript">
            $(document).ready(function() {
              $('#kebijakan').DataTable();
              $('#agenda').DataTable();
              $('#progress').DataTable();
              $('#myModal').on('shown.bs.modal', function () {
                  //$('#myInput').focus()
                })
          } );
</script>