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
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="container">
                <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">

        <div class="panel panel-info">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                <?php 
                    echo $data;
                ?>
                <div id="FormLogin" class="text-centered">
                    <form action="<?php echo base_url();?>Auth" method="post">
                        <div class="form-group">
                            <label>Username : </label>
                            <input type="text" name="username" class="form-control" placeholder="Username" required="true">
                        </div>
                        <div class="form-group">
                            <label>Password : </label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="true">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-primary">
                            <input type="reset" value="Reset" class="btn btn-warning">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>



