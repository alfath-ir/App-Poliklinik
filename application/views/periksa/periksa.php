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
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/font-awesome-n.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/datatables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/buttons.datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/responsive.bootstrap4.min.css">

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
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Form Periksa Pasien</h5>
                                                    </div>

                                                    <div class="card-block">

                                                        <form method="POST" action="<?= base_url('periksa/tambah'); ?>">

                                                            <input type="hidden" name="id" id="id" value="<?= $id; ?>">

                                                            <div class="form-group row">
                                                                <div class="col-6">
                                                                    <label class="col-sm-12 col-form-label">Tekanan darah</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="td" id="td" class="form-control" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label class="col-sm-12 col-form-label">Gula Darah</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="gd" id="gd" class="form-control" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label class="col-sm-6 col-form-label">Asam Urat</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="au" id="au" class="form-control" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <label class="col-sm-6 col-form-label">Tanggal</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="tgl" id="tgl" class="form-control" autocomplete="off" value="<?= date('Y-m-d'); ?>" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-success btn-sm m-b-15 m-r-35 float-right">Simpan</button>
                                                        <a href="<?= base_url('periksa'); ?>" class="btn btn-secondary btn-sm m-b-30 m-r-10 float-right">Kembali</a>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Data Pasien</h5>
                                                    </div>

                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <div class="col-6 m-b-25">
                                                                <label class="col-sm-12 col-form-label">Nama</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="no" id="no" class="form-control" value="<?= $p['nama']; ?>" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="col-sm-12 col-form-label">Jenis Kelamin</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="no" id="no" class="form-control" value="<?= $p['jk']; ?>" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-4">
                                                                <label class="col-sm-6 col-form-label">Usia</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="no" id="no" class="form-control" value="<?= timespan(strtotime($p['tgl_lahir']), $today, 1); ?>" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="col-sm-6 col-form-label">Alamat</label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" name="no" id="no" class="form-control" value="<?= $p['alamat']; ?>" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Riwayat Penyakit Pasien</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="order-table" class="table table-bordered nowrap">
                                                                <thead>
                                                                    <tr class="bordzer-bottom-danger">
                                                                        <th width="50px" class="text-center">No</th>
                                                                        <th width="200px" class="text-center">Diagnosa</th>
                                                                        <th width="200px" class="text-center">Tanggal</th>
                                                                        <th width="200px" class="text-center">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $i = 1; ?>
                                                                    <?php foreach ($diagnosa as $d) : ?>
                                                                        <tr class="border-bottom-primary">
                                                                            <th class="text-center"><?= $i; ?></th>
                                                                            <td class="m-l-20"><?= $d['diagnosa']; ?></td>
                                                                            <td class="text-center"><?= $d['tanggal']; ?></td>
                                                                            <td class="text-center">
                                                                                <a href="<?= base_url('obat/hapus_masuk/') . $d['no_periksa']; ?>" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-original-title="Detail" class="text btn waves-effect waves-light btn-warning btn-sm"><i class="feather icon-info"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        <?php $i++; ?>
                                                                    <?php endforeach; ?>
                                                                </tbody>
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

                        <div id="styleSelector">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/jquery.min.js"></script>
    <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/jquery-ui.min.js"></script>
    <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/popper.min.js"></script>
    <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>

    <script src="<?= base_url('assets') ?>/js/waves.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>

    <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/jquery.slimscroll.js"></script>

    <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/modernizr.js"></script>
    <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/css-scrollbars.js"></script>

    <script src="<?= base_url('assets') ?>/js/jquery.datatables.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/datatables.buttons.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/jszip.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/pdfmake.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/vfs_fonts.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/buttons.print.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/buttons.html5.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/datatables.bootstrap4.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/datatables.responsive.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/responsive.bootstrap4.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>

    <script src="<?= base_url('assets') ?>/js/data-table-custom.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/pcoded.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/vertical-layout.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
    <script src="<?= base_url('assets') ?>/js/jquery.mcustomscrollbar.concat.min.js" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
    <script type="7ab3cb0e204785e18dc50839-text/javascript" src="<?= base_url('assets') ?>/js/script.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="7ab3cb0e204785e18dc50839-text/javascript"></script>
    <script type="7ab3cb0e204785e18dc50839-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="<?= base_url('assets') ?>/js/rocket-loader.min.js" data-cf-settings="7ab3cb0e204785e18dc50839-|49" defer=""></script>
</body>

</html>z