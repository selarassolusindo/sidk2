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
        <h2>T08_tamu List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>NIK</th>
		<th>Nama</th>
		<th>TempatLahir</th>
		<th>TanggalLahir</th>
		<th>JenisKelamin</th>
		<th>GolonganDarah</th>
		<th>Alamat</th>
		<th>RT</th>
		<th>RW</th>
		<th>Kelurahan</th>
		<th>Kecamatan</th>
		<th>Kabupaten</th>
		<th>Provinsi</th>
		<th>Agama</th>
		<th>StatusKawin</th>
		<th>Pekerjaan</th>
		<th>WargaNegara</th>
		<th>BerlakuHingga</th>
		<th>Iduser</th>
		<th>Created At</th>
		<th>Updated At</th>
		
            </tr><?php
            foreach ($_08_tamu_data as $_08_tamu)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $_08_tamu->NIK ?></td>
		      <td><?php echo $_08_tamu->Nama ?></td>
		      <td><?php echo $_08_tamu->TempatLahir ?></td>
		      <td><?php echo $_08_tamu->TanggalLahir ?></td>
		      <td><?php echo $_08_tamu->JenisKelamin ?></td>
		      <td><?php echo $_08_tamu->GolonganDarah ?></td>
		      <td><?php echo $_08_tamu->Alamat ?></td>
		      <td><?php echo $_08_tamu->RT ?></td>
		      <td><?php echo $_08_tamu->RW ?></td>
		      <td><?php echo $_08_tamu->Kelurahan ?></td>
		      <td><?php echo $_08_tamu->Kecamatan ?></td>
		      <td><?php echo $_08_tamu->Kabupaten ?></td>
		      <td><?php echo $_08_tamu->Provinsi ?></td>
		      <td><?php echo $_08_tamu->Agama ?></td>
		      <td><?php echo $_08_tamu->StatusKawin ?></td>
		      <td><?php echo $_08_tamu->Pekerjaan ?></td>
		      <td><?php echo $_08_tamu->WargaNegara ?></td>
		      <td><?php echo $_08_tamu->BerlakuHingga ?></td>
		      <td><?php echo $_08_tamu->iduser ?></td>
		      <td><?php echo $_08_tamu->created_at ?></td>
		      <td><?php echo $_08_tamu->updated_at ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>