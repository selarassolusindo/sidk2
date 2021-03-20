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
        <h2 style="margin-top:0px">T31_inap Read</h2> -->
    <table class="table">
	    <tr><td>Tamu</td><td><?php echo $TamuNama; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $AlamatNama; ?></td></tr>
	    <tr><td>Mulai Tanggal</td><td><?php echo date_format(date_create($MulaiTanggal), 'd-m-Y'); ?></td></tr>
	    <tr><td>Sampai Tanggal</td><td><?php echo date_format(date_create($SampaiTanggal), 'd-m-Y'); ?></td></tr>
	    <tr><td>Keperluan</td><td><?php echo $Keperluan; ?></td></tr>
	    <!-- <tr><td>Idusers</td><td><?php echo $idusers; ?></td></tr> -->
	    <!-- <tr><td>Created At</td><td><?php echo $created_at; ?></td></tr> -->
	    <!-- <tr><td>Updated At</td><td><?php echo $updated_at; ?></td></tr> -->
	    <tr><td></td><td><a href="<?php echo site_url('_31_inap') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        <!-- </body>
</html> -->
