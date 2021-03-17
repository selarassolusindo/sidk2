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
        <h2 style="margin-top:0px">T07_kk Read</h2> -->
    <!-- <h3>KARTU KELUARGA</h3> -->
    <!-- <h5><?php echo $Nomor; ?></h5> -->
    <div class="row">
        <div class="col-2">Nomor</div><div class="col"><?php echo $Nomor; ?></div>
    </div>
    <div class="row">
        <div class="col-2">Nama Kepala Keluarga</div><div class="col-3"><?php echo $PendudukNama; ?></div>
        <div class="col-1"></div>
        <div class="col-1">Kecamatan</div><div class="col-3"><?php echo $KecamatanNama; ?></div>
    </div>
    <div class="row">
        <div class="col-2">Alamat</div><div class="col-3"><?php echo $Alamat; ?></div>
        <div class="col-1"></div>
        <div class="col-1">Kabupaten</div><div class="col-3"><?php echo $KabupatenNama; ?></div>
    </div>
    <div class="row">
        <div class="col-2">RT/RW</div><div class="col-3"><?php echo $RT . '/' . $RW; ?></div>
        <div class="col-1"></div>
        <div class="col-1">Provinsi</div><div class="col-3"><?php echo $ProvinsiNama; ?></div>
    </div>
    <div class="row">
        <div class="col-2">Kelurahan</div><div class="col-3"><?php echo $KelurahanNama; ?></div>
        <div class="col-1"></div>
        <div class="col-1">Kode Pos</div><div class="col-3"><?php echo $KodePos; ?></div>
    </div>

    <div class="row"><div class="col">&nbsp;</div></div>

    <div class="row">
        <div class="border col"><b>No.</b></div>
        <div class="border col-2"><b>Nama Lengkap</b></div>
        <div class="border col-2"><b>NIK</b></div>
        <div class="border col"><b>Jenis Kelamin</b></div>
        <div class="border col-2"><b>Tempat Lahir</b></div>
        <div class="border col-1"><b>Tanggal Lahir</b></div>
        <div class="border col"><b>Agama</b></div>
        <div class="border col"><b>Pendidikan</b></div>
        <div class="border col"><b>Jenis Pekerjaan</b></div>
    </div>
    <?php foreach ($detail as $key => $d) { ?>
        <div class="row">
            <div class="border col"><?php echo $d->NoUrut ?></div>
            <div class="border col-2"><?php echo $d->Nama ?></div>
            <div class="border col-2"><?php echo $d->NIK ?></div>
            <div class="border col"><?php echo $d->JenisKelamin ?></div>
            <div class="border col-2"><?php echo $d->kabupatenNama ?></div>
            <div class="border col-1"><?php echo $d->TanggalLahir ?></div>
            <div class="border col"><?php echo $d->agamaNama?></div>
            <div class="border col"><?php echo $d->pendidikanNama?></div>
            <div class="border col"><?php echo $d->pekerjaanNama?></div>
        </div>
    <?php } ?>

    <div class="row"><div class="col">&nbsp;</div></div>

    <div class="row">
        <div class="border col"><b>No.</b></div>
        <div class="border col-1"><b>Status Perkawinan</b></div>
        <div class="border col-2"><b>Hubungan Keluarga</b></div>
        <div class="border col-2"><b>Kewarganegaraan</b></div>
        <div class="border col-1"><b>No. Paspor</b></div>
        <div class="border col-1"><b>No. Kitas/Kitap</b></div>
        <div class="border col-2"><b>Ayah</b></div>
        <div class="border col-2"><b>Ibu</b></div>
    </div>
    <?php foreach ($detail as $key => $d) { ?>
        <div class="row">
            <div class="border col"><?php echo $d->NoUrut ?></div>
            <div class="border col-1"><?php echo $d->statusNama ?></div>
            <div class="border col-2"><?php echo $d->hubunganNama ?></div>
            <div class="border col-2"><?php echo $d->wargaNegaraNama ?></div>
            <div class="border col-1"><?php echo $d->NoPaspor ?></div>
            <div class="border col-1"><?php echo $d->NoKitasKitap ?></div>
            <div class="border col-2"><?php echo $d->NamaAyah ?></div>
            <div class="border col-2"><?php echo $d->NamaIbu ?></div>
        </div>
    <?php } ?>

    <div class="row"><div class="col">&nbsp;</div></div>

    <div class="row">
        <div class="col-2">Tanggal</div><div class="col"><?php echo $Tanggal; ?></div>
    </div>

    <div class="row"><div class="col">&nbsp;</div></div>

    <div class="row"><div class="col"><a href="<?php echo site_url('_07_kk') ?>" class="btn btn-default">Cancel</a></div></div>

        <!-- </body>
</html> -->
