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
        <h2 style="margin-top:0px">T07_kk <?php echo $button ?></h2> -->
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nomor <?php echo form_error('Nomor') ?></label>
            <input type="text" class="form-control" name="Nomor" id="Nomor" placeholder="Nomor" value="<?php echo $Nomor; ?>" />
        </div>
	    <!-- <div class="form-group">
            <label for="int">Nama <?php echo form_error('Nama') ?></label>
            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
        </div> -->
        <div class="form-group">
            <label for="int">Nama <?php echo form_error('Nama') ?></label>
            <select name="Nama" class="form-control" id="Penduduk">
                <option value="">Nama</option>
                <option value="<?php echo $Nama ?>" selected="selected"><?php echo $PendudukNama; ?></option>
                <?php
                // foreach($pendudukData as $penduduk) {
                //     $selected = ($penduduk->idpenduduk == $Nama) ? ' selected="selected"' : "";
                //     echo '<option value="'.$penduduk->idpenduduk.'" '.$selected.'>'.$penduduk->Nama . ' - ' . $penduduk->NIK . '</option>';
                // }
                ?>
            </select>
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('Alamat') ?></label>
            <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" value="<?php echo $Alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">RT <?php echo form_error('RT') ?></label>
            <input type="text" class="form-control" name="RT" id="RT" placeholder="RT" value="<?php echo $RT; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">RW <?php echo form_error('RW') ?></label>
            <input type="text" class="form-control" name="RW" id="RW" placeholder="RW" value="<?php echo $RW; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Kelurahan <?php echo form_error('Kelurahan') ?></label>
            <select name="Kelurahan" class="form-control" id="Kelurahan">
                <option value="">Kelurahan</option>
                <option value="<?php echo $Kelurahan ?>" selected="selected"><?php echo $KelurahanNama; ?></option>
            </select>
        </div>
        <div class="form-group">
            <label for="int">Kecamatan <?php echo form_error('Kecamatan') ?></label>
            <select name="Kecamatan" class="form-control" id="Kecamatan">
                <option value="">Kecamatan</option>
                <option value="<?php echo $Kecamatan ?>" selected="selected"><?php echo $KecamatanNama; ?></option>
            </select>
        </div>
        <div class="form-group">
            <label for="int">Kabupaten <?php echo form_error('Kabupaten') ?></label>
            <select name="Kabupaten" class="form-control" id="Kabupaten">
                <option value="">Kabupaten</option>
                <option value="<?php echo $Kabupaten ?>" selected="selected"><?php echo $KabupatenNama; ?></option>
            </select>
        </div>
        <div class="form-group">
            <label for="int">Provinsi <?php echo form_error('Provinsi') ?></label>
            <select name="Provinsi" class="form-control" id="Provinsi">
                <option value="">Provinsi</option>
                <option value="<?php echo $Provinsi ?>" selected="selected"><?php echo $ProvinsiNama; ?></option>
            </select>
        </div>
	    <div class="form-group">
            <label for="varchar">KodePos <?php echo form_error('KodePos') ?></label>
            <input type="text" class="form-control" name="KodePos" id="KodePos" placeholder="KodePos" value="<?php echo $KodePos; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal <?php echo form_error('Tanggal') ?></label>
            <input type="text" class="form-control" name="Tanggal" id="Tanggal" placeholder="Tanggal" value="<?php echo $Tanggal; ?>" />
        </div>
	    <!-- <div class="form-group">
            <label for="tinyint">Idusers <?php echo form_error('idusers') ?></label>
            <input type="text" class="form-control" name="idusers" id="idusers" placeholder="Idusers" value="<?php echo $idusers; ?>" />
        </div> -->
	    <!-- <div class="form-group">
            <label for="timestamp">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div> -->
	    <!-- <div class="form-group">
            <label for="timestamp">Updated At <?php echo form_error('updated_at') ?></label>
            <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
        </div> -->
	    <input type="hidden" name="idkk" value="<?php echo $idkk; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('_07_kk') ?>" class="btn btn-default">Cancel</a>
	</form>

    <script type="text/javascript">
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.select2').select2();
            $('#Penduduk').select2({
                minimumInputLength: 3,
                allowClear: true,
                placeholder: 'Penduduk',
                ajax: {
                    dataType: 'json',
                    url: '<?php echo base_url(); ?>_06_penduduk/getData',
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
        });
    </script>
    <!-- </body>
</html> -->
