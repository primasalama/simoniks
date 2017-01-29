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
<?php 
    if ($this->session->userdata('session')[0]->role == 'admin') {
        $action = base_url()."Progress/update/".$data[0]->no;
    }else{
        $action = base_url()."fprogress/update/".$data[0]->no;
    }
?>
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>Beranda/view/<?php echo $this->session->userdata('session')[0]->role;?>">Progress</a></li>
                </ol>
                <div class="panel panel-info">
                    <div class="panel-heading">Form</div>
                        <div class="panel-body">
                            <div id="FormLogin" class="col-sm-7">
                                <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
                                 <div class="form-group">
                                            <label>Narasi Kebijakan </label>
                                            <select class="form-control" name="narasiKebijakan">
                                                <?php 
                                                foreach ($data1 as $key) {
                                                    ?>
                                                    <option value="<?php echo $key->no?>" <?php 
                                                    if ($key->no == $data[0]->narasiKebijakan) {
                                                        echo "selected";
                                                    }
                                                    ?>><?php echo $key->narasi?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                            <div class="form-group">
                                        <label>Waktu Pelaksanaan : </label>
                                        <textarea class="form-control" name="tanggal" required="true"><?php echo $data[0]->tanggal;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Uraian : </label>
                                        <textarea class="form-control" name="uraian" required="true"><?php echo $data[0]->uraian;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Tindak Lanjut : </label>
                                        <textarea class="form-control" name="tindak_ljt" required="true"><?php echo $data[0]->tindak_ljt;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Masalah : </label>
                                        <textarea class="form-control" name="masalah" required="true"><?php echo $data[0]->masalah;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Output : </label>
                                        <textarea class="form-control" name="hasil" required="true"><?php echo $data[0]->hasil;?></textarea>
                                    </div>
                            <div class="form-group col-sm-6">
                                <label>Dokumentasi 1</label>
                                <input type="file" name="foto1" class="form-control" placeholder="Unit Kerja" > 
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Dokumentasi 2</label>
                                <input type="file" name="foto2" class="form-control" placeholder="Unit Kerja">  
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
                            <div class="col-sm-5">
                                <div class="alert alert-success">
                                    <p class="heading"><h4><b>Tata Cara Pengisian</b> : </h4></p>
                                    <ol>
                                        <li>Mengisi Nama Kegiatan sesuai Kegiatan yang bejalan</li>
                                        <li>Mengisi Waktu pelaksanaan dengan Benar</li>
                                    </ol>
                                </div>
                                <div class="panel panel-warning">
                                    <div class="panel-heading">Dokumentasi</div>
                                    <div class="panel-body">
                                        <img style="width:140px;" class="img img-responsive" src="<?php echo base_url();?>assets/images/uploads/<?php echo $data[0]->dokumentasi1;?>"></img>
                                        <img style="width:140px;" class="img img-responsive" src="<?php echo base_url();?>assets/images/uploads/<?php echo $data[0]->dokumentasi2;?>"></img>
                                    </div>
                                </div>                               
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
