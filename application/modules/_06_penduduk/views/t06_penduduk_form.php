    <form action="<?php echo $action; ?>" method="post">
        <div class="form-row">
            <div class="form-group col-1">
                <label for="tinyint">No Urut <?php echo form_error('NoUrut') ?></label>
                <input type="text" class="form-control" name="NoUrut" id="NoUrut" placeholder="NoUrut" value="<?php echo $NoUrut; ?>" />
            </div>
    	    <div class="form-group col-3">
                <label for="varchar">Nama <?php echo form_error('Nama') ?></label>
                <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="varchar">NIK <?php echo form_error('NIK') ?></label>
                <input type="text" class="form-control" name="NIK" id="NIK" placeholder="NIK" value="<?php echo $NIK; ?>" />
            </div>
            <div class="form-group col-2">
                <label for="enum">Jenis Kelamin <?php echo form_error('JenisKelamin') ?></label>
                <select name="JenisKelamin" class="form-control">
                    <option value="LAKI-LAKI" <?php echo ($JenisKelamin == 'LAKI-LAKI') ? ' selected="selected"' : "" ?>>LAKI-LAKI</option>
                    <option value="PEREMPUAN" <?php echo ($JenisKelamin == 'PEREMPUAN') ? ' selected="selected"' : "" ?>>PEREMPUAN</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-3">
                <label for="int">Tempat Lahir <?php echo form_error('TempatLahir') ?></label>
                <!-- <select name="TempatLahir" class="form-control" id="select2"> -->
                <select name="TempatLahir" class="form-control" id="Kabupaten">
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
                <label for="tinyint">Pendidikan <?php echo form_error('Pendidikan') ?></label>
                <select name="Pendidikan" class="form-control">
                    <option value="">Pendidikan</option>
                    <?php
                    foreach($pendidikanData as $pendidikan) {
                        $selected = ($pendidikan->idpendidikan == $Pendidikan) ? ' selected="selected"' : "";
                        echo '<option value="'.$pendidikan->idpendidikan.'" '.$selected.'>'.$pendidikan->Pendidikan . '</option>';
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
                <label for="tinyint">Hubungan Keluarga <?php echo form_error('HubunganKeluarga') ?></label>
                <select name="HubunganKeluarga" class="form-control">
                    <option value="">Hubungan Keluarga</option>
                    <?php
                    foreach($hubunganData as $hubungan) {
                        $selected = ($hubungan->idhubungan == $HubunganKeluarga) ? ' selected="selected"' : "";
                        echo '<option value="'.$hubungan->idhubungan.'" '.$selected.'>'.$hubungan->Hubungan . '</option>';
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
        </div>

        <div class="form-row">
            <div class="form-group col-2">
                <label for="varchar">No. Paspor <?php echo form_error('NoPaspor') ?></label>
                <input type="text" class="form-control" name="NoPaspor" id="NoPaspor" placeholder="NoPaspor" value="<?php echo $NoPaspor; ?>" />
            </div>
    	    <div class="form-group col-2">
                <label for="varchar">No. Kitas/Kitap <?php echo form_error('NoKitasKitap') ?></label>
                <input type="text" class="form-control" name="NoKitasKitap" id="NoKitasKitap" placeholder="NoKitasKitap" value="<?php echo $NoKitasKitap; ?>" />
            </div>
    	    <div class="form-group col-3">
                <label for="varchar">Nama Ayah <?php echo form_error('NamaAyah') ?></label>
                <input type="text" class="form-control" name="NamaAyah" id="NamaAyah" placeholder="NamaAyah" value="<?php echo $NamaAyah; ?>" />
            </div>
    	    <div class="form-group col-3">
                <label for="varchar">Nama Ibu <?php echo form_error('NamaIbu') ?></label>
                <input type="text" class="form-control" name="NamaIbu" id="NamaIbu" placeholder="NamaIbu" value="<?php echo $NamaIbu; ?>" />
            </div>
        </div>

	    <input type="hidden" name="idpenduduk" value="<?php echo $idpenduduk; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('_06_penduduk') ?>" class="btn btn-default">Cancel</a>
    </form>

    <script type="text/javascript">
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('#select2').select2();
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
    </script>
    <script>
        $(function () {
            //Date range picker
            $('#reservation').daterangepicker();
            $('#reservationdate').datetimepicker({
                format: 'DD-MM-YYYY'
            });
            $('#reservation2').daterangepicker();
            $('#reservationdate2').datetimepicker({
                format: 'DD-MM-YYYY'
            });
        })
        // $(function () {
        //     //Date range picker
        //     $('#reservationdate').datetimepicker({
        //         format: 'DD-MM-YYYY'
        //     })
        // })
    </script>
