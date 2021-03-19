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
        <h2 style="margin-top:0px">T30_masuk <?php echo $button ?></h2> -->
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">NomorKK <?php echo form_error('NomorKK') ?></label>
            <input type="text" class="form-control" name="NomorKK" id="NomorKK" placeholder="NomorKK" value="<?php echo $NomorKK; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Tanggal <?php echo form_error('Tanggal') ?></label>
            <input type="text" class="form-control" name="Tanggal" id="Tanggal" placeholder="Tanggal" value="<?php echo $Tanggal; ?>" />
        </div>
	    <input type="hidden" name="idmasuk" value="<?php echo $idmasuk; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('_30_masuk') ?>" class="btn btn-default">Cancel</a>
	</form>
    <!-- </body>
</html> -->
