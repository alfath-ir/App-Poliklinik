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
                                                <h5>Reset Password User</h5>
                                            </div>
                                            <div class="card-block">

                                                <form method="POST" action="<?= base_url('user/passReset'); ?>">

                                                    <input type="hidden" name="id" id="id" value="<?= $getUser['id']; ?>">

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Nama</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="nama" id="nama" class="form-control" value="<?= $getUser['nama']; ?>" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Password Baru</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group input-group-button">
                                                                <input type="Password" name="password1" id="password1" class="form-control" value="">
                                                            </div>
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