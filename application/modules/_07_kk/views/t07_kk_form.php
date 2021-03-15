<!doctype html>
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
        <h2 style="margin-top:0px">T07_kk <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nomor <?php echo form_error('Nomor') ?></label>
            <input type="text" class="form-control" name="Nomor" id="Nomor" placeholder="Nomor" value="<?php echo $Nomor; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Nama <?php echo form_error('Nama') ?></label>
            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('Alamat') ?></label>
            <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" value="<?php echo $Alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">RT <?php echo form_error('RT') ?></label>
            <input type="text" class="form-control" name="RT" id="RT" placeholder="RT" value="<?php echo $RT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">RW <?php echo form_error('RW') ?></label>
            <input type="text" class="form-control" name="RW" id="RW" placeholder="RW" value="<?php echo $RW; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kelurahan <?php echo form_error('Kelurahan') ?></label>
            <input type="text" class="form-control" name="Kelurahan" id="Kelurahan" placeholder="Kelurahan" value="<?php echo $Kelurahan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kecamatan <?php echo form_error('Kecamatan') ?></label>
            <input type="text" class="form-control" name="Kecamatan" id="Kecamatan" placeholder="Kecamatan" value="<?php echo $Kecamatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kabupaten <?php echo form_error('Kabupaten') ?></label>
            <input type="text" class="form-control" name="Kabupaten" id="Kabupaten" placeholder="Kabupaten" value="<?php echo $Kabupaten; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Provinsi <?php echo form_error('Provinsi') ?></label>
            <input type="text" class="form-control" name="Provinsi" id="Provinsi" placeholder="Provinsi" value="<?php echo $Provinsi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KodePos <?php echo form_error('KodePos') ?></label>
            <input type="text" class="form-control" name="KodePos" id="KodePos" placeholder="KodePos" value="<?php echo $KodePos; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal <?php echo form_error('Tanggal') ?></label>
            <input type="text" class="form-control" name="Tanggal" id="Tanggal" placeholder="Tanggal" value="<?php echo $Tanggal; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Idusers <?php echo form_error('idusers') ?></label>
            <input type="text" class="form-control" name="idusers" id="idusers" placeholder="Idusers" value="<?php echo $idusers; ?>" />
        </div>
	    <div class="form-group">
            <label for="timestamp">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div>
	    <div class="form-group">
            <label for="timestamp">Updated At <?php echo form_error('updated_at') ?></label>
            <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
        </div>
	    <input type="hidden" name="idkk" value="<?php echo $idkk; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('_07_kk') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>