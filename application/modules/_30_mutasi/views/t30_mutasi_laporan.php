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
        <h2 style="margin-top:0px">T30_mutasi List</h2> -->

        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        		<th>Alamat</th>
                <th>Tanggal</th>
        		<th>Status</th>
        		<th>Nomor KK</th>
        		<th>Kepala Keluarga</th>
            </tr>

            <!-- masuk -->
            <tr>
                <th>&nbsp;</th>
        		<th colspan="5">MASUK</th>
            </tr>
            <?php
            $start = 0;
            foreach ($mutasiMasuk as $d) {
            ?>
            <tr>
    			<td width="80px"><?php echo ++$start ?></td>
    			<td><?php echo $d->idalamat ?></td>
                <td><?php echo $d->tanggal ?></td>
    			<td><?php echo $d->Jenis ?></td>
    			<td><?php echo $d->idkk ?></td>
                <td><?php echo $d->idkk ?></td>
    		</tr>
            <?php
            }
            ?>

            <tr>
                <th colspan="6">&nbsp;</th>
            </tr>

            <!-- keluar -->
            <tr>
                <th>&nbsp;</th>
        		<th colspan="5">KELUAR</th>
            </tr>
            <?php
            $start = 0;
            foreach ($mutasiKeluar as $d) {
            ?>
            <tr>
    			<td width="80px"><?php echo ++$start ?></td>
    			<td><?php echo $d->idalamat ?></td>
                <td><?php echo $d->tanggal ?></td>
    			<td><?php echo $d->Jenis ?></td>
    			<td><?php echo $d->idkk ?></td>
                <td><?php echo $d->idkk ?></td>
    		</tr>
            <?php
            }
            ?>

            <tr>
                <th colspan="6">&nbsp;</th>
            </tr>

            <!-- saat ini -->
            <tr>
                <th>&nbsp;</th>
        		<th colspan="5">SAAT INI</th>
            </tr>
            <?php
            $start = 0;
            foreach ($mutasiKeluar as $d) {
            ?>
            <tr>
    			<td width="80px"><?php echo ++$start ?></td>
    			<td><?php echo $d->idalamat ?></td>
                <td><?php echo $d->tanggal ?></td>
    			<td><?php echo $d->Jenis ?></td>
    			<td><?php echo $d->idkk ?></td>
                <td><?php echo $d->idkk ?></td>
    		</tr>
            <?php
            }
            ?>
        </table>

    <!-- </body>
</html> -->
