<!-- <!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">T30_mutasi <?php echo $button ?></h2> -->
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Idalamat <?php echo form_error('idalamat') ?></label>
            <input type="text" class="form-control" name="idalamat" id="idalamat" placeholder="Idalamat" value="<?php echo $idalamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal <?php echo form_error('tanggal') ?></label>
            <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Jenis <?php echo form_error('Jenis') ?></label>
            <input type="text" class="form-control" name="Jenis" id="Jenis" placeholder="Jenis" value="<?php echo $Jenis; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Idkk <?php echo form_error('idkk') ?></label>
            <input type="text" class="form-control" name="idkk" id="idkk" placeholder="Idkk" value="<?php echo $idkk; ?>" />
        </div>
	    <!-- <div class="form-group">
            <label for="int">Idusers <?php echo form_error('idusers') ?></label>
            <input type="text" class="form-control" name="idusers" id="idusers" placeholder="Idusers" value="<?php echo $idusers; ?>" />
        </div> -->
	    <!-- <div class="form-group">
            <label for="timestamp">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div> -->
	    <!-- <div class="form-group">
            <label for="timestamp">Updated At <?php echo form_error('updated_at') ?></label>
            <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
        </div> -->
	    <input type="hidden" name="idmutasi" value="<?php echo $idmutasi; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('_30_mutasi') ?>" class="btn btn-default">Cancel</a>
	</form>
    <!-- </body>
</html> -->
