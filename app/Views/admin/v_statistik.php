<?= $this->extend('template/v_backend') ?>
<?= $this->section('content') ?>
<div class="col-lg-3 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-green">
        <div class="inner">
            <h3><?= $total ?></h3>


            <p>Total Anggota</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
        <a href="<?= base_url('anggota/anggota_all') ?>" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-lg-3 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-red">
        <div class="inner">
            <h3><?= $kota_data ?></h3>


            <p>DPC Kota Yogyakarta</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
        <a href="<?= base_url('anggota/anggota_kota') ?>" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-lg-3 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-yellow">
        <div class="inner">
            <h3><?= $bantul_data ?></h3>


            <p>DPC Bantul</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
        <a href="<?= base_url('anggota/anggotabantul') ?>" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-lg-3 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-blue">
        <div class="inner">
            <h3><?= $kp_data ?></h3>


            <p>DPC KP</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
        <a href="<?= base_url('anggota/anggotakp') ?>" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-lg-3 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-teal">
        <div class="inner">
            <h3><?= $sleman_data ?></h3>


            <p>DPC Sleman</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
        <a href="<?= base_url('anggota/anggotasleman') ?>" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-lg-3 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-orange">
        <div class="inner">
            <h3><?= $gk_data ?></h3>


            <p>DPC GK</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
        <a href="<?= base_url('anggota/anggotagk') ?>" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<br>
<?= $this->endSection() ?>