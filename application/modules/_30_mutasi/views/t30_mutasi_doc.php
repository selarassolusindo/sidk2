<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>T30_mutasi List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Idalamat</th>
		<th>Tanggal</th>
		<th>Jenis</th>
		<th>Idkk</th>
		<th>Idusers</th>
		<th>Created At</th>
		<th>Updated At</th>
		
            </tr><?php
            foreach ($_30_mutasi_data as $_30_mutasi)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $_30_mutasi->idalamat ?></td>
		      <td><?php echo $_30_mutasi->tanggal ?></td>
		      <td><?php echo $_30_mutasi->Jenis ?></td>
		      <td><?php echo $_30_mutasi->idkk ?></td>
		      <td><?php echo $_30_mutasi->idusers ?></td>
		      <td><?php echo $_30_mutasi->created_at ?></td>
		      <td><?php echo $_30_mutasi->updated_at ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>