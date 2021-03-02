<section class="login-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <form class="md-float-material form-material" method="POST" action="<?= base_url('auth/index') ?>">
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign In</h3>
                                </div>
                            </div>
                            <?= $this->session->flashdata('alert'); ?>
                            <div class="form-group form-primary">
                                <input type="text" name="username" id="username" class="form-control">
                                <span class="form-bar"></span>
                                <label class="float-label">Username</label>
                                <?= form_error('username', '<small class="text-danger mt-1">', '</small>'); ?>
                            </div>
                            <div class="form-group form-primary">
                                <input type="password" name="password" id="password" class="form-control">
                                <span class="form-bar"></span>
                                <label class="float-label">Password</label>
                                <?= form_error('password', '<small class="text-danger mt-1">', '</small>'); ?>
                            </div>

                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        <div class="col-sm-12 text-center m-t-25">
            <img src="<?= base_url('assets/'); ?>img/logo_polinela.png" height="25">
            <span class="ml-1 text-white">
                Aplikasi Pelayanan Poliklinik Negeri Lampung
            </span>
        </div>

    </div>

    </div>

    </div>

</section>