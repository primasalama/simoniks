
<div class="container" style="margin-top:120px;" >
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url();?>">SIMONIK</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url();?>progress">Progress</a></li>
    </ol>
    <div class="panel panel-info">
                <div class="panel-heading">Form</div>
                <div class="panel-body">
                    <div id="FormLogin" class="col-sm-7">
                        <form action="<?php echo base_url();?>fkebijakan/update/<?php echo $data[0]->no;?>" method="post">
                            <div class="form-group">
                                <label>Narasi : </label>
                                <textarea class="form-control" name="narasi" placeholder="Narasi"><?php echo $data[0]->narasi;?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Status : </label>
                                <input type="text" name="status" class="form-control" placeholder="Status" required="true" value="<?php echo $data[0]->status;?>">
                            </div>
                            <div class="form-group">
                                <label>Indikator : </label>
                                <input type="text" name="indikator" class="form-control" placeholder="indikator" required="true" value="<?php echo $data[0]->indikator;?>">
                            </div>
                            <div class="form-group">
                                <label>PIC : </label>
                                <input type="text" name="pic" class="form-control" placeholder="pic" required="true" value="<?php echo $data[0]->pic;?>">
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
</body>
</html>

<script type="text/javascript">
            $(document).ready(function() {
              $('#progress').DataTable();
          } );
</script>
