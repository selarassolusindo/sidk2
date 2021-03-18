    <form action="<?php echo $action; ?>" method="post">

        <div class="form-row">
    	    <div class="form-group col-2">
                <label for="varchar">NIK <?php echo form_error('NIK') ?></label>
                <input type="text" class="form-control" name="NIK" id="NIK" placeholder="NIK" value="<?php echo $NIK; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="varchar">Nama <?php echo form_error('Nama') ?></label>
                <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
            </div>
            <div class="form-group col-3">
                <label for="int">Tempat Lahir <?php echo form_error('TempatLahir') ?></label>
                <select name="TempatLahir" class="form-control" id="TempatLahir">
                    <option value="">Tempat Lahir</option>
                    <option value="<?php echo $TempatLahir ?>" selected="selected"><?php echo $TempatLahirNama; ?></option>
                </select>
            </div>
            <div class="form-group col-2">
                <label for="date">Tanggal Lahir <?php echo form_error('TanggalLahir') ?></label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    <input placeholder="Tanggal Lahir" type="text" name="TanggalLahir" value="<?php echo $TanggalLahir; ?>" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                </div>
            </div>
            <div class="form-group col-2">
                <label for="enum">Jenis Kelamin <?php echo form_error('JenisKelamin') ?></label>
                <select name="JenisKelamin" class="form-control">
                    <option value="LAKI-LAKI" <?php echo ($JenisKelamin == 'LAKI-LAKI') ? ' selected="selected"' : "" ?>>LAKI-LAKI</option>
                    <option value="PEREMPUAN" <?php echo ($JenisKelamin == 'PEREMPUAN') ? ' selected="selected"' : "" ?>>PEREMPUAN</option>
                </select>
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
                <select name="Kelurahan" class="form-control" id="Kelurahan">
                    <option value="">Kelurahan</option>
                    <option value="<?php echo $Kelurahan ?>" selected="selected"><?php echo $KelurahanNama; ?></option>
                </select>
            </div>
            <div class="form-group col-2">
                <label for="int">Kecamatan <?php echo form_error('Kecamatan') ?></label>
                <select name="Kecamatan" class="form-control" id="Kecamatan">
                    <option value="">Kecamatan</option>
                    <option value="<?php echo $Kecamatan ?>" selected="selected"><?php echo $KecamatanNama; ?></option>
                </select>
            </div>
            <div class="form-group col-2">
                <label for="int">Kabupaten <?php echo form_error('Kabupaten') ?></label>
                <select name="Kabupaten" class="form-control" id="Kabupaten">
                    <option value="">Kabupaten</option>
                    <option value="<?php echo $Kabupaten ?>" selected="selected"><?php echo $KabupatenNama; ?></option>
                </select>
            </div>
            <div class="form-group col-2">
                <label for="int">Provinsi <?php echo form_error('Provinsi') ?></label>
                <select name="Provinsi" class="form-control" id="Provinsi">
                    <option value="">Provinsi</option>
                    <option value="<?php echo $Provinsi ?>" selected="selected"><?php echo $ProvinsiNama; ?></option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-2">
                <label for="tinyint">Agama <?php echo form_error('Agama') ?></label>
                <select name="Agama" class="form-control">
                    <option value="">Agama</option>
                    <?php
                    foreach($agamaData as $agama) {
                        $selected = ($agama->idagama == $Agama) ? ' selected="selected"' : "";
                        echo '<option value="'.$agama->idagama.'" '.$selected.'>'.$agama->Agama . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-2">
                <label for="tinyint">Status Perkawinan <?php echo form_error('StatusKawin') ?></label>
                <select name="StatusKawin" class="form-control">
                    <option value="">Status Perkawinan</option>
                    <?php
                    foreach($statusData as $status) {
                        $selected = ($status->idstatus == $StatusKawin) ? ' selected="selected"' : "";
                        echo '<option value="'.$status->idstatus.'" '.$selected.'>'.$status->Status . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-2">
                <label for="tinyint">Pekerjaan <?php echo form_error('Pekerjaan') ?></label>
                <select name="Pekerjaan" class="form-control">
                    <option value="">Pekerjaan</option>
                    <?php
                    foreach($pekerjaanData as $pekerjaan) {
                        $selected = ($pekerjaan->idpekerjaan == $Pekerjaan) ? ' selected="selected"' : "";
                        echo '<option value="'.$pekerjaan->idpekerjaan.'" '.$selected.'>'.$pekerjaan->Pekerjaan . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-2">
                <label for="tinyint">Kewarganegaraan <?php echo form_error('WargaNegara') ?></label>
                <select name="WargaNegara" class="form-control">
                    <option value="">Kewarganegaraan</option>
                    <?php
                    foreach($warganegaraData as $warganegara) {
                        $selected = ($warganegara->idwarganegara == $WargaNegara) ? ' selected="selected"' : "";
                        echo '<option value="'.$warganegara->idwarganegara.'" '.$selected.'>'.$warganegara->WargaNegara . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-2">
                <label for="date">Berlaku Hingga <?php echo form_error('BerlakuHingga') ?></label>
                <div class="input-group date" id="BerlakuHingga" data-target-input="nearest">
                    <div class="input-group-append" data-target="#BerlakuHingga" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    <input placeholder="Berlaku Hingga" type="text" name="BerlakuHingga" value="<?php echo $BerlakuHingga; ?>" class="form-control datetimepicker-input" data-target="#BerlakuHingga"/>
                </div>
            </div>
        </div>

	    <input type="hidden" name="idtamu" value="<?php echo $idtamu; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('_08_tamu') ?>" class="btn btn-default">Cancel</a>
    </form>

    <script type="text/javascript">
        // In your Javascript (external .js resource or <script> tag)
        $('#TempatLahir').select2({
            minimumInputLength: 3,
            allowClear: true,
            placeholder: 'Tempat Lahir',
            ajax: {
                dataType: 'json',
                url: '<?php echo base_url(); ?>_43_kabupaten/getData',
                delay: 800,
                data: function(params) {
                    return {
                        search: params.term
                    }
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    };
                },
            }
        });
        $(function () {
            //Date range picker
            // $('#reservation').daterangepicker();
            $('#reservationdate').datetimepicker({
                format: 'DD-MM-YYYY'
            });
            // $('#reservation2').daterangepicker();
            $('#BerlakuHingga').datetimepicker({
                format: 'DD-MM-YYYY'
            });
        });
        $('#Kelurahan').select2({
            minimumInputLength: 3,
            allowClear: true,
            placeholder: 'Kelurahan',
            ajax: {
                dataType: 'json',
                url: '<?php echo base_url(); ?>_45_desa/getData',
                delay: 800,
                data: function(params) {
                    return {
                        search: params.term
                    }
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    };
                },
            }
        });
        $('#Kecamatan').select2({
            minimumInputLength: 3,
            allowClear: true,
            placeholder: 'Kecamatan',
            ajax: {
                dataType: 'json',
                url: '<?php echo base_url(); ?>_44_kecamatan/getData',
                delay: 800,
                data: function(params) {
                    return {
                        search: params.term
                    }
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    };
                },
            }
        });
        $('#Kabupaten').select2({
            minimumInputLength: 3,
            allowClear: true,
            placeholder: 'Kabupaten',
            ajax: {
                dataType: 'json',
                url: '<?php echo base_url(); ?>_43_kabupaten/getData',
                delay: 800,
                data: function(params) {
                    return {
                        search: params.term
                    }
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    };
                },
            }
        });
        $('#Provinsi').select2({
            minimumInputLength: 3,
            allowClear: true,
            placeholder: 'Provinsi',
            ajax: {
                dataType: 'json',
                url: '<?php echo base_url(); ?>_42_provinsi/getData',
                delay: 800,
                data: function(params) {
                    return {
                        search: params.term
                    }
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    };
                },
            }
        });
    </script>
