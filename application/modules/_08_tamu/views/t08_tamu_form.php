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
                <label for="int">TempatLahir <?php echo form_error('TempatLahir') ?></label>
                <input type="text" class="form-control" name="TempatLahir" id="TempatLahir" placeholder="TempatLahir" value="<?php echo $TempatLahir; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="date">TanggalLahir <?php echo form_error('TanggalLahir') ?></label>
                <input type="text" class="form-control" name="TanggalLahir" id="TanggalLahir" placeholder="TanggalLahir" value="<?php echo $TanggalLahir; ?>" />
            </div>
            <div class="form-group col-2">
                <label for="enum">JenisKelamin <?php echo form_error('JenisKelamin') ?></label>
                <input type="text" class="form-control" name="JenisKelamin" id="JenisKelamin" placeholder="JenisKelamin" value="<?php echo $JenisKelamin; ?>" />
            </div>
            <div class="form-group col-1">
                <label for="varchar">Gol. Darah <?php echo form_error('GolonganDarah') ?></label>
                <input type="text" class="form-control" name="GolonganDarah" id="GolonganDarah" placeholder="GolonganDarah" value="<?php echo $GolonganDarah; ?>" />
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
    	    <div class="form-group col-2">
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
            <div class="form-group col-1">
                <label for="tinyint">Agama <?php echo form_error('Agama') ?></label>
                <input type="text" class="form-control" name="Agama" id="Agama" placeholder="Agama" value="<?php echo $Agama; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="tinyint">StatusKawin <?php echo form_error('StatusKawin') ?></label>
                <input type="text" class="form-control" name="StatusKawin" id="StatusKawin" placeholder="StatusKawin" value="<?php echo $StatusKawin; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="tinyint">Pekerjaan <?php echo form_error('Pekerjaan') ?></label>
                <input type="text" class="form-control" name="Pekerjaan" id="Pekerjaan" placeholder="Pekerjaan" value="<?php echo $Pekerjaan; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="tinyint">WargaNegara <?php echo form_error('WargaNegara') ?></label>
                <input type="text" class="form-control" name="WargaNegara" id="WargaNegara" placeholder="WargaNegara" value="<?php echo $WargaNegara; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="date">BerlakuHingga <?php echo form_error('BerlakuHingga') ?></label>
                <input type="text" class="form-control" name="BerlakuHingga" id="BerlakuHingga" placeholder="BerlakuHingga" value="<?php echo $BerlakuHingga; ?>" />
            </div>
        </div>


	    <!-- <div class="form-group">
            <label for="int">Iduser <?php echo form_error('iduser') ?></label>
            <input type="text" class="form-control" name="iduser" id="iduser" placeholder="Iduser" value="<?php echo $iduser; ?>" />
        </div> -->
	    <!-- <div class="form-group">
            <label for="timestamp">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div> -->
	    <!-- <div class="form-group">
            <label for="timestamp">Updated At <?php echo form_error('updated_at') ?></label>
            <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
        </div> -->
	    <input type="hidden" name="idtamu" value="<?php echo $idtamu; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('_08_tamu') ?>" class="btn btn-default">Cancel</a>
    </form>
