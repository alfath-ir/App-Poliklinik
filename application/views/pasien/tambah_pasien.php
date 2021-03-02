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
                                                <h5>Form Tambah Pasien</h5>
                                            </div>
                                            <div class="card-block">

                                                <form method="POST" action="<?= base_url('pasien/tambah'); ?>">

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">NPM/NIP</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="no" id="no" class="form-control" autocomplete="off">
                                                            <?= form_error('no', '<small class="text-danger pl-2">', '</small>'); ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nama</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="nama" id="nama" class="form-control" autocomplete="off">
                                                            <?= form_error('nama', '<small class="text-danger pl-2">', '</small>'); ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="tgl" id="tgl" class="form-control" placeholder="Tahun-Bulan-Hari" autocomplete="off">
                                                            <?= form_error('tgl', '<small class="text-danger pl-2">', '</small>'); ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Tipe Pasien</label>
                                                        <div class="col-sm-10">
                                                            <select name="jenis" id="jenis" class="form-control">
                                                                <option>Pilih salah satu</option>
                                                                <?php foreach ($jenis as $j) : ?>
                                                                    <option value="<?= $j; ?>"><?= $j; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                        <div class="col-sm-10">
                                                            <select name="jklmn" id="jklmn" class="form-control">
                                                                <option>Pilih salah satu</option>
                                                                <?php foreach ($jklmn as $jk) : ?>
                                                                    <option value="<?= $jk; ?>"><?= $jk; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nomor Telfon</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="no_telp" id="no_telp" class="form-control" autocomplete="off">
                                                            <?= form_error('no_telp', '<small class="text-danger pl-2">', '</small>'); ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="alamat" id="alamat" class="form-control" autocomplete="off">
                                                            <?= form_error('alamat', '<small class="text-danger pl-2">', '</small>'); ?>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-success m-b-20 m-r-35 float-right">Simpan</button>
                                                <a href="<?= base_url('pasien'); ?>" class="btn btn-secondary m-b-30 m-r-10 float-right">Kembali</a>
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