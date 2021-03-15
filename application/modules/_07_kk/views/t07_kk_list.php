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
        <h2 style="margin-top:0px">T07_kk List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('_07_kk/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('_07_kk/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('_07_kk'); ?>" class="btn btn-default">Reset</a>
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
		<th>Action</th>
            </tr><?php
            foreach ($_07_kk_data as $_07_kk)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
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
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('_07_kk/read/'.$_07_kk->idkk),'Read'); 
				echo ' | '; 
				echo anchor(site_url('_07_kk/update/'.$_07_kk->idkk),'Update'); 
				echo ' | '; 
				echo anchor(site_url('_07_kk/delete/'.$_07_kk->idkk),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
		<?php echo anchor(site_url('_07_kk/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('_07_kk/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>