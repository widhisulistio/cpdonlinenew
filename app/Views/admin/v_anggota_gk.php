<?= $this->extend('template/v_backend') ?>
<?= $this->section('content') ?>

<div class="col-sm-12">
    <div class="card card-primary">
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
            <?php if (session()->getFlashdata('edit')) {
                echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fa fa-check"></i>';
                echo session()->getFlashdata('edit');
                echo '</h5></div>';
            } ?>
            <?php
            if (session()->getFlashdata('delete')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo session()->getFlashdata('delete');
                echo '</h5></div>';
            }
            ?>
            <div class="table-responsive">
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($anggota_gk as $key => $value) { ?>
                            <tr>
                                <td> <?= $no++ ?> </td>
                                <td> <?= $value['no_anggota'] ?> </td>
                                <td> <?= $value['nama_anggota'] ?> </td>
                                <td> <?= $value['tempat_lahir'] ?> </td>
                                <td> <?= $value['tgl_lahir'] ?> </td>
                                <td> <?= $value['jk'] ?> </td>
                                <td> <?= $value['nama_agama'] ?> </td>
                                <td> <?= $value['alamat'] ?> </td>
                                <td> <?= $value['kota_tinggal'] ?> </td>
                                <td> <?= $value['hp'] ?> </td>
                                <td> <?= $value['email'] ?> </td>
                                <td> <?= $value['tempat_kerja'] ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>
<!-- modal edit -->
<?php foreach ($anggota_gk as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id'] ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Data Anggota</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('anggota/editdata/' . $value['id']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>No Anggota</label>
                        <input name="no_anggota" value="<?= $value['no_anggota'] ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Anggota</label>
                        <input name="nama_anggota" value="<?= $value['nama_anggota'] ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tanggl Lahir</label>
                        <input name="tgl_lahir" value="<?= $value['tgl_lahir'] ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input name="jk" value="<?= $value['jk'] ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Hp</label>
                        <input name="hp" value="<?= $value['hp'] ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input name="email" value="<?= $value['email'] ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="<?= $value['status'] ?>"><?php if ($value['status'] == 1) {
                                                                            echo 'Belum';
                                                                        } else {
                                                                            echo 'Ajukan Permohonan';
                                                                        } ?></option>
                            <option value="3">Verifikasi</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Verifikasi</button>
                </div>
                <?php echo form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>

<!-- /.modal -->
<?= $this->endSection() ?>