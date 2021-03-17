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
        <h2 style="margin-top:0px">T08_tamu List</h2> -->
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('_08_tamu/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('_08_tamu/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('_08_tamu'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        		<th>NIK</th>
        		<th>Nama</th>
        		<th>Tempat Lahir</th>
        		<th>Tanggal Lahir</th>
        		<th>Jenis Kelamin</th>
        		<!-- <th>GolonganDarah</th>
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
        		<th>Updated At</th> -->
        		<th>Action</th>
            </tr><?php
            foreach ($_08_tamu_data as $_08_tamu)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $_08_tamu->NIK ?></td>
			<td><?php echo $_08_tamu->Nama ?></td>
			<td><?php echo $_08_tamu->TempatLahir ?></td>
			<td><?php echo $_08_tamu->TanggalLahir ?></td>
			<td><?php echo $_08_tamu->JenisKelamin ?></td>
			<!-- <td><?php echo $_08_tamu->GolonganDarah ?></td>
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
			<td><?php echo $_08_tamu->updated_at ?></td> -->
			<td style="text-align:center" width="200px">
				<?php
				echo anchor(site_url('_08_tamu/read/'.$_08_tamu->idtamu),'Read');
				echo ' | ';
				echo anchor(site_url('_08_tamu/update/'.$_08_tamu->idtamu),'Update');
				echo ' | ';
				echo anchor(site_url('_08_tamu/delete/'.$_08_tamu->idtamu),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('_08_tamu/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('_08_tamu/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    <!-- </body>
</html> -->
