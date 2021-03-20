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
        <h2>T31_inap List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tamu</th>
		<th>Alamat</th>
		<th>MulaiTanggal</th>
		<th>SampaiTanggal</th>
		<th>Keperluan</th>
		<th>Idusers</th>
		<th>Created At</th>
		<th>Updated At</th>
		
            </tr><?php
            foreach ($_31_inap_data as $_31_inap)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $_31_inap->Tamu ?></td>
		      <td><?php echo $_31_inap->Alamat ?></td>
		      <td><?php echo $_31_inap->MulaiTanggal ?></td>
		      <td><?php echo $_31_inap->SampaiTanggal ?></td>
		      <td><?php echo $_31_inap->Keperluan ?></td>
		      <td><?php echo $_31_inap->idusers ?></td>
		      <td><?php echo $_31_inap->created_at ?></td>
		      <td><?php echo $_31_inap->updated_at ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>