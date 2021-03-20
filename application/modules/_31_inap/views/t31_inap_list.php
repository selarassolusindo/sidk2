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
        <h2 style="margin-top:0px">T31_inap List</h2> -->
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('_31_inap/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('_31_inap/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('_31_inap'); ?>" class="btn btn-default">Reset</a>
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
        		<th>Tamu</th>
        		<th>Alamat</th>
        		<th>Mulai Tanggal</th>
        		<th>Sampai Tanggal</th>
        		<th>Keperluan</th>
        		<!-- <th>Idusers</th> -->
        		<!-- <th>Created At</th> -->
        		<!-- <th>Updated At</th> -->
        		<th>Action</th>
            </tr>
            <?php
            foreach ($_31_inap_data as $_31_inap) {
            ?>
            <tr>
    			<td width="80px"><?php echo ++$start ?></td>
    			<td><?php echo $_31_inap->TamuNama ?></td>
    			<td><?php echo $_31_inap->AlamatNama ?></td>
    			<td><?php echo date_format(date_create($_31_inap->MulaiTanggal), 'd-m-Y') ?></td>
    			<td><?php echo date_format(date_create($_31_inap->SampaiTanggal), 'd-m-Y') ?></td>
    			<td><?php echo $_31_inap->Keperluan ?></td>
    			<!-- <td><?php echo $_31_inap->idusers ?></td> -->
    			<!-- <td><?php echo $_31_inap->created_at ?></td> -->
    			<!-- <td><?php echo $_31_inap->updated_at ?></td> -->
    			<td style="text-align:center" width="200px">
    				<?php
    				echo anchor(site_url('_31_inap/read/'.$_31_inap->idinap),'Read');
    				echo ' | ';
    				echo anchor(site_url('_31_inap/update/'.$_31_inap->idinap),'Update');
    				echo ' | ';
    				echo anchor(site_url('_31_inap/delete/'.$_31_inap->idinap),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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
        		<?php echo anchor(site_url('_31_inap/excel'), 'Excel', 'class="btn btn-primary"'); ?>
        		<?php echo anchor(site_url('_31_inap/word'), 'Word', 'class="btn btn-primary"'); ?>
    	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    <!-- </body>
</html> -->
