<?= $this->extend('template/v_backend') ?>
<?= $this->section('content') ?>

<div class="col-sm-12">
    <div class="card card-primary">
        <div class="row">
            <div class="card-header">
                <div class="box-tools pull-right">
                    <a href="#" class="btn btn-primary btn-sm btn-flat">
                        <i class="fa fa-plus"> Add</i>
                    </a>
                </div>
            </div>
        </div> <br>

        <div class="class-body p-0">
            <?php
            if (session()->getFlashdata('tambah')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo session()->getFlashdata('tambah');
                echo '</h5></div>';
            }
            ?>
            <?php
            if (session()->getFlashdata('edit')) {
                echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo session()->getFlashdata('edit');
                echo '</h5></div>';
            }
            ?>
            <?php
            if (session()->getFlashdata('delete')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo session()->getFlashdata('delete');
                echo '</h5></div>';
            }
            ?>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="70px">No</th>
                        <th>No Anggota</th>
                        <th>Nama</th>
                        <th>Lahir</th>
                        <th>Tgl Lahir</th>
                        <th>JK</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>Kota Tinggal</th>
                        <th>HP</th>
                        <th>Email</th>
                        <th>Kerja</th>
                        <th>Status</th>
                        <th>DPC</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($anggota_all as $key => $value) { ?>
                        <tr>
                            <td> <?= $no++ ?> </td>
                            <td> <?= $value['no_anggota'] ?> </td>
                            <td> <?= $value['nama_anggota'] ?> </td>
                            <td> <?= $value['tempat_lahir'] ?> </td>
                            <td> <?= $value['tgl_lahir'] ?> </td>
                            <td>
                                <?php
                                    if ($value['jk'] == 1) {
                                        echo 'L';
                                    } else {
                                        echo 'P';
                                    }
                                    ?>
                            </td>
                            <td> <?= $value['nama_agama'] ?> </td>
                            <td> <?= $value['alamat'] ?> </td>
                            <td> <?= $value['kota_tinggal'] ?> </td>
                            <td> <?= $value['hp'] ?> </td>
                            <td> <?= $value['email'] ?> </td>
                            <td> <?= $value['tempat_kerja'] ?> </td>
                            <td> <?= $value['status_kepegawaian'] ?> </td>
                            <td> <?= $value['nama_dpc'] ?> </td>
                            <td>
                                <button class="btn btn-flat btn-warning btn-xs" data-toggle="modal" data-target="#edit<?= $value['id'] ?>"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-flat btn-danger btn-xs" data-toggle="modal" data-target="#delete<?= $value['id'] ?>"><i class="fa fa-trash   "></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->endSection() ?>