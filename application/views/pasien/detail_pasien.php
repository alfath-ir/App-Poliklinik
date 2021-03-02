<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- content -->
                        <div class="page-wrapper">

                            <div class="page-body">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Form Edit Pasien Mahasiswa</h5>
                                            </div>
                                            <div class="card-block">

                                                <form method="POST" action="<?= base_url('pasien/uppasien'); ?>">

                                                    <input type="hidden" name="id" id="id" value="<?= $pasien['id']; ?>">

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">NPM/NIP</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="no" id="no" class="form-control" value="<?= $pasien['no']; ?>" readonly>
                                                            <?= form_error('no', '<small class="text-danger pl-2">', '</small>'); ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nama</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="nama" id="nama" class="form-control" value="<?= $pasien['nama']; ?>" readonly>
                                                            <?= form_error('nama', '<small class="text-danger pl-2">', '</small>'); ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="tgl" id="tgl" class="form-control" placeholder="Tahun-Bulan-Hari" value="<?= $pasien['tgl_lahir']; ?>" readonly>
                                                            <?= form_error('tgl', '<small class="text-danger pl-2">', '</small>'); ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="tgl" id="tgl" class="form-control" placeholder="Tahun-Bulan-Hari" value="<?= $pasien['jk']; ?>" readonly>
                                                            <?= form_error('tgl', '<small class="text-danger pl-2">', '</small>'); ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Tipe Pasien</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="tgl" id="tgl" class="form-control" placeholder="Tahun-Bulan-Hari" value="<?php if ($pasien['tipe_pasien'] == 1) {
                                                                                                                                                                    echo "Karyawan/Dosen";
                                                                                                                                                                } elseif ($pasien['tipe_pasien'] == 2) {
                                                                                                                                                                    echo "Mahasiswa";
                                                                                                                                                                }; ?>" readonly>
                                                            <?= form_error('tgl', '<small class="text-danger pl-2">', '</small>'); ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nomor Telfon</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?= $pasien['no_telp']; ?>" readonly>
                                                            <?= form_error('no_telp', '<small class="text-danger pl-2">', '</small>'); ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $pasien['alamat']; ?>" readonly>
                                                            <?= form_error('alamat', '<small class="text-danger pl-2">', '</small>'); ?>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-success m-b-20 m-r-35 float-right">Simpan</button>
                                                <a href="javascript:window.history.go(-1);" class="btn btn-secondary m-b-30 m-r-10 float-right">Kembali</a>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end content -->
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>