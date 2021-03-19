
    <table class="table">
	    <tr><td>NIK</td><td><?php echo $NIK; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $Nama; ?></td></tr>
	    <tr><td>Tempat Lahir</td><td><?php echo $TempatLahirNama; ?></td></tr>
        <tr><td>Tanggal Lahir</td><td><?php echo date_format(date_create($TanggalLahir), 'd-m-Y'); ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $JenisKelamin; ?></td></tr>
	    <tr><td>Gol. Darah</td><td><?php echo $GolonganDarah; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $Alamat; ?></td></tr>
	    <tr><td>RT</td><td><?php echo $RT; ?></td></tr>
	    <tr><td>RW</td><td><?php echo $RW; ?></td></tr>
	    <tr><td>Kelurahan</td><td><?php echo $KelurahanNama; ?></td></tr>
	    <tr><td>Kecamatan</td><td><?php echo $KecamatanNama; ?></td></tr>
	    <tr><td>Kabupaten</td><td><?php echo $KabupatenNama; ?></td></tr>
	    <tr><td>Provinsi</td><td><?php echo $ProvinsiNama; ?></td></tr>
	    <tr><td>Agama</td><td><?php echo $agamaNama; ?></td></tr>
	    <tr><td>Status Perkawinan</td><td><?php echo $statusNama; ?></td></tr>
	    <tr><td>Pekerjaan</td><td><?php echo $pekerjaanNama; ?></td></tr>
	    <tr><td>Kewarganegaraan</td><td><?php echo $wargaNegaraNama; ?></td></tr>
        <tr><td>Berlaku Hingga</td><td><?php echo date_format(date_create($BerlakuHingga), 'd-m-Y'); ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('_08_tamu') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
