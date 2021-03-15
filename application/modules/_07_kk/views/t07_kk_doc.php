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
        <h2>T07_kk List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nomor</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>RT</th>
		<th>RW</th>
		<th>Kelurahan</th>
		<th>Kecamatan</th>
		<th>Kabupaten</th>
		<th>Provinsi</th>
		<th>KodePos</th>
		<th>Tanggal</th>
		<th>Idusers</th>
		<th>Created At</th>
		<th>Updated At</th>
		
            </tr><?php
            foreach ($_07_kk_data as $_07_kk)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $_07_kk->Nomor ?></td>
		      <td><?php echo $_07_kk->Nama ?></td>
		      <td><?php echo $_07_kk->Alamat ?></td>
		      <td><?php echo $_07_kk->RT ?></td>
		      <td><?php echo $_07_kk->RW ?></td>
		      <td><?php echo $_07_kk->Kelurahan ?></td>
		      <td><?php echo $_07_kk->Kecamatan ?></td>
		      <td><?php echo $_07_kk->Kabupaten ?></td>
		      <td><?php echo $_07_kk->Provinsi ?></td>
		      <td><?php echo $_07_kk->KodePos ?></td>
		      <td><?php echo $_07_kk->Tanggal ?></td>
		      <td><?php echo $_07_kk->idusers ?></td>
		      <td><?php echo $_07_kk->created_at ?></td>
		      <td><?php echo $_07_kk->updated_at ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>