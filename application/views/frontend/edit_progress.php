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
    if ($data[0]->tanggal1 == $data[0]->tanggal2) {
        $tanggal2 = null;
        $jam2 = null;
    }else{
        $tanggal2 = substr($data[0]->tanggal2, 5,2)."/".substr($data[0]->tanggal2, 8,2)."/".substr($data[0]->tanggal2, 0,4);
        $jam2 = substr($data[0]->tanggal2, 11,5);
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
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <label>Tanggal Awal : </label>
                                                <input class="form-control" id="tanggal1" name="tanggal1" value="<?php echo substr($data[0]->tanggal1, 5,2)."/".substr($data[0]->tanggal1, 8,2)."/".substr($data[0]->tanggal1, 0,4);?>" required="true" placeholder="Tanggal Awal" required="true" />
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Akhir : </label>
                                                <input class="form-control" id="tanggal2" value="<?php echo $tanggal2;?>" name="tanggal2" placeholder="Tanggal Awal" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="form-group">
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <label> Jam Awal : </label>
                                                <input class="form-control" id="jam1" name="jam1" value="<?php echo substr($data[0]->tanggal1, 11,5); ?>" required="true" placeholder="Jam Awal" required="true" />
                                            </div>
                                            <div class="form-group">
                                                <label> Jam Akhir : </label>
                                                <input class="form-control" id="jam2" name="jam2" value="<?php echo $jam2;?>" placeholder="Jam Awal" />
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="form-group">
                                            <label> Tempat Kegiatan : </label>
                                            <input class="form-control" id="lokasi" name="lokasi" value="<?php echo $data[0]->lokasi; ?>" required="true" placeholder="Lokasi/ Tempat Kegiatan" />
                                        </div>
                                    <div class="form-group">
                                        <label>Uraian : </label>
                                        <textarea class="form-control" name="uraian" required="true" rows="5"><?php echo $data[0]->uraian;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Tindak Lanjut : </label>
                                        <textarea class="form-control" name="tindak_ljt" rows="7"><?php echo $data[0]->tindak_ljt;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Masalah : </label>
                                        <textarea class="form-control" name="masalah" rows="7"><?php echo $data[0]->masalah;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Output : </label>
                                        <textarea class="form-control" name="hasil" rows="7"><?php echo $data[0]->hasil;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Arahan Kemenko : </label>
                                        <textarea class="form-control" name="arahan" rows="5" placeholder="Arahan Kemenko"><?php echo $data[0]->arahan;?></textarea>
                            <div class="form-group col-sm-6">
                                <label>Dokumentasi 1</label>
                                <input type="file" name="foto1" class="form-control"  > 
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Dokumentasi 2</label>
                                <input type="file" name="foto2" class="form-control" >  
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
                            
                       
                        </div>
                        <div class="col-sm-5">
                            <div class="alert alert-success">
                                    <p class="heading"><h4><b>Tata Cara Pengisian</b> : </h4></p>
                                    <ol>
                                        <li>Memilih narasi kebijakan</li>
                                    <li>Mengisi Lokasi, Waktu kegiatan, dan Tanggal kegiatan dengan Benar</li>
                                    <li>Mengisi Dokumentasi dengan image sebanyak 2 (dua) dokumentasi</li>
                                    <li>Maksimum size untuk image dokumentasi 2MB</li>
                                    <li>Kolom bertanda (*) wajib diisi</li>
                                    </ol>
                                </div>
                                <div class="panel panel-warning">
                                    <div class="panel-heading">Dokumentasi</div>
                                    <div class="panel-body">
                                        <?php
                                        if (!empty($data[0]->dokumentasi1)) {
                                            ?>
                                            <img style="width:140px;" class="img img-responsive" src="<?php echo base_url();?>assets/images/uploads/<?php echo $data[0]->dokumentasi1;?>"></img>
                                            <?php
                                        }
                                        if (!empty($data[0]->dokumentasi2)) {
                                            ?>
                                            <img style="width:140px;" class="img img-responsive" src="<?php echo base_url();?>assets/images/uploads/<?php echo $data[0]->dokumentasi2;?>"></img>
                                            <?php
                                        }
                                         ?>
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
        $( '#tanggal2' ).datepicker();
        $( '#tanggal1' ).datepicker();
        $('#jam1').bootstrapMaterialDatePicker({
            date: false,
            format : 'HH:mm'
        });
        $('#jam2').bootstrapMaterialDatePicker({
            date: false,
            format : 'HH:mm'
        });
      });
</script>
