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
        <h2>T30_masuk List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>NomorKK</th>
		<th>Tanggal</th>
		<th>Idusers</th>
		<th>Created At</th>
		<th>Updated At</th>
		
            </tr><?php
            foreach ($_30_masuk_data as $_30_masuk)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $_30_masuk->NomorKK ?></td>
		      <td><?php echo $_30_masuk->Tanggal ?></td>
		      <td><?php echo $_30_masuk->idusers ?></td>
		      <td><?php echo $_30_masuk->created_at ?></td>
		      <td><?php echo $_30_masuk->updated_at ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>