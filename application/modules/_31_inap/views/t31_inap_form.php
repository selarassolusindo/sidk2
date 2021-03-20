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
        <h2 style="margin-top:0px">T31_inap <?php echo $button ?></h2> -->
    <form action="<?php echo $action; ?>" method="post">
	    <!-- <div class="form-group">
            <label for="int">Tamu <?php echo form_error('Tamu') ?></label>
            <input type="text" class="form-control" name="Tamu" id="Tamu" placeholder="Tamu" value="<?php echo $Tamu; ?>" />
        </div> -->
        <div class="form-group">
            <label for="int">Tamu <?php echo form_error('Tamu') ?></label>
            <select name="Tamu" class="form-control" id="Tamu">
                <option value="">Tamu</option>
                <option value="<?php echo $Tamu ?>" selected="selected"><?php echo $tamuNama; ?></option>
            </select>
        </div>
	    <!-- <div class="form-group">
            <label for="int">Alamat <?php echo form_error('Alamat') ?></label>
            <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" value="<?php echo $Alamat; ?>" />
        </div> -->
        <div class="form-group">
            <label for="int">Alamat <?php echo form_error('Alamat') ?></label>
            <select name="Alamat" class="form-control" id="Alamat">
                <option value="">Alamat</option>
                <option value="<?php echo $Alamat ?>" selected="selected"><?php echo $alamatNama; ?></option>
            </select>
        </div>
	    <!-- <div class="form-group">
            <label for="date">Mulai Tanggal <?php echo form_error('MulaiTanggal') ?></label>
            <input type="text" class="form-control" name="MulaiTanggal" id="MulaiTanggal" placeholder="MulaiTanggal" value="<?php echo $MulaiTanggal; ?>" />
        </div> -->
        <div class="form-group col-2">
            <label for="date">Mulai Tanggal <?php echo form_error('MulaiTanggal') ?></label>
            <div class="input-group date" id="mulaitanggal" data-target-input="nearest">
                <div class="input-group-append" data-target="#mulaitanggal" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
                <input placeholder="Mulai Tanggal" type="text" name="MulaiTanggal" value="<?php echo $MulaiTanggal; ?>" class="form-control datetimepicker-input" data-target="#mulaitanggal"/>
            </div>
        </div>
	    <!-- <div class="form-group">
            <label for="date">Sampai Tanggal <?php echo form_error('SampaiTanggal') ?></label>
            <input type="text" class="form-control" name="SampaiTanggal" id="SampaiTanggal" placeholder="SampaiTanggal" value="<?php echo $SampaiTanggal; ?>" />
        </div> -->
        <div class="form-group col-2">
            <label for="date">Sampai Tanggal <?php echo form_error('SampaiTanggal') ?></label>
            <div class="input-group date" id="sampaitanggal" data-target-input="nearest">
                <div class="input-group-append" data-target="#sampaitanggal" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
                <input placeholder="Sampai Tanggal" type="text" name="SampaiTanggal" value="<?php echo $SampaiTanggal; ?>" class="form-control datetimepicker-input" data-target="#sampaitanggal"/>
            </div>
        </div>
	    <div class="form-group">
            <label for="Keperluan">Keperluan <?php echo form_error('Keperluan') ?></label>
            <textarea class="form-control" rows="3" name="Keperluan" id="Keperluan" placeholder="Keperluan"><?php echo $Keperluan; ?></textarea>
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
	    <input type="hidden" name="idinap" value="<?php echo $idinap; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('_31_inap') ?>" class="btn btn-default">Cancel</a>
	</form>

    <script type="text/javascript">
        $(function () {
            //Date range picker
            // $('#reservation').daterangepicker();
            $('#mulaitanggal').datetimepicker({
                format: 'DD-MM-YYYY'
            });
            // $('#reservation2').daterangepicker();
            $('#sampaitanggal').datetimepicker({
                format: 'DD-MM-YYYY'
            });
        });
        $('#Tamu').select2({
            minimumInputLength: 3,
            allowClear: true,
            placeholder: 'Tamu',
            ajax: {
                dataType: 'json',
                url: '<?php echo base_url(); ?>_08_tamu/getData',
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
        $('#Alamat').select2({
            minimumInputLength: 3,
            allowClear: true,
            placeholder: 'Alamat',
            ajax: {
                dataType: 'json',
                url: '<?php echo base_url(); ?>_35_alamat/getData',
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
