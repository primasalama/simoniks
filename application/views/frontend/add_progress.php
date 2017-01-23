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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>Beranda/view/<?php echo $this->session->userdata('session')[0]->role;?>">Progress</a></li>
                    <li class="breadcrumb-item active">Tambah Progress</li>
                </ol>
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
                            </div>
                            <div class="col-sm-5 alert alert-success">
                                <p class="heading"><h4><b>Tata Cara Pengisian</b> : </h4></p>
                                <ol>
                                    <li>Mengisi Nama Kegiatan sesuai Kegiatan yang bejalan</li>
                                    <li>Mengisi Waktu pelaksanaan dengan Benar</li>
                                    <li>Mengisi Dokumentasi dengan image sebanyak 2 (dua) dokumentasi</li>
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
    $(function() {
        $( '#tanggal' ).datepicker();
        $('#pukul').bootstrapMaterialDatePicker({
            date: false,
            format : 'HH:mm'
        });
      });
</script>
