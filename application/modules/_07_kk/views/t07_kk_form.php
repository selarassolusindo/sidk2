    <form action="<?php echo $action; ?>" method="post">
        <div class="form-row">
    	    <div class="form-group col-2">
                <label for="varchar">Nomor <?php echo form_error('Nomor') ?></label>
                <input type="text" class="form-control" name="Nomor" id="Nomor" placeholder="Nomor" value="<?php echo $Nomor; ?>" />
            </div>
            <div class="form-group col-3">
                <label for="int">Nama <?php echo form_error('Nama') ?></label>
                <select name="Nama" class="form-control" id="Penduduk">
                    <option value="">Nama</option>
                    <option value="<?php echo $Nama ?>" selected="selected"><?php echo $PendudukNama; ?></option>
                </select>
            </div>
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
    	    <div class="form-group col-1">
                <label for="varchar">KodePos <?php echo form_error('KodePos') ?></label>
                <input type="text" class="form-control" name="KodePos" id="KodePos" placeholder="KodePos" value="<?php echo $KodePos; ?>" />
            </div>
            <!-- <div class="form-group col-2">
                <label for="date">Tanggal <?php echo form_error('Tanggal') ?></label>
                <input type="text" class="form-control" name="Tanggal" id="Tanggal" placeholder="Tanggal" value="<?php echo $Tanggal; ?>" />
            </div> -->
            <div class="form-group">
                <label for="date">Tanggal <?php echo form_error('Tanggal') ?></label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    <input placeholder="Tanggal Terbit" type="text" name="Tanggal" value="<?php echo $Tanggal; ?>" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                </div>
            </div>
        </div>

        <!-- detail penduduk -->
        <div class="form-group">
            <label for="double">Warga</label>
            <!-- <p><a href="#" onclick="tambah()" class="btn btn-primary mb-2">Tambah Penduduk</a></p> -->
            <div id="tmp">
            <?php if ($this->uri->segment(2) == 'update') { ?>
                <?php foreach ($detail as $key => $d) { ?>
        		    <div class="row mb-2" id="<?= $key ?>">
            		  	<div class="col-4">
                            <select class="form-control penduduk" name="idpenduduk[]" required>
                                <option value="<?= $d->idpenduduk ?>" selected="selected"><?= $d->Nama . ' - ' . $d->NIK; ?></option>
                            </select>
            		  	</div>
            		  	<div class="col-1">
            		  		<input type="number" name="NoUrut[]" class="form-control" placeholder="No. Urut" value="<?= $d->NoUrut ?>" required>
            		  	</div>
            		  	<div class="col">
                            <?php // if($key > 0) { ?>
            		  			<a href="#" onclick="hapus(<?= $key ?>)" class="text-danger">Hapus</a>
            		  		<?php // } ?>
            		  	</div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <div class="row mb-2">
          		  	<div class="col-4">
          		  		<!-- <input type="text" name="idcost[]" class="form-control" placeholder="Cost" required> -->
                        <select class="form-control penduduk" name="idpenduduk[]" required></select>
          		  	</div>
          		  	<div class="col-1">
                        <input type="number" name="NoUrut[]" class="form-control" placeholder="No. Urut" required>
          		  	</div>
          		  	<div class="col">

          		  	</div>
      		    </div>
            <?php } ?>
            </div>
            <p><a href="#" onclick="tambah()" class="btn btn-primary mb-2">Tambah Warga</a></p>

        </div>

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
            $('.penduduk').select2({
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
        });
    </script>
    <script type="text/javascript">
    	var i = 1;
    	function tambah(){
    		i++;
    		$('#tmp').append(`
    		<div class="row mb-2" id="`+i+`">
                <div class="col-4">
                    <select class="form-control penduduk" name="idpenduduk[]" required></select>
                </div>
                <div class="col-1">
                    <input type="number" name="NoUrut[]" class="form-control form-control-sm" placeholder="No. Urut" required>
                </div>
    		  	<div class="col">
    		  		<a href="#" onclick="hapus(`+i+`)" class="text-danger">Hapus</a>
    		  	</div>
    		</div>`
    		);

            $('.penduduk').select2({
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
    	};

    	function hapus(index){
    		$('#'+index).remove();
    	}


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
