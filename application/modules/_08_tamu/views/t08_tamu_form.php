    <form action="<?php echo $action; ?>" method="post">

        <div class="form-row">
    	    <div class="form-group col-2">
                <label for="varchar">NIK <?php echo form_error('NIK') ?></label>
                <input type="text" class="form-control" name="NIK" id="NIK" placeholder="NIK" value="<?php echo $NIK; ?>" />
            </div>
    	    <div class="form-group col-3">
                <label for="varchar">Nama <?php echo form_error('Nama') ?></label>
                <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="int">Tempat Lahir <?php echo form_error('TempatLahir') ?></label>
                <input type="text" class="form-control" name="TempatLahir" id="TempatLahir" placeholder="Tempat Lahir" value="<?php echo $TempatLahir; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="date">Tanggal Lahir <?php echo form_error('TanggalLahir') ?></label>
                <input type="text" class="form-control" name="TanggalLahir" id="TanggalLahir" placeholder="Tanggal Lahir" value="<?php echo $TanggalLahir; ?>" />
            </div>
            <div class="form-group col-2">
                <label for="enum">Jenis Kelamin <?php echo form_error('JenisKelamin') ?></label>
                <input type="text" class="form-control" name="JenisKelamin" id="JenisKelamin" placeholder="Jenis Kelamin" value="<?php echo $JenisKelamin; ?>" />
            </div>
            <div class="form-group col-1">
                <label for="varchar">Gol. Darah <?php echo form_error('GolonganDarah') ?></label>
                <input type="text" class="form-control" name="GolonganDarah" id="GolonganDarah" placeholder="Gol. Darah" value="<?php echo $GolonganDarah; ?>" />
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-5">
                <label for="varchar">Alamat <?php echo form_error('Alamat') ?></label>
                <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" value="<?php echo $Alamat; ?>" />
            </div>
    	    <div class="form-group col-1">
                <label for="varchar">RT <?php echo form_error('RT') ?></label>
                <input type="text" class="form-control" name="RT" id="RT" placeholder="RT" value="<?php echo $RT; ?>" />
            </div>
    	    <div class="form-group col-1">
                <label for="varchar">RW <?php echo form_error('RW') ?></label>
                <input type="text" class="form-control" name="RW" id="RW" placeholder="RW" value="<?php echo $RW; ?>" />
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-3">
                <label for="int">Kelurahan <?php echo form_error('Kelurahan') ?></label>
                <input type="text" class="form-control" name="Kelurahan" id="Kelurahan" placeholder="Kelurahan" value="<?php echo $Kelurahan; ?>" />
            </div>
    	    <div class="form-group col-3">
                <label for="int">Kecamatan <?php echo form_error('Kecamatan') ?></label>
                <input type="text" class="form-control" name="Kecamatan" id="Kecamatan" placeholder="Kecamatan" value="<?php echo $Kecamatan; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="int">Kabupaten <?php echo form_error('Kabupaten') ?></label>
                <input type="text" class="form-control" name="Kabupaten" id="Kabupaten" placeholder="Kabupaten" value="<?php echo $Kabupaten; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="int">Provinsi <?php echo form_error('Provinsi') ?></label>
                <input type="text" class="form-control" name="Provinsi" id="Provinsi" placeholder="Provinsi" value="<?php echo $Provinsi; ?>" />
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-2">
                <label for="tinyint">Agama <?php echo form_error('Agama') ?></label>
                <input type="text" class="form-control" name="Agama" id="Agama" placeholder="Agama" value="<?php echo $Agama; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="tinyint">Status Perkawinan <?php echo form_error('StatusKawin') ?></label>
                <input type="text" class="form-control" name="StatusKawin" id="StatusKawin" placeholder="Status Perkawinan" value="<?php echo $StatusKawin; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="tinyint">Pekerjaan <?php echo form_error('Pekerjaan') ?></label>
                <input type="text" class="form-control" name="Pekerjaan" id="Pekerjaan" placeholder="Pekerjaan" value="<?php echo $Pekerjaan; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="tinyint">Kewarganegaraan <?php echo form_error('WargaNegara') ?></label>
                <input type="text" class="form-control" name="WargaNegara" id="WargaNegara" placeholder="Kewarganegaraan" value="<?php echo $WargaNegara; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="date">Berlaku Hingga <?php echo form_error('BerlakuHingga') ?></label>
                <input type="text" class="form-control" name="BerlakuHingga" id="BerlakuHingga" placeholder="Berlaku Hingga" value="<?php echo $BerlakuHingga; ?>" />
            </div>
        </div>

	    <input type="hidden" name="idtamu" value="<?php echo $idtamu; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('_08_tamu') ?>" class="btn btn-default">Cancel</a>
    </form>
