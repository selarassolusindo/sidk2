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
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('_30_mutasi/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('_30_mutasi/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('_30_mutasi'); ?>" class="btn btn-default">Reset</a>
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
        		<th>Alamat</th>
        		<th>Status</th>
        		<th>Nomor KK</th>
        		<th>Kepala Keluarga</th>
        		<!-- <th>Idusers</th> -->
        		<!-- <th>Created At</th> -->
        		<!-- <th>Updated At</th> -->
        		<th>Action</th>
            </tr>
            <?php
            foreach ($_30_mutasi_data as $_30_mutasi)
            {
            ?>
            <tr>
    			<td width="80px"><?php echo ++$start ?></td>
    			<td><?php echo $_30_mutasi->Alamat ?></td>
    			<td><?php echo $_30_mutasi->Status ?></td>
    			<td><?php echo $_30_mutasi->Nomor ?></td>
    			<td><?php echo $_30_mutasi->Nama ?></td>
    			<!-- <td><?php echo $_30_mutasi->idusers ?></td> -->
    			<!-- <td><?php echo $_30_mutasi->created_at ?></td> -->
    			<!-- <td><?php echo $_30_mutasi->updated_at ?></td> -->
    			<td style="text-align:center" width="200px">
    				<?php
    				echo anchor(site_url('_30_mutasi/read/'.$_30_mutasi->idalamat),'Read');
    				echo ' | ';
    				echo anchor(site_url('_30_mutasi/update/'.$_30_mutasi->idalamat),'Update');
    				// echo ' | ';
    				// echo anchor(site_url('_30_mutasi/delete/'.$_30_mutasi->idmutasi),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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
        		<?php echo anchor(site_url('_30_mutasi/excel'), 'Excel', 'class="btn btn-primary"'); ?>
        		<?php echo anchor(site_url('_30_mutasi/word'), 'Word', 'class="btn btn-primary"'); ?>
    	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    <!-- </body>
</html> -->
