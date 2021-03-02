<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title><?= $title; ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="colorlib" />

    <link rel="icon" href="<?= base_url('assets') ?>/img/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/feather.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/datatables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/buttons.datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/buttons.datatables.min-2.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/pages.css">
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- Navbar -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="index.html" class="mt-2">
                            <span class="d-inline-flex h5">P o l i k l i n i k</span>
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close">
                                            <i class="feather icon-x input-group-text"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn">
                                            <i class="feather icon-search input-group-text"></i>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-d8424a08d31b5b8b406fded2-="">
                                    <i class="full-screen feather icon-maximize"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?= base_url('assets/img/profil/') . $user['username'] . '/' . $user['foto']  ?>" class="img-radius" alt="User-Profile-Image">

                                        <!-- Nama Petugas -->
                                        <span><?= $user['nama']; ?></span>

                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="<?= base_url('dashboard/profil'); ?>">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('auth/logout'); ?>">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

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

                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>Laporan</h5>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <a href="<?= base_url('laporan'); ?>" class="btn waves-effect waves-light btn-primary btn-outline-primary btn-block">Obat</a>
                                                            </div>
                                                            <div class="col-3">
                                                                <a href="<?= base_url('laporan/obat_masuk'); ?>" class="btn waves-effect waves-light btn-primary btn-outline-primary btn-block">Obat Masuk</a>
                                                            </div>
                                                            <div class="col-3">
                                                                <a href="<?= base_url('laporan/obat_keluar'); ?>" class="btn waves-effect waves-light btn-primary btn-block">Obat Keluar</a>
                                                            </div>
                                                            <div class="col-3">
                                                                <a href="<?= base_url('laporan/grafik'); ?>" class="btn waves-effect waves-light btn-primary btn-outline-primary btn-block">Grafik</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Data Obat Keluar Poliklinik</h5>
                                                        <a href="<?= base_url('laporan/print_ok'); ?>" class="btn btn-success btn-sm  m-r-10 float-right">Print</a>
                                                    </div>
                                                    <div class="card-block">
                                                        <table id="cbtn-selectors" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama</th>
                                                                    <th>Jumlah</th>
                                                                    <th>Tanggal</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 1; ?>
                                                                <?php foreach ($obatMasuk as $om) : ?>
                                                                    <tr>
                                                                        <td><?= $i; ?></td>
                                                                        <td><?= $om['nm_obat']; ?></td>
                                                                        <td><?= $om['jumlah']; ?></td>
                                                                        <td><?= $om['tgl']; ?></td>
                                                                    </tr>
                                                                    <?php $i++; ?>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama</th>
                                                                    <th>Stok</th>
                                                                    <th>Satuan</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
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
        </div>

        <div id="styleSelector">
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <script type="46fdda76826106b979343b7a-text/javascript" src="<?= base_url('assets') ?>/js/jquery.min.js"></script>
    <script type="46fdda76826106b979343b7a-text/javascript" src="<?= base_url('assets') ?>/js/jquery-ui.min.js"></script>
    <script type="46fdda76826106b979343b7a-text/javascript" src="<?= base_url('assets') ?>/js/popper.min.js"></script>
    <script type="46fdda76826106b979343b7a-text/javascript" src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>

    <script src="<?= base_url('assets') ?>/js/waves.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>

    <script type="46fdda76826106b979343b7a-text/javascript" src="<?= base_url('assets') ?>/js/jquery.slimscroll.js"></script>

    <script type="46fdda76826106b979343b7a-text/javascript" src="<?= base_url('assets') ?>/js/modernizr.js"></script>
    <script type="46fdda76826106b979343b7a-text/javascript" src="<?= base_url('assets') ?>/js/css-scrollbars.js"></script>

    <script src="<?= base_url('assets') ?>/js/jquery.datatables.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/datatables.buttons.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/jszip.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/pdfmake.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/vfs_fonts.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/datatables.buttons.min-2.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/buttons.flash.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/jszip.min-2.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/vfs_fonts-2.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/buttons.colvis.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/buttons.print.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/buttons.html5.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/datatables.bootstrap4.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/datatables.responsive.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/responsive.bootstrap4.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>

    <script src="<?= base_url('assets') ?>/js/extension-btns-custom.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/pcoded.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/vertical-layout.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/jquery.mcustomscrollbar.concat.min.js" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script type="46fdda76826106b979343b7a-text/javascript" src="<?= base_url('assets') ?>/js/script.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="46fdda76826106b979343b7a-text/javascript"></script>
    <script type="46fdda76826106b979343b7a-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="<?= base_url('assets') ?>/js/rocket-loader.min.js" data-cf-settings="46fdda76826106b979343b7a-|49" defer=""></script>
</body>

</html>