<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- content -->

                        <div class="row gutters-sm">
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <!-- <form action="<?php //base_url('user/update_profil'); 
                                                            ?>" method="post"> -->
                                        <?= form_open_multipart('dashboard/update_profil'); ?>
                                        <input type="hidden" name="id" class="id" value="<?= $user['id']; ?>">

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nama</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="nama" id="nama" class="form-control" value="<?= $user['nama']; ?>">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Profesi</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="profesi" id="profesi" class="form-control" value="<?= $user['tugas']; ?>" disabled>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Username</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="username" id="username" class="form-control" value="<?= $user['username']; ?>">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nomor Telepon</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?= $user['no_telp']; ?>">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Foto Profil</h6>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="file" name="foto" id="foto" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row m-t-25">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-success float-right ml-2" value="upload">Simpan</button>
                                                <a href="<?= base_url('dashboard/profil'); ?>" type="submit" class="btn btn-secondary float-right">Kembali</a>
                                            </div>
                                        </div>
                                        <!-- </form> -->
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