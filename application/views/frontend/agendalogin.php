<div class="well well-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb" style="margin-bottom: 0;">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
                    <li class="breadcrumb-item active">Login</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
        <div class="panel-body">
            <div class="container">
                <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">

        <div class="panel panel-info">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                <?php 
                    echo $data;
                ?>
                    <form class="form-horizontal" action="<?php echo base_url();?>Auth" method="post">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Username :</label>
                            <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" placeholder="" required="true">
                            </div>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password :</label>
                            <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" placeholder="" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" value="Login" class="btn btn-success">Login</button>
                              <button type="reset" value="Reset" class="btn btn-warning">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
</div>



