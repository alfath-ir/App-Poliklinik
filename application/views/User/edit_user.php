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
                                                <h5>Form Edit Data Petugas</h5>
                                            </div>
                                            <div class="card-block">

                                                <form method="POST" action="<?= base_url('user/update_user'); ?>">

                                                    <input type="hidden" name="id" id="id" value="<?= $getUser['id']; ?>">

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nama</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="nama" id="nama" class="form-control" value="<?= $getUser['nama']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Username</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="username" id="username" class="form-control" value="<?= $getUser['username']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group input-group-button">
                                                                <input type="Password" name="password" id="password" class="form-control" value="" disabled>
                                                                <div class="input-group-append">
                                                                    <a href="<?= base_url('user/reset_passwd/') . $getUser['id']; ?>" class="btn btn-danger" type="button">Reset Password</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Profesi</label>
                                                        <div class="col-sm-10">
                                                            <select name="profesi" id="profesi" class="form-control">
                                                                <option value="opt1">Pilih salah satu</option>
                                                                <?php foreach ($profesi as $p) : ?>
                                                                    <?php if ($p == $getUser['tugas']) : ?>
                                                                        <option value="<?= $p; ?>" selected><?= $p; ?></option>
                                                                    <?php else : ?>
                                                                        <option value="<?= $p; ?>"><?= $p; ?></option>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nomor Telepon</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?= $getUser['no_telp']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">
                                                            <div class="accordion-block">
                                                                <div id="accordion" role="tablist" aria-multiselectable="true">
                                                                    <div class="accordion-panel">
                                                                        <div class="accordion-heading" role="tab" id="headingOne">
                                                                            <span class="accordion-title">
                                                                                <a class="accordion-msg waves-effect waves-dark scale_active collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                                    <span>Tipe Akses</span>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                        <div id="collapseOne" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingOne">
                                                                            <div class="accordion-content accordion-desc">
                                                                                <p>1. Admin</p>
                                                                                <p>2. Petugas</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </label>
                                                        <div class="col-sm-10">
                                                            <select name="role_id" id="role_id" class="form-control">
                                                                <option value="opt1">Pilih salah satu</option>
                                                                <?php foreach ($akses as $a) : ?>
                                                                    <?php if ($a == $getUser['role_id']) : ?>
                                                                        <option value="<?= $a; ?>" selected><?= $a; ?></option>
                                                                    <?php else : ?>
                                                                        <option value="<?= $a; ?>"><?= $a; ?></option>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-success m-b-20 m-r-35 float-right">Simpan</button>
                                                <a href="<?= base_url('user'); ?>" class="btn btn-secondary m-b-30 m-r-10 float-right">Kembali</a>
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