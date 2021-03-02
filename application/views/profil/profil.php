<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- content -->

                        <div class="row gutters-sm">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body m-t-10">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="<?= base_url('assets/img/profil/') . $user['username'] . '/' . $user['foto']  ?>" alt="Admin" class="rounded-circle" height="100">
                                            <div class="mt-3">
                                                <h4><?= $user['nama']; ?></h4>

                                                <?php
                                                $role_id = $this->session->userdata('role_id');

                                                $query_menu = "SELECT *
                                                                 FROM `user_role` JOIN `user_access_menu`
                                                                   ON `user_role`.`id` = `user_access_menu`.`menu_id`
                                                                WHERE `user_access_menu`.`role_id` = $role_id
                                                             ORDER BY `user_access_menu`.`menu_id` ASC
                                                            ";

                                                $menu = $this->db->query($query_menu)->result_array();

                                                ?>

                                                <p class="text-secondary mb-3"><?= $menu[0]['role']; ?></p>
                                                <a href="<?= base_url('dashboard/edit_profil'); ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nama</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?= $user['nama']; ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Profesi</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?= $user['tugas']; ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Username</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?= $user['username']; ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nomor Telepon</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?= $user['no_telp']; ?>
                                            </div>
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