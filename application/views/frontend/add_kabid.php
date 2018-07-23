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
    // if ($this->session->userdata('session')[0]->role == 'admin') {
    //     $action = base_url()."Kebijakan/add";
    // }else{
    //     $action = base_url().$this->uri->Segment(1)."/add";
    // }
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>kebijakan">Kebijakan</a></li>
                </ol>
                <div class="panel panel-info">
                            <div class="panel-heading">Form</div>
                            <div class="panel-body">
                                <div id="FormLogin" class="col-sm-5">
                                    <form action="<?php echo base_url();?>Fkebijakan/kabid/insert" method="post">
                                        <!-- <input type="hidden" name="id_kabid" id="id_kabid"> -->
                                        <div class="form-group">
                                            <label>Nama Kepala Bidang</label>
                                            <input type="text" name="label_kabid" id="label_kabid" class="form-control" placeholder="Nama Kepala Bidang" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pejabat Kepala Bidang</label>
                                            <input type="text" name="kabid" id="kabid" class="form-control" placeholder="Nama Pejabat Kepala Bidang" required="true">
                                        </div>
                                         <div class="form-group">
                                            <label>NIP Kabid</label>
                                            <input type="text" name="nip_kabid" id="nip_kabid" class="form-control" placeholder="Nomor Induk Pegawai Kabid" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Asisten Deputi</label>
                                            <select name="asdep" id="asdep" class="form-control" required="true">
                                                <option value="asdep1">Asisten Deputi 1</option>
                                                <option value="asdep2">Asisten Deputi 2</option>
                                                <option value="asdep3">Asisten Deputi 3</option>
                                                <option value="asdep4">Asisten Deputi 4</option>
                                            </select>
                                            <!-- <input type="text" name="nip_kabid" id="nip_kabid" class="form-control" placeholder="Nomor Induk Pegawai Kabid" required="true"> -->
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Submit" class="btn btn-primary">
                                            <input type="reset" value="Reset" class="btn btn-warning">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-7 alert alert-success">
                                    <p class="heading"><h4><b>Tata Cara Pengisian</b> : </h4></p>
                                    <table class="table table-bordered" id="DataTable"> 
                                        <thead>
                                            <tr>
                                                <td>No.</td>
                                                <td>Label</td>
                                                <td>Nama</td>
                                                <td>NIP</td>
                                                <td>Asdep</td>
                                                <td>Opsi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i = 1;
                                            foreach ($data_kabid as $key) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $key->label_kabid;?></td>
                                                    <td><?php echo $key->kabid;?></td>
                                                    <td><?php echo $key->nip_kabid;?></td>
                                                    <td><?php echo $key->asdep;?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-info btn-sm" onclick='showModal(<?php echo json_encode($key);?>)'>
                                                          <span class="glyphicon glyphicon-edit"  aria-hidden="true"></span>
                                                        </button>
                                                        <button type="button" class="btn btn-daager btn-sm" data-toggle="modal" data-target="#confirm-delete" data-href="<?php echo base_url();?>Fkebijakan/kabid/delete/<?php echo $key->id;?>" data-label="<?php echo $key->label_kabid;?>">
                                                          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Kabid</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url();?>Fkebijakan/kabid/insert" method="post"> 
            <input type="hidden" name="id_kabid" id="id_kabid">
                                        <div class="form-group">
                                            <label>Nama Kepala Bidang</label>
                                            <input type="text" name="label_kabid" id="label_kabid" class="form-control" placeholder="Nama Kepala Bidang" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pejabat Kepala Bidang</label>
                                            <input type="text" name="kabid" id="kabid" class="form-control" placeholder="Nama Pejabat Kepala Bidang" required="true">
                                        </div>
                                         <div class="form-group">
                                            <label>NIP Kabid</label>
                                            <input type="text" name="nip_kabid" id="nip_kabid" class="form-control" placeholder="Nomor Induk Pegawai Kabid" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Asisten Deputi</label>
                                            <select name="asdep" id="asdep" class="form-control" required="true">
                                                <option value="asdep1">Asisten Deputi 1</option>
                                                <option value="asdep2">Asisten Deputi 2</option>
                                                <option value="asdep3">Asisten Deputi 3</option>
                                                <option value="asdep4">Asisten Deputi 4</option>
                                            </select>
                                            <!-- <input type="text" name="nip_kabid" id="nip_kabid" class="form-control" placeholder="Nomor Induk Pegawai Kabid" required="true"> -->
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Submit" class="btn btn-primary">
                                            <input type="reset" value="Reset" class="btn btn-warning">
                                        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Apakah anda ingin menghapus data tersebut ?</h4>
                </div>
            
                <div class="modal-body">
                    <p>Nama Kepala Bidang : <span id="dlabel_kabid"></span></p>
                    <!-- <p class="debug-url"></p> -->
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Delete</a>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    function showModal(data)
                {
                   //you can do anything with data, or pass more data to this function. i set this data to modal header for example
                   // $("#myModal .modal-title").html('data');
                   $('#myModal #id_kabid').val(data.id);
                   $('#myModal #kabid').val(data.kabid);
                   $('#myModal #nip_kabid').val(data.nip_kabid);
                   $('#myModal #label_kabid').val(data.label_kabid);
                   $('#myModal #asdep').val(data.asdep);
                   $("#myModal").modal();
                }
             $('#confirm-delete').on('show.bs.modal', function(e) {
                    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                    $('#dlabel_kabid').html($(e.relatedTarget).data('label'));
                    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
                });
            $(document).ready(function() {
              $('#DataTable').DataTable();


          } );
</script>