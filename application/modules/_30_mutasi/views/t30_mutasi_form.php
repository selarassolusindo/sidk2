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
        <h2 style="margin-top:0px">T30_mutasi <?php echo $button ?></h2> -->
    <form action="<?php echo $action; ?>" method="post">
	    <!-- <div class="form-group">
            <label for="int">Idalamat <?php echo form_error('idalamat') ?></label>
            <input type="text" class="form-control" name="idalamat" id="idalamat" placeholder="Idalamat" value="<?php echo $idalamat; ?>" />
        </div> -->
	    <!-- <div class="form-group">
            <label for="date">Tanggal <?php echo form_error('tanggal') ?></label>
            <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div> -->
        <div class="form-row">
            <div class="form-group col-2">
                <label for="date">Tanggal <?php echo form_error('tanggal') ?></label>
                <div class="input-group date" id="tanggal" data-target-input="nearest">
                    <div class="input-group-append" data-target="#tanggal" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    <input placeholder="Tanggal Pindahan" type="text" name="tanggal" value="<?php echo $tanggal; ?>" class="form-control datetimepicker-input" data-target="#tanggal"/>
                </div>
            </div>
    	    <!-- <div class="form-group col-2">
                <label for="enum">Jenis <?php echo form_error('Jenis') ?></label>
                <input type="text" class="form-control" name="Jenis" id="Jenis" placeholder="Jenis" value="<?php echo $Jenis; ?>" />
            </div> -->
            <div class="form-group col-2">
                <label for="enum">Jenis <?php echo form_error('Jenis') ?></label>
                <select name="Jenis" class="form-control">
                    <option value="MASUK" <?php echo ($Jenis == 'MASUK') ? ' selected="selected"' : "" ?>>MASUK</option>
                    <option value="KELUAR" <?php echo ($Jenis == 'KELUAR') ? ' selected="selected"' : "" ?>>KELUAR</option>
                </select>
            </div>
    	    <!-- <div class="form-group col-8">
                <label for="int">Idkk <?php echo form_error('idkk') ?></label>
                <input type="text" class="form-control" name="idkk" id="idkk" placeholder="Idkk" value="<?php echo $idkk; ?>" />
            </div> -->
            <div class="form-group col-8">
                <label for="int">Nomor KK - Nama<?php echo form_error('idkk') ?></label>
                <select name="idkk" class="form-control" id="KK">
                    <option value="">Nomor KK - Nama</option>
                    <option value="<?php echo $idkk ?>" selected="selected"><?php echo $Nomor . ' - ' . $pendudukNama; ?></option>
                </select>
            </div>
        </div>
	    <!-- <div class="form-group">
            <label for="int">Idusers <?php echo form_error('idusers') ?></label>
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
	    <input type="hidden" name="idmutasi" value="<?php echo $idmutasi; ?>" />
        <input type="hidden" name="idalamat" value="<?php echo $idalamat; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('_30_mutasi/read/'.$idalamat) ?>" class="btn btn-default">Cancel</a>
	</form>

    <script type="text/javascript">
        $(function () {
            //Date range picker
            $('#tanggal').datetimepicker({
                format: 'DD-MM-YYYY'
            });
        });
        $('#KK').select2({
            minimumInputLength: 3,
            allowClear: true,
            placeholder: 'Nomor KK - Nama',
            ajax: {
                dataType: 'json',
                url: '<?php echo base_url(); ?>_07_kk/getData',
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
    <!-- </body>
</html> -->
