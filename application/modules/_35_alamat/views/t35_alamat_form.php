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
        <h2 style="margin-top:0px">T35_alamat <?php echo $button ?></h2> -->
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('Alamat') ?></label>
            <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" value="<?php echo $Alamat; ?>" />
        </div>
	    <input type="hidden" name="idalamat" value="<?php echo $idalamat; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('_35_alamat') ?>" class="btn btn-default">Cancel</a>
	</form>
    <!-- </body>
</html> -->
