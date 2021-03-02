<!-- Side Bar -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="nav-list">
                <div class="pcoded-inner-navbar main-menu">

                    <!-- Access Level -->
                    <?php
                    $role_id = $this->session->userdata('role_id');

                    $query_menu = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
                    ?>

                    <div class="pcoded-navigation-label">
                        <?= $query_menu['role']; ?>
                    </div>

                    <!-- Submenu -->
                    <?php
                    $query_submenu = "SELECT *
                                            FROM `user_access_menu` JOIN `user_submenu`
                                              ON `user_access_menu`.`menu_id` = `user_submenu`.`id`
                                           WHERE `user_access_menu`.`role_id` = $role_id
                                    ";

                    $subMenu = $this->db->query($query_submenu)->result_array();
                    ?>

                    <?php foreach ($subMenu as $sm) : ?>

                        <ul class="pcoded-item pcoded-left-item">
                            <li>
                                <a href="<?= base_url($sm['url']); ?>" class="waves-effect waves-dark">
                                    <span class="pcoded-micon">
                                        <i class="<?= $sm['ico']; ?>"></i>
                                    </span>
                                    <span class="pcoded-mtext"><?= $sm['judul']; ?></span>
                                </a>
                            </li>
                        </ul>

                    <?php endforeach; ?>
                </div>
        </nav>

        <div class="pcoded-content">