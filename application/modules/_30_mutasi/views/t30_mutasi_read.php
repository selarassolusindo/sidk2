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
        <h2 style="margin-top:0px">T30_mutasi Read</h2> -->
    <div class="row">
        <div class="col-1">Alamat</div><div class="col"><b><?php echo $Alamat; ?></b></div>
    </div>
    <div class="row"><div class="col">&nbsp;</div></div>
    <div class="row"><div class="col"><?php echo anchor(site_url('_30_mutasi/create/'.$idalamat),'Create', 'class="btn btn-primary"'); ?></div></div>
    <div class="row"><div class="col">&nbsp;</div></div>
    <div class="row">
        <div class="text-center border col-1"><b>Tanggal</b></div>
        <div class="text-center border col-1"><b>Jenis</b></div>
        <div class="text-center border col-2"><b>Nomor KK</b></div>
        <div class="text-center border col-4"><b>Nama</b></div>
        <div class="text-center border col-2"><b>Action</b></div>
    </div>
    <?php foreach ($detail as $key => $d) { ?>
        <div class="row">
            <div class="border col-1"><?php echo date_format(date_create($d->tanggal), 'd-m-Y') ?></div>
            <div class="border col-1"><?php echo $d->Jenis ?></div>
            <div class="border col-2"><?php echo $d->Nomor ?></div>
            <div class="border col-4"><?php echo $d->Nama ?></div>
            <div class="border col-2">
                <?php echo anchor(site_url('_30_mutasi/update/'.$d->idmutasi),'Update'); ?>
                <?php echo ' | '; ?>
                <?php echo anchor(site_url('_30_mutasi/delete/'.$d->idmutasi.'/'.$idalamat),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); ?>
            </div>
        </div>
    <?php } ?>
    <div class="row"><div class="col">&nbsp;</div></div>
    <div class="row"><div class="col"><a href="<?php echo site_url('_30_mutasi') ?>" class="btn btn-default">Cancel</a></div></div>
        <!-- </body>
</html> -->
