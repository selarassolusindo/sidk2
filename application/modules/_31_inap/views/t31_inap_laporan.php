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
                <th>Tamu</th>
        		<th>Alamat</th>
                <th>Mulai Tanggal</th>
                <th>Sampai Tanggal</th>
        		<th>Keperluan</th>
            </tr>

            <?php
            $start = 0;
            foreach ($dataTamu as $d) {
            ?>
            <tr>
    			<td width="80px"><?php echo ++$start ?></td>
                <td><?php echo $d->TamuNama ?></td>
    			<td><?php echo $d->AlamatNama ?></td>
                <td><?php echo date_format(date_create($d->MulaiTanggal), 'd-m-Y') ?></td>
                <td><?php echo date_format(date_create($d->SampaiTanggal), 'd-m-Y') ?></td>
    			<td><?php echo $d->Keperluan ?></td>
    		</tr>
            <?php
            }
            ?>

        </table>

    <!-- </body>
</html> -->
