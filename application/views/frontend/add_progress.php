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
        $action = base_url()."Progress/add";
    }else{
        $action = base_url().$this->uri->Segment(1)."/add";
    }
?>
<div class="well well-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb" style="margin-bottom: 0;">
                    <li class="active">
                    <a href="<?php echo base_url();?>">
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
                                <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Narasi</label>
                                        <select class="form-control" name="narasiKebijakan">
                                                <?php 
                                                foreach ($data as $key) {
                                                    ?>
                                                    <option value="<?php echo $key->no?>"><?php echo $key->narasi?></option>
                                                    <?php
                                                }
                                                ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu/Tanggal : </label>
                                        <textarea class="form-control" name="tanggal" required="true"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Uraian : </label>
                                        <textarea class="form-control" name="uraian" required="true"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Tindak Lanjut : </label>
                                        <textarea class="form-control" name="tindak_ljt" ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Masalah : </label>
                                        <textarea class="form-control" name="masalah" ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Output : </label>
                                        <textarea class="form-control" name="hasil" ></textarea>
                                    </div>
                                    <?php 
                                    if ($this->session->userdata('session')[0]->role == 'admin') {
                                        ?>
                                         <div class="form-group">
                                            <label>Asisten Deputi</label>
                                            <select class="form-control" name="deputi">
                                                <option value="asdep1">Asisten Deputi 1</option>
                                                <option value="asdep2">Asisten Deputi 2</option>
                                                <option value="asdep3">Asisten Deputi 3</option>
                                                <option value="asdep4">Asisten Deputi 4</option>
                                            </select>
                                        </div>
                                        <?php 
                                    }
                                    ?>
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
                                    <li>Memilih narasi kebijakan</li>
                                    <li>Mengisi Waktu/ Tanggal dengan Benar</li>
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
