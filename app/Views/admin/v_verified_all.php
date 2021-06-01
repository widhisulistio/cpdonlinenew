<?= $this->extend('template/v_backend') ?>
<?= $this->section('content') ?>
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-check-square-o"></i></span>

        <div class="info-box-content">
            <span class="info-box-text"><b>Total Data Yang Telah Di Verifikasi</b></span>
            <span class="info-box-number"><?= $total_data; ?><small> Anggota</small></span>
            <a href="<?= base_url('anggota/anggota_verified') ?>" class="small-box-footer"> Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-check-square"></i></span>

        <div class="info-box-content">
            <span class="info-box-text"><b>Telah Diverifikasi DPC Kota</b></span>
            <span class="info-box-number"><?= $total_kota; ?><small> Anggota</small></span>
            <a href="<?= base_url('anggota/verified_kota') ?>" class="small-box-footer"> Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-check-square"></i></span>

        <div class="info-box-content">
            <span class="info-box-text"><b>Telah Diverifikasi DPC Bantul</b></span>
            <span class="info-box-number"><?= $total_bantul; ?><small> Anggota</small></span>
            <a href="<?= base_url('anggota/verified_bantul') ?>" class="small-box-footer"> Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-blue"><i class="fa fa-check-square"></i></span>

        <div class="info-box-content">
            <span class="info-box-text"><b>Telah Diverifikasi DPC Sleman</b></span>
            <span class="info-box-number"><?= $total_sleman; ?><small> Anggota</small></span>
            <a href="<?= base_url('anggota/verified_sleman') ?>" class="small-box-footer"> Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-check-square"></i></span>

        <div class="info-box-content">
            <span class="info-box-text"><b>Telah Diverifikasi DPC KP</b></span>
            <span class="info-box-number"><?= $total_kp; ?><small> Anggota</small></span>
            <a href="<?= base_url('anggota/verified_kp') ?>" class="small-box-footer"> Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-orange"><i class="fa fa-check-square"></i></span>

        <div class="info-box-content">
            <span class="info-box-text"><b>Telah Diverifikasi DPC GK</b></span>
            <span class="info-box-number"><?= $total_gk; ?><small> Anggota</small></span>
            <a href="<?= base_url('anggota/verified_gk') ?>" class="small-box-footer"> Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<?= $this->endSection() ?>